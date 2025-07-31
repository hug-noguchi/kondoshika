<?php
/**
Template Name: ノーマルテンプレート
Page Slug: normal
Page Template Name: page-normal.php
 */
the_post();
remove_filter('the_content', 'wpautop');
if(is_page('access')) {
	$Class = 'is-blue';
};
?>
<div class="l-section is-lower <?php echo $Class;?>">
    <div class="l-section is-lower-inner <?php echo $Class;?>">
			<?php get_template_part('content', 'pan_center'); // パンくず ?>
	    <?php the_content(); ?>
    </div>
</div>
