<?php
/**
Template Name: youtubeテンプレート
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

		 <?php // 新着情報取得 -----------------------------------------
		 $args = array(
			 'post_type'=>'youtube',
			 'numberposts'=>-1
		 );
		 // 検索条件から取得処理
		 $youtube = get_posts( $args );
		 // -----------------------------------------------------
		 ?>

		 <?php if(!empty($youtube)): ?>
			 <ul id="youtube_list">
				 <?php foreach($youtube as $post ): setup_postdata($post);  ?>
					 <li>
						 <a href="https://www.youtube.com/watch?v=<?php the_field('youtubeID'); ?>" target="_blank">
							 <div class="img">
								 <?php if(get_field('youThumb')){ ?>
									 <img src="<?php the_field('youThumb'); ?>" alt="<?php the_title(); ?>・サムネイルイメージ">
								 <?php }else{ ?>
									 <img src="<?php echo get_theme_root_uri()."/kondo-shika-shinbi-html/dist/assets/images/no_image.jpg"; ?>" alt="<?php the_title(); ?>・サムネイル無し">
								 <?php } ?>
							 </div>
							 <div class="text">
								 <div class="text_inner">
									 <span class="title">
										 <?php the_title(); ?>
									 </span>
									 <span class="disc_text">
										 <?php the_content(); ?>
									 </span>
								 </div>
							 </div>
						 </a>
					 </li>
				 <?php endforeach; ?>
			 </ul>
			 <?php wp_reset_postdata(); ?>
		 <?php else : ?>
			 <li class="center">現在youtube動画はありません。</li>
		 <?php endif; ?>

		</div>
</div>
