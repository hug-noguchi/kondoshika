<?php
/**
 * テーマのための関数
 * =====================================================
 * @package  growp
 * @since 1.0.0
 * =====================================================
 */

/**
 * バージョン情報の出力
 * キャッシュ対策
 */
define( 'GROWP_VERSIONING', '1.0.7' );

// テンプレートのパス
define( 'GROWP_TEMPLATE_PATH', dirname( __FILE__ ) );

// CSSファイル
define( "GROWP_STYLESHEET_URL", get_stylesheet_directory_uri() . "/assets/css/style.css" );

// テーマのJavaScriptファイル
define( "GROWP_JAVASCRIPT_URL", get_stylesheet_directory_uri() . "/assets/js/scripts.js" );

// composer
require_once dirname( __FILE__ ) . "/vendor/autoload.php";

/**
 * テーマのための class
 */
require_once dirname( __FILE__ ) . "/src/classes/class-theme-wrapper.php";
require_once dirname( __FILE__ ) . "/src/classes/class-menu-posts.php";
require_once dirname( __FILE__ ) . "/src/classes/class-post-type.php";
require_once dirname( __FILE__ ) . "/src/classes/class-tgm-plugin-activation.php";
require_once dirname( __FILE__ ) . "/src/classes/class-walker-comment.php";
require_once dirname( __FILE__ ) . "/src/classes/class-walker-nav.php";
require_once dirname( __FILE__ ) . "/src/classes/class-sitemap.php";
require_once dirname( __FILE__ ) . "/src/classes/class-acfadminbar.php";

/**
 * 初期コンテンツの作成
 */
require_once dirname( __FILE__ ) . "/src/mock/mock.php";

/**
 * テンプレートタグ定義
 */
require_once dirname( __FILE__ ) . "/src/tags/nav.php";
require_once dirname( __FILE__ ) . "/src/tags/tag.php";
require_once dirname( __FILE__ ) . "/src/tags/template.php";
require_once dirname( __FILE__ ) . "/src/tags/url.php";

/**
 * アクションフック定義
 */
require_once dirname( __FILE__ ) . "/src/hooks/comment.php";
require_once dirname( __FILE__ ) . "/src/hooks/default-plugins.php";
require_once dirname( __FILE__ ) . "/src/hooks/extras.php";
require_once dirname( __FILE__ ) . "/src/hooks/scripts.php";
require_once dirname( __FILE__ ) . "/src/hooks/setup.php";
require_once dirname( __FILE__ ) . "/src/hooks/sidebar.php";

if ( function_exists( 'acf_add_options_page' ) ) {
	// 診療時間
	acf_add_options_page( array(
		'page_title' => '診療時間',
		'menu_title' => '診療時間',
		'menu_slug'  => 'theme-general-settings01',
		'capability' => 'edit_posts',
		'redirect'   => false
	) );
	// メインビジュアル設定
	acf_add_options_page( array(
		'page_title' => 'メインビジュアル設定',
		'menu_title' => 'メインビジュアル設定',
		'menu_slug'  => 'theme-general-settings02',
		'capability' => 'edit_posts',
		'redirect'   => false
	) );
}

// テンプレートを固定ページとして作成
// growp-setup を利用した際に有効
function growp_create_pages()
{
   if (!get_option("growp_create_pages")) {
        $files = glob(__DIR__ . "/page-*.php");
        foreach ($files as $file) {
            $fileheaders = get_file_data($file, ["Page Slug", "Template Name", "Page Template Name"]);
            $post_id = wp_insert_post([
                'post_type' => "page",
                'post_title' => $fileheaders[1],
                'post_name' => $fileheaders[0],
                'post_content' => "",
                'post_status' => "publish",
            ]);
            update_post_meta($post_id, "_wp_page_template", $fileheaders[2]);
        }
        update_option("growp_create_pages", true);
   }
}
add_action("init", "growp_create_pages");

// 2021.03.25 これがあると、新着情報一覧のページネーションが効かなくなるので無効化
function remcat_function($link) {
	return str_replace("/category/", "/", $link);
}
//add_filter('user_trailingslashit', 'remcat_function');
function remcat_flush_rules() {
	global $wp_rewrite;
	$wp_rewrite->flush_rules();
}
add_action('init', 'remcat_flush_rules');

// 2021.03.25 これがあると、新着情報一覧のページネーションが効かなくなるので無効化
function remcat_rewrite($wp_rewrite) {
	$new_rules = array('(.+)/page/(.+)/?' => 'index.php?category_name='.$wp_rewrite->preg_index(1).'&paged='.$wp_rewrite->preg_index(2));
	$wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}
//add_filter('generate_rewrite_rules', 'remcat_rewrite');

// パンくずリストの「post」で更新情報の階層を非表示にする 2021.02.25追加
// メインのアーカイブの設定が「post」では無く「news」になってしまっているので、この点は引継ぎ前に何を変更してそうなったのか、
// 後日の解析を考えてメモをしておきます。
add_action('bcn_after_fill', 'bc_limit');
	function bc_limit ($trail) {
		if ( get_post_type() === 'post' ) {
		$max = count($trail->breadcrumbs);
		for ($i = 0; $i < $max - 1; $i++) {
			$noindex = $trail->trail[$i]->get_title();
			if($noindex == "更新情報"){
				unset($trail -> trail[$i]);
			}
		}
	}
}
