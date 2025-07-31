<?php get_header(); $options = get_desing_plus_option(); ?>

 <div id="main_col_wrap">
  <div id="main_col">
   <div id="content" class="clearfix">

    <?php
         global $query_string;
         query_posts($query_string . "&post_type=post");
         if (have_posts()):
    ?>

    <h2 class="headline_base1"><span><?php printf(__('Search results for - [ %s ]', 'tcd-w'), get_search_query()); ?></span></h2>

    <?php while ( have_posts() ) : the_post(); ?>
    <div class="post_list clearfix">
     <h4 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
     <?php if ($options['show_date'] or $options['show_category'] or $options['show_tag'] or $options['show_comment']) { ?>
     <div class="meta clearfix">
      <?php if ($options['show_date']) : ?><p class="date"><?php the_time('Y.m.d'); ?></p><?php endif; ?>
      <?php if ($options['show_category']) : ?><ul class="post_category clearfix"><li><?php the_category('</li><li>'); ?></li></ul><?php endif; ?>
      <?php if ($options['show_tag']): ?><?php the_tags('<ul class="post_tag clearfix"><li>',',</li><li>','</li></ul>'); ?><?php endif; ?>
      <?php if ($options['show_comment']) : ?><p class="post_comment"><?php comments_popup_link(__('Write comment', 'tcd-w'), __('1 comment', 'tcd-w'), __('% comments', 'tcd-w')); ?></p><?php endif; ?>
     </div>
     <?php }; ?>
     <a class="image" href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail()) { the_post_thumbnail('mid_size'); } else { echo '<img src="'; bloginfo('template_url'); echo '/img/common/no_image1.gif" alt="" title="" />'; }; ?></a>
     <div class="desc_area">
      <p class="desc"><?php new_excerpt(120); ?></p>
      <a class="read_more" href="<?php the_permalink() ?>"><?php _e("Read more","tcd-w"); ?></a>
     </div>
    </div><!-- END .post_list -->
    <?php endwhile; else: ?>
    <h4 class="headline_base1" style="margin-bottom:30px;"><span><?php _e("There is no registered post.","tcd-w"); ?></span></h4>
    <?php endif; ?>

    <?php include('navigation.php'); ?>

   </div><!-- END #content -->
  </div><!-- END #main_col -->
 </div><!-- END #main_col_wrap -->

 <?php if(!is_mobile()) { ?>
 <?php include('sidebar.php'); ?>
 <?php if($options['layout'] == 'three_column1'||$options['layout'] == 'three_column2') { include('sidebar2.php'); }; ?>
 <?php }; ?>

<?php get_footer(); ?>