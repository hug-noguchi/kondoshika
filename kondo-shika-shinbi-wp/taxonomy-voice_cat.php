<?php
/**
 * アーカイブテンプレート
 * =====================================================
 * @package  growp
 * @license  GPLv2 or later
 * @since 1.0.0
 * @see http://codex.wordpress.org/Template_Hierarchy
 * =====================================================
 */
// ページヘッダーの設定
add_filter( 'growp/page_header/title', function () {
	return '患者様の声';
} );
add_filter( 'growp/page_header/image', function () {
	return GUrl::asset( '/assets/images/pagehead-voice.jpg' );
} );
// カラム設定
add_action("growp/wrapper", function () {
	return "twocolumn";
});
if ( have_posts() ) :
?>
<div class="c-content-box  is-voice">
    <div class="c-content-box__inner">
        <div class="c-content-box__content">
            <h2>「<?php single_tag_title(); ?>」の患者様の声</h2>
	        <?php
	        while ( have_posts() ) :
		        the_post();
		        GTemplate::get_project( "post-item-voice" );
	        endwhile;
	        ?>
        </div>
    </div>
	<?php
	// ページネーション
	echo GNav::get_paging_nav();
	?>
</div>
<?php endif;
