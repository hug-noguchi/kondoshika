<?php
/**
 * 投稿テンプレート
 * =====================================================
 * @package  growp
 * @license  GPLv2 or later
 * @since 1.0.0
 * @see http://codex.wordpress.org/Template_Hierarchy
 * =====================================================
 */

 // アクセス制限
//header('HTTP/1.1 301 Moved Permanently');
//header('Location: https://kondo-shika-shinbi.com/');
//exit();

// ページヘッダーの設定
add_filter( 'growp/page_header/title', function () {
	return '患者様の声';
} );
add_filter( 'growp/page_header/image', function () {
	return GUrl::asset( '/assets/images/pagehead-voice.jpg' );
} );
// カラム設定
add_action( "growp/wrapper", function () {
	return "twocolumn";
} );
while ( have_posts() ) :
	the_post();
	?>
    <div class="c-post-head">
        <h1 class="c-post-head__title u-mbs is-bottom is-xs"><?php the_title(); ?></h1>
        <div class="c-post-head__sup">
            <div class="c-post-head__label  c-label"><?php echo GTag::get_first_term( get_the_ID(), "voice_cat", "name" ); ?> </div>
            <div class="c-post-head__date"><?php echo get_the_date() ?></div>
        </div>
        <div class="c-post-head__name">
            投稿者名：<?php echo get_field('voice-name')?>
        </div>
    </div>
    <div class="c-post-content">
		<?php the_content() ?>
    </div>
    <nav class="c-post-navs">
		<?php
		GNav::the_post_nav();
		?>
    </nav>
	<?php
endwhile; // end of the loop.
