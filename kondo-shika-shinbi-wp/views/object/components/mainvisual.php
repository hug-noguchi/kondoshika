<?php
/**
 * メインビジュアル
 *
 * @category components
 * @package growp
 * @since 1.0.0
 */
if ( ! is_front_page() ) {
	return false;
}
$mainvisuals = get_field('main-visual','option');
?>
<div class="c-main-visual">
    <img class="u-hidden-lg c-main-visual__cloud" src="<?php GUrl::the_asset()?>/assets/images/img-clud-sp.png" alt="装飾の雲"/>
    <a class="c-main-visual__button" href="<?php GUrl::the_url()?>/aboutus/">
        <img src="<?php GUrl::the_asset()?>/assets/images/main-visual-text.png" alt="からだと歯にやさしい歯を抜かない矯正歯科"/>
    </a>
    <div class="c-main-visual__slider  owl-carousel owl-theme">
        <?php foreach($mainvisuals as $mainvisual) { ?>
        <div class="c-main-visual__image" style="background-image: url(<?php echo GTag::get_attachment_url( $mainvisual['main-visual-image'], 'full' ); ?>)">
        </div>
        <?php } ?>
    </div>
</div>
