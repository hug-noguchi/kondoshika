<?php
/**
 * 固定ページテンプレート
 * =====================================================
 * @package  growp
 * @license  GPLv2 or later
 * @since 1.0.0
 * @see http://codex.wordpress.org/Template_Hierarchy
 * =====================================================
 */
while ( have_posts() ) :
	the_post();
    remove_filter('the_content', 'wpautop');
$relations = get_field('relation');
	?>
	<div class="l-section is-lower">
        <div class="l-section is-lower-inner">
            <div class="l-container">
                <div class="l-post-content">
	                <?php the_content(); ?>

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
                </div>
            </div>
        </div>
	</div>
<?php endwhile; // end of the loop.
