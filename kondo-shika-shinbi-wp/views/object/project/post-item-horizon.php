<?php
/**
 * 記事一覧時の1記事分のテンプレート（サムネイル有）
 * =====================================================
 * @package  growp
 * @license  GPLv2 or later
 * @since 1.0.0
 * =====================================================
 */
?>
<a class="c-content-box__block-link" href="<?php the_permalink()?>">
    <span class="c-content-box__images" <?php GTag::the_thumbnail_style_attribute(get_the_ID(), "full") ?>></span>
    <span class="c-content-box__texts">
        <span class="c-content-box__title"><?php the_title()?></span>
        <span class="c-content-box__sup">
            <span class="c-content-box__label  c-label"><?php echo GTag::get_first_term( get_the_ID(), "category", "name" );?></span>
            <span class="c-content-box__date"><?php echo get_the_date('Y/m/d')?></span>
        </span>
        <span class="c-content-box__text"><?php the_excerpt()?></span>
    </span>
</a>
