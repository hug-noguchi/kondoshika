<?php

/* 不要機能を削除
* ---------------------------------------- */

remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');


function in_category_family( $parent ) {
if ( empty($parent) )
        return false;
 
    if ( in_category($parent) )
        return true;
 
    $parent = get_category($parent);
    foreach ( (get_the_category()) as $child ) {
        $child = get_category($child->cat_ID);
        if ( cat_is_ancestor_of($parent, $child) )
            return true;
    }
 
    return false;
}

add_filter( 'wp_kses_allowed_html', 'my_wp_kses_allowed_html', 10, 2 );
function my_wp_kses_allowed_html( $tags, $context ) {
	$tags['img']['srcset'] = true;
	$tags['source']['src'] = true;
	return $tags;
}


// ユーザーエージェントを判定するための関数---------------------------------------------------------------------
function is_mobile() {
	
	$match = 0;
	
	$ua = array(
	'iPhone', // iPhone
	'iPod', // iPod touch
	'iPad', // iPod touch
	'Android.*Mobile', // 1.5+ Android *** Only mobile
	'Windows.*Phone', // *** Windows Phone
	'dream', // Pre 1.5 Android
	'CUPCAKE', // 1.5+ Android
	'BlackBerry', // BlackBerry
	'webOS', // Palm Pre Experimental
	'incognito', // Other iPhone browser
	'webmate' // Other iPhone browser
	);
	
	$pattern = '/' . implode( '|', $ua ) . '/i';
	$match   = preg_match( $pattern, $_SERVER['HTTP_USER_AGENT'] );
	
	if ( $match === 1 ) {
		return TRUE;
	} else {
		return FALSE;
	}
	
}
// 固定ページにタグを設定
function add_tag_to_page() {
	register_taxonomy_for_object_type('post_tag', 'page');
}
add_action('init', 'add_tag_to_page');

// タグアーカイブに固定ページを含める
function add_page_to_tag_archive( $obj ) {
	if ( is_tag() ) {
		$obj->query_vars['post_type'] = array( 'post', 'page' );
	}
}
add_action( 'pre_get_posts', 'add_page_to_tag_archive' );

// オリジナルの抜粋記事 --------------------------------------------------------------------------------
function new_excerpt($a) {

 $base_content = get_the_content();
 $base_content = preg_replace('!<style.*?>.*?</style.*?>!is', '', $base_content);
 $base_content = preg_replace('!<script.*?>.*?</script.*?>!is', '', $base_content);
 $base_content = strip_tags($base_content);
 $trim_content = mb_substr($base_content, 0, $a ,"utf-8");
 $trim_content = mb_ereg_replace('&nbsp;', '', $trim_content);

 echo $trim_content . '…';

};


// contact form 7 のファイルを必要な場合のみ読み込む
function wpcf7_file_control()
{
    add_filter("wpcf7_load_js", "__return_false");
    add_filter("wpcf7_load_css", "__return_false");

    if( is_page("contact") ){
        if( function_exists("wpcf7_enqueue_scripts") ) wpcf7_enqueue_scripts();
        if( function_exists("wpcf7_enqueue_styles") ) wpcf7_enqueue_styles();
    }
}
add_action("template_redirect", "wpcf7_file_control");

remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');

function my_delete_plugin_files() {
    wp_dequeue_style('wp-pagenavi');
}
add_action( 'wp_enqueue_scripts', 'my_delete_plugin_files' );

function my_delete_local_jquery() {
    wp_deregister_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'my_delete_local_jquery' );

// 自動整形 -----------------------------------------------------------------------
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_content', 'wptexturize' );
remove_filter( 'widget_text_content', 'wpautop' );
remove_filter( 'widget_text_content', 'wptexturize' );

function custom_tiny_mce_before_init( $init_array ) {
    global $allowedposttags;

    $init_array['valid_elements'] = '*[*]'; // タグの属性をすべて許可(削除されないように)
    $init_array['extended_valid_elements'] = '*[*]'; // 拡張属性をすべて許可(削除されないように)
    $init_array['valid_children'] = '+body[style],+div[div|span],+span[span]'; // 空タグや、属性なしのタグを消さない
    $init_array['indent'] = true; // インデントを有効に

    return $init_array;
}
add_filter( 'tiny_mce_before_init', 'custom_tiny_mce_before_init' );


// Javascriptの読み込み -----------------------------------------------------------------------
function widget_admin_scripts() {
  wp_enqueue_script('thickbox');
  wp_enqueue_script('media-upload');
  wp_enqueue_style('imgareaselect');
  wp_enqueue_script('ml-widget-js', get_template_directory_uri().'/widget/js/script.js', '', '1', true);
  wp_enqueue_script('dp-image-manager', get_template_directory_uri().'/admin/js/image-manager.js', array('jquery', 'jquery-ui-draggable', 'imgareaselect'));
  wp_enqueue_script('jscolor', get_template_directory_uri().'/admin/js/jscolor.js');
  wp_enqueue_script('jquery.cookieTab', get_template_directory_uri().'/admin/js/jquery.cookieTab.js');
  wp_enqueue_script('my_script', get_template_directory_uri().'/admin/js/my_script.js', '', '1.2.0', true);
  wp_enqueue_script('ml-fancybox-js', get_template_directory_uri().'/admin/js/fancybox/jquery.fancybox.pack.js', '', '1', true);
	wp_enqueue_media();//画像アップロード用
?>
<script type="text/javascript">
  var cfmf_text = { title:'<?php _e('Please Select Image', 'tcd-w'); ?>', button:'<?php _e('Use this Image', 'tcd-w'); ?>' };
</script>
<?php
  wp_enqueue_script('cf-media-field', get_template_directory_uri().'/admin/js/cf-media-field.js', '', '1', true); //画像アップロード用
}
add_action('admin_print_scripts', 'widget_admin_scripts');

// 言語ファイルの読み込み --------------------------------------------------------------------------------
load_textdomain('tcd-w', dirname(__FILE__).'/languages/' . get_locale() . '.mo');


// テーマオプション --------------------------------------------------------------------------------
require_once ( dirname(__FILE__) . '/admin/theme-options.php' );


// 更新通知 --------------------------------------------------------------------------------
require_once ( dirname(__FILE__) . '/functions/update_notifier.php' );


// ウィジェットの読み込み ------------------------------------------------------------------------
require_once ( dirname(__FILE__) . '/widget/recommend_post.php' );
require_once ( dirname(__FILE__) . '/widget/ad.php' );


// おすすめ記事 --------------------------------------------------------------------------------
require_once ( dirname(__FILE__) . '/functions/recommend.php' );


// meta title meta description  --------------------------------------------------------------------------------
require_once ( dirname(__FILE__) . '/functions/seo.php' );


// カスタムページリンク  ------------------------------------------------------------------------
require_once ( dirname(__FILE__) . '/functions/custom_page_link.php' );


//ロゴ画像用関数 --------------------------------------------------------------------------------
get_template_part('functions/header-logo');

// スタイルシートの読み込み --------------------------------------------------------------------------------
add_action('admin_print_styles', 'my_admin_CSS');
function my_admin_CSS() {
 wp_enqueue_style('myAdminCSS', get_bloginfo('stylesheet_directory').'/admin/my_admin.css');
};


// ビジュアルエディタ用スタイルシートの読み込み --------------------------------------------------------------------------------
add_editor_style();


// カスタムメニューの設定 --------------------------------------------------------------------------------
if(function_exists('register_nav_menu')) {
 register_nav_menu( 'global-menu', __( 'Global menu', 'tcd-w' ) );
}


@ini_set( 'max_execution_time', '100' );
@ini_set( 'post_max_size', '50M');
@ini_set( 'upload_max_size' , '30M' );


remove_filter('template_redirect', 'redirect_canonical');


// サムネイルの設定 --------------------------------------------------------------------------------

if (function_exists('add_theme_support')) {
add_theme_support('post-thumbnails');
add_image_size( 'large_size', 640, 640, true );
add_image_size( 'mid_size', 208, 208, true );
add_image_size( 'small_size', 64, 64, true );
}


// バージョン管理 ----------------------------------------------------------------------------------------------
function version_num() {

 if (function_exists('wp_get_theme')) {
  $theme_data = wp_get_theme();
 } else {
  $theme_data = get_theme_data(TEMPLATEPATH . '/style.css');
 };

 $current_version = $theme_data['Version'];

 echo "?ver=" . $current_version;

};




// 記事の最初の画像を取得--
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];

if(empty($first_img)){ //Defines a default image
        $first_img = "http://www.mangohouse.jp/dahesfkz/common/img/common/no_image1.gif";
    }
    return $first_img;
}




// ウィジェットの設定 ------------------------------------------------------------------------------
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'before_widget' => '<div class="side_widget clearfix %2$s" id="%1$s">'."\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h3 class="side_headline"><span>',
        'after_title' => "</span></h3>\n",
        'name' => __('Side widget', 'tcd-w'),
        'id' => 'side_widget'
    ));
    register_sidebar(array(
        'before_widget' => '<div class="side_widget clearfix %2$s" id="%1$s">'."\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h3 class="side_headline"><span>',
        'after_title' => "</span></h3>\n",
        'name' => __('Side widget2', 'tcd-w'),
        'description' => __('Only use in three column layout', 'tcd-w'),
        'id' => 'side_widget2'
    ));
    register_sidebar(array(
        'before_widget' => '<div class="footer_widget clearfix %2$s" id="%1$s">'."\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h3 class="footer_headline">',
        'after_title' => "</h3>\n",
        'name' => __('Footer left area widget', 'tcd-w'),
        'id' => 'footer_widget1'
    ));
    register_sidebar(array(
        'before_widget' => '<div class="footer_widget clearfix %2$s" id="%1$s">'."\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h3 class="footer_headline">',
        'after_title' => "</h3>\n",
        'name' => __('Footer center area widget', 'tcd-w'),
        'id' => 'footer_widget2'
    ));
    register_sidebar(array(
        'before_widget' => '<div class="footer_widget clearfix %2$s" id="%1$s">'."\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h3 class="footer_headline">',
        'after_title' => "</h3>\n",
        'name' => __('Footer right area widget', 'tcd-w'),
        'id' => 'footer_widget3'
    ));
    register_sidebar(array(
        'before_widget' => '<div class="side_widget clearfix %2$s" id="%1$s">'."\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h3 class="side_headline"><span>',
        'after_title' => "</span></h3>\n",
        'name' => __('Smartphone widget', 'tcd-w'),
        'description' => __('This widget will be replaced with other widget when user accessed the site with the smartphone.', 'tcd-w'),
        'id' => 'smartphone_widget'
    ));
}




//抜粋からPタグを取り除く
remove_filter( 'the_excerpt', 'wpautop' );


// ページナビ用 --------------------------------------------------------------------------------
function show_posts_nav() {
global $wp_query;
return ($wp_query->max_num_pages > 1);
};


// アイキャッチに文言を追加 --------------------------------------------------------------------------------
add_filter( 'admin_post_thumbnail_html', 'add_featured_image_instruction');
function add_featured_image_instruction( $content ) {
 return $content .= '<p>' . __('Upload post thumbnail from here.', 'tcd-w') . '</p>';
};


//　ヘッダーから余分なMETA情報を削除 --------------------------------------------------------------------
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');


//　サムネイルの設定 --------------------------------------------------------------------------------
if (function_exists('add_theme_support')) {
add_theme_support('post-thumbnails');
add_image_size( 'mid_size', 220, 146, true );
add_image_size( 'small_size', 64, 64, true );
}

//　言語の設定 --------------------------------------------------------------------------------
add_filter( 'bogo_language_switcher_links', 'custom_bogo_language_title_name', 10, 2 );
function custom_bogo_language_title_name( $links ) {
  foreach ( $links as $code => $name ) {
    if ( $name['lang'] === 'en-US' ) {
      $links[$code]['title'] = 'EN';
      $links[$code]['native_name'] = 'EN';
    } elseif ( $name['lang'] === 'ja' ) {
      $links[$code]['title'] = 'JP';
      $links[$code]['native_name'] = 'JP';
    } elseif ( $name['lang'] === 'zh-CN' ) {
      $links[$code]['title'] = '簡体中文';
      $links[$code]['native_name'] = '簡体中文';
    } elseif ( $name['lang'] === 'zh-HK' ) {
      $links[$code]['title'] = '繁体中文';
      $links[$code]['native_name'] = '繁体中文';
    }
  }
  return $links;
}

//bogo 国旗アイコンを削除
add_filter( 'bogo_use_flags','bogo_use_flags_false');
function bogo_use_flags_false(){
 return false;
}

//　カスタムグローバルナビ --------------------------------------------------------------------------------
class description_walker extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth = 0, $args =  array(), $id = 0) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="'. esc_attr( $class_names ) . '"';

		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$prepend = '<strong>';
		$append = '</strong>';
		$description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

		if($depth != 0) {
			$description = $append = $prepend = "";
		}

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
		$item_output .= $description.$args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}


// カスタムコメント --------------------------------------------------------------------------------------

if (function_exists('wp_list_comments')) {
	// comment count
	add_filter('get_comments_number', 'comment_count', 0);
	function comment_count( $commentcount ) {
		global $id;
		$_commnets = get_comments('post_id=' . $id);
		$comments_by_type = &separate_comments($_commnets);
		return count($comments_by_type['comment']);
	}
}


function custom_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	global $commentcount;
	if(!$commentcount) {
		$commentcount = 0;
	}
?>

 <li class="comment <?php if($comment->comment_author_email == get_the_author_meta('email')) {echo 'admin-comment';} else {echo 'guest-comment';} ?>" id="comment-<?php comment_ID() ?>">
  <div class="comment-meta clearfix">
   <div class="comment-meta-left">
  <?php if (function_exists('get_avatar') && get_option('show_avatars')) { echo get_avatar($comment, 35); } ?>

    <ul class="comment-name-date">
     <li class="comment-name">
<?php if (get_comment_author_url()) : ?>
<a id="commentauthor-<?php comment_ID() ?>" class="url <?php if($comment->comment_author_email == get_the_author_meta('email')) {echo 'admin-url';} else {echo 'guest-url';} ?>" href="<?php comment_author_url() ?>" rel="nofollow">
<?php else : ?>
<span id="commentauthor-<?php comment_ID() ?>">
<?php endif; ?>

<?php comment_author(); ?>

<?php if(get_comment_author_url()) : ?>
</a>
<?php else : ?>
</span>
<?php endif;  $options = get_option('tcd-w_options'); ?>
     </li>
     <li class="comment-date"><?php echo get_comment_time(__('F jS, Y', 'tcd-w')); if ($options['time_stamp']) : echo get_comment_time(__(' g:ia', 'tcd-w')); endif; ?></li>
    </ul>
   </div>

   <ul class="comment-act">
<?php if (function_exists('comment_reply_link')) {
        if ( get_option('thread_comments') == '1' ) { ?>
    <li class="comment-reply"><?php comment_reply_link(array_merge( $args, array('add_below' => 'comment-content', 'depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => '<span><span>'.__('REPLY','tcd-w').'</span></span>'))) ?></li>
<?php   } else { ?>
    <li class="comment-reply"><a href="javascript:void(0);" onclick="MGJS_CMT.reply('commentauthor-<?php comment_ID() ?>', 'comment-<?php comment_ID() ?>', 'comment');"><?php _e('REPLY', 'tcd-w'); ?></a></li>
<?php   }
      } else { ?>
    <li class="comment-reply"><a href="javascript:void(0);" onclick="MGJS_CMT.reply('commentauthor-<?php comment_ID() ?>', 'comment-<?php comment_ID() ?>', 'comment');"><?php _e('REPLY', 'tcd-w'); ?></a></li>
<?php } ?>
    <li class="comment-quote"><a href="javascript:void(0);" onclick="MGJS_CMT.quote('commentauthor-<?php comment_ID() ?>', 'comment-<?php comment_ID() ?>', 'comment-content-<?php comment_ID() ?>', 'comment');"><?php _e('QUOTE', 'tcd-w'); ?></a></li>
    <?php edit_comment_link(__('EDIT', 'tcd-w'), '<li class="comment-edit">', '</li>'); ?>
   </ul>

  </div>
  <div class="comment-content post" id="comment-content-<?php comment_ID() ?>">
  <?php if ($comment->comment_approved == '0') : ?>
   <span class="comment-note"><?php _e('Your comment is awaiting moderation.', 'tcd-w'); ?></span>
  <?php endif; ?>
  <?php comment_text(); ?>
  </div>

<?php } ?>