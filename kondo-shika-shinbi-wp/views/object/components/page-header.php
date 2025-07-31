<?php
/**
 * サイト共通 ページヘッダー
 *
 * @category components
 * @package growp
 * @since 1.0.0
 */
/**
 * トップページでは非表示に
 */
if ( is_front_page() ) {
	return false;
}

global $post;
$title       = apply_filters( 'growp/page_header/title', get_the_title() );
$image       = apply_filters( 'growp/page_header/image', GUrl::asset( '/assets/images/pagehead-' . $post->post_name . '.jpg' ) );
$pageheaders = apply_filters( 'growp/page_header', array(
	'title'    => $title,
	'image'    => $image,
) );
?>
<!-- ページヘッダー-->
<?php if(is_page()) { ?>
    <div class="c-page-header-outer">
        <div class="c-page-header" style="background-image: url(<?php echo GTag::get_attachment_url( get_field( 'pageheader-image' ), 'full' ); ?>)">
					<div class="c-page-header__inner">
							<div class="c-page-header__title"><?php echo get_field('pageheader-title')?></div>
					</div>
        </div>
		<?php GTemplate::get_component( "breadcrumb" );?>
    </div>
<?php } elseif(is_single()) { ?>
    <div class="c-page-header-outer">
        <div class="c-page-header" style="background-image: url(<?php echo $pageheaders["image"] ?>)">
            <div class="c-page-header__inner">
                <div class="c-page-header__title"><?php echo $pageheaders["title"] ?></div>
            </div>
        </div>
		<?php GTemplate::get_component( "breadcrumb" );?>
    </div>
<?php } else { ?>
    <div class="c-page-header-outer">
        <div class="c-page-header" style="background-image: url(<?php echo $pageheaders["image"] ?>)">
            <div class="c-page-header__inner">
							<div class="c-page-header__title"><?php echo $pageheaders["title"] ?></div>
            </div>
        </div>
		<?php GTemplate::get_component( "breadcrumb" );?>
    </div>
<?php } ?>
