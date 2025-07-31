<?php get_header(); ?>

<article>
	<section class="kiji">
		<div class="pankuzu clearfix">
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}?>
			</div><?php if(has_tag()==true) : ?><span class="tname">｜<?php
			$posttags = get_the_tags();
			foreach ( $posttags as $tag ) {
				echo $tag->name.' ';
			}
			?>
			</span><?php endif; ?>
		</div>
		<h2><?php the_title(); ?></h2>
		<div class="post_contents clearfix">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <?php the_content(__('Read more', 'tcd-w')); ?>
            <?php custom_wp_link_pages(); ?>
            
            <?php endwhile; endif; ?>
		</div>
		<?php if(has_tag()==false) : ?>
		<div class="contact_top fadein">
			<p class="movie_img"><img src="<?php echo home_url('/'); ?>images/fcon_top.png" alt="お問い合わせ・ご予約"></p>
			<h3 class="greet_catch01">お問い合わせ・ご予約</h3>
			<p class="greet_catch02">Contact</p>
			
			<div class="fcon">
				<p>立川の矯正歯科なら近藤歯科クリニックへ<br />
					矯正・小児矯正に関する、ご相談・お問い合わせはお気軽に下記よりご連絡ください。
				</p>
				<br />
				<div class="btnarea clearfix">
					
					<div class="tel-btn">
						<a href="tel: 0425240722;" class="btn btn--circle"><span class="tcon">お電話でのご予約お問い合わせ</span><br /><span class="tcon2">042-524-0722</span></a>
					</div>
					
					<div class="mail-btn">
						<a href="<?php echo home_url('/'); ?>contact/" class="btn btn--circle2">お問い合わせフォーム</a>
					</div>
				</div>
			</div>
		</div>
		<?php else: ?>
		<?php endif; ?>
	</section>
</article>
<?php if(has_tag()==true) : ?>
<article>
	<section class="related">
		
		<div class="related-post">
			<h4 class="related-title">関連記事</h4>
					<div class="flex-box-movie">
				<?php
				$original_post = $post;
				$tags = wp_get_post_tags($post->ID);
				$tagIDs = array();
				if ($tags) {
					$tagcount = count($tags);
					for ($i = 0; $i < $tagcount; $i++) {
						$tagIDs[$i] = $tags[$i]->term_id;
					}
					$args=array(
					'tag__in' => $tagIDs,
					'post__not_in' => array($post->ID),
					'showposts'=>4,
					'ignore_sticky_posts'=>1,
					'post_type'=>'page'
					);
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
						while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<div class="flex-item-m">
							<?php if (has_post_thumbnail()) : ?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
							<?php else : ?>
							<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/noimage2.gif" width="100%" height="auto" alt="デフォルト画像" /></a>
							<?php endif ; ?>
							<p class="related-t"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
							</div>
						<?php endwhile; wp_reset_query(); ?>
					<?php } else { ?>
						関連する記事はありません。
				<?php } }?>
				</div>
		</div>
		<div class="contact_top fadein">
			<p class="movie_img"><img src="<?php echo home_url('/'); ?>images/fcon_top.png" alt="お問い合わせ・ご予約"></p>
			<h3 class="greet_catch01">お問い合わせ・ご予約</h3>
			<p class="greet_catch02">Contact</p>
			
			<div class="fcon">
				<p>立川の矯正歯科なら近藤歯科クリニックへ<br />
					矯正・小児矯正に関する、ご相談・お問い合わせはお気軽に下記よりご連絡ください。
				</p>
				<br />
				<div class="btnarea clearfix">
					
					<div class="tel-btn">
						<a href="tel: 0425240722;" class="btn btn--circle"><span class="tcon">お電話でのご予約お問い合わせ</span><br /><span class="tcon2">042-524-0722</span></a>
					</div>
					
					<div class="mail-btn">
						<a href="<?php echo home_url('/'); ?>contact/" class="btn btn--circle2">お問い合わせフォーム</a>
					</div>
				</div>
			</div>
		</div>
		<?php else: ?>
		<?php endif; ?>

	</section>
</article>

<?php get_footer(); ?>