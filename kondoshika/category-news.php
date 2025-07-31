<?php get_header(); ?>

<article>
	<section class="kiji">
		<div class="pankuzu">
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}?>
			</div>
		</div>
		<h2>お知らせ</h2>
		<div class="post_contents">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

			<div class="post_miashi"><h3><?php the_title(); ?></h3></div>
 <div class="content">

<div class="clearfix">
<div class="il">
<a href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail()) { the_post_thumbnail('mid_size'); } else { echo '<img src="'; bloginfo('template_url'); echo '/img/common/no_image1.gif" alt="" title="" />'; }; ?></a>
</div>
<div class="">
      <p class="desc2"><?php new_excerpt(120); ?></p>
	  <p class="il_detail"><a class="read_more" href="<?php the_permalink() ?>">詳細を見る</a></p>
</div>
 </div>
 </div>


    <?php endwhile; else: ?>
 <div class="content">
	 <p>投稿がありません。</p>
 </div>
    <?php endif; ?>


		</div>
		<?php include('navigation.php'); ?>
	</section>
</article>
<?php get_footer(); ?>