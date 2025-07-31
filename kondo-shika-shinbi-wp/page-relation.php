<?php
/**
 Template Name: 関連コンンツ付きページ
 Page Slug: relation
 Page Template Name: page-relation.php
 */
the_post();
remove_filter('the_content', 'wpautop');
$relations = get_field('relation');
?>

<div class="l-section is-lower is-top">
    <div class="l-section is-lower-inner">
      <?php get_template_part('content', 'pan'); // パンくず ?>
        <?php the_content()?>
    </div>
</div>
<!--関連コンテンツ出力-->
<div class="c-relation-lg  is-lower">
    <div class="c-relation-lg__inner">
        <div class="l-container">
            <div class="c-relation-lg__title">
                <h2 class="heading is-xlg">関連コンテンツ</h2>
            </div>
            <div class="c-relation-lg__links">
	            <?php foreach( $relations as $relation_key => $relation ){
                    $relation_link = $relation['relation-content'];
                    ?>
                    <?php if($relation['relation-check']) { ?>
                    <a class="c-relation-lg__block" href="<?php echo $relation['relation-url']?>">
                    <?php } else { ?>
                    <a class="c-relation-lg__block" href="<?php echo get_the_permalink($relation_link->ID)?>">
                    <?php } ?>
                        <span class="c-relation-lg__image"><img src="<?php echo GTag::get_attachment_url( $relation['relation-image'], 'full' ); ?>" alt="<?php echo $relation['relation-title']?>">
                        </span>
                        <span class="c-relation-lg__block-title"><?php echo $relation['relation-title']?></span>
                        <span class="c-relation-lg__text"><?php echo $relation['relation-text']?></span>
                        <div class="c-relation-lg__minitext">詳細を見る <i class="i fa fa-angle-right"></i></div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php if(is_page('aboutus')) { ?>
<div class="u-mbs is-bottom is-lg" style="display: none;">
    <div class="l-container">
        <div class="row">
            <div class="large-5 is-push-lg-1 small-12 u-mbs is-bottom is-xs">
                <a href="<?php GUrl::the_url()?>/reservation/" target="_blank"><img src="<?php GUrl::the_asset()?>/assets/images/img-banner-res-top.png" alt="ドクターズファイル"></a>
            </div>
            <div class="large-5 small-12">
                <a href="<?php GUrl::the_url()?>/reservation/" target="_blank"><img src="<?php GUrl::the_asset()?>/assets/images/img-banner-inv.png" alt="インビザラインの予約"></a>
            </div>
        </div>
    </div>
</div>
<?php } ?>
