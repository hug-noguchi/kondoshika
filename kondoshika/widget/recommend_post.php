<?php

 // Start class widget //
 class recommend_widget extends WP_Widget {

 // Constructor //
 function recommend_widget() {
  $widget_ops = array( 'classname' => 'recommend_widget', 'description' => __('Displays your recommend posts.', 'tcd-w') ); // Widget Settings
  $control_ops = array( 'id_base' => 'recommend_widget' ); // Widget Control Settings
  $this->WP_Widget( 'recommend_widget', __('Recommend ', 'tcd-w'), $widget_ops, $control_ops ); // Create the widget
 }

 // Extract Args //
 function widget($args, $instance) {
  extract( $args );
   $title = apply_filters('widget_title', $instance['title']); // the widget title
   $post_num = $instance['post_num']; // the type of posts to show

   // Before widget //
   echo $before_widget;

   // Title of widget //
   if ( $title ) { echo $before_title . $title . $after_title; }

   // Widget output //
   $args = array('post_type' => 'post', 'posts_per_page' => $post_num, 'meta_key' => 'recommend_post', 'meta_value' => 'on', 'orderby' => 'rand');
   $recommend_post=new WP_Query($args);
   if ($recommend_post->have_posts()) {
?>
<ol class="widget_post_list">
 <?php $options = get_desing_plus_option(); while ($recommend_post->have_posts()) : $recommend_post->the_post(); ?>
 <li class="clearfix">
  <a class="image" href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail()) { the_post_thumbnail('small_size'); } else { echo '<img src="'; bloginfo('template_url'); echo '/img/common/no_image3.gif" alt="" title="" />'; }; ?></a>
  <div class="info">
   <p class="date"><?php the_time('Y-n-j'); ?></p>
   <a class="title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
  </div>
 </li>
 <?php endwhile; ?>
</ol>
<?php } else { ?>
 <p><?php _e("There is no registered post.","tcd-w"); ?></p>
<?php }; wp_reset_query(); ?>
<?php

   // After widget //
   echo $after_widget;

} // end function widget


 // Update Settings //
 function update($new_instance, $old_instance) {
  $instance['title'] = strip_tags($new_instance['title']);
  $instance['post_num'] = $new_instance['post_num'];
  return $instance;
 }

 // Widget Control Panel //
 function form($instance) {
  $defaults = array( 'title' => __('Recommend', 'tcd-w'), 'post_num' => '3');
  $instance = wp_parse_args( (array) $instance, $defaults );
?>
<p>
 <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'tcd-w'); ?></label>
 <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>'" type="text" value="<?php echo $instance['title']; ?>" />
</p>
<p>
 <label for="<?php echo $this->get_field_id('post_num'); ?>"><?php _e('Number of post:', 'tcd-w'); ?></label>
 <select id="<?php echo $this->get_field_id('post_num'); ?>" name="<?php echo $this->get_field_name('post_num'); ?>" class="widefat" style="width:100%;">
  <option value="3" <?php selected('3', $instance['post_num']); ?>>3</option>
  <option value="4" <?php selected('4', $instance['post_num']); ?>>4</option>
  <option value="5" <?php selected('5', $instance['post_num']); ?>>5</option>
  <option value="6" <?php selected('6', $instance['post_num']); ?>>6</option>
  <option value="7" <?php selected('7', $instance['post_num']); ?>>7</option>
  <option value="8" <?php selected('8', $instance['post_num']); ?>>8</option>
  <option value="9" <?php selected('9', $instance['post_num']); ?>>9</option>
  <option value="10" <?php selected('10', $instance['post_num']); ?>>10</option>
 </select>
</p>
<?php
 } // end function form
}

// End class widget
add_action('widgets_init', create_function('', 'return register_widget("recommend_widget");'));
?>