<?php

 class ad_widget extends WP_Widget {

 function ad_widget() {
  $widget_ops = array( 'classname' => 'ad_widget', 'description' => __('The adsense set on the theme options page will be displayed.','tcd-w') ); // Widget Settings
  $control_ops = array( 'id_base' => 'ad_widget' ); // Widget Control Settings
  $this->WP_Widget( 'ad_widget', __('Adsense','tcd-w'), $widget_ops, $control_ops ); // Create the widget
 }

 function widget($args, $instance) {
   extract($args);
   echo $before_widget;

   $options = get_desing_plus_option();

   if ($options['side_ad3'] || $options['side_ad_url3']) { 
    $random2 = rand(0,2);
   } elseif ($options['side_ad2'] || $options['side_ad_url2']) {
    $random2 = rand(0,1);
   } elseif ($options['side_ad1'] || $options['side_ad_url1']) {
    $random2 = rand(0,0);
   };

?>

<?php if($random2==0){ ?>
<?php if ($options['side_ad1']) { echo $options['side_ad1']; } else { ?><a href="<?php echo $options['side_ad_url1']; ?>" class="target_blank"><img src="<?php esc_attr_e( $options['side_ad_image1'] ); ?>" alt="" /></a><?php }; ?>
<?php } elseif($random2==1){ ?>
<?php if ($options['side_ad2']) { echo $options['side_ad2']; } else { ?><a href="<?php echo $options['side_ad_url2']; ?>" class="target_blank"><img src="<?php esc_attr_e( $options['side_ad_image2'] ); ?>" alt="" /></a><?php }; ?>
<?php } elseif($random2==2){ ?>
<?php if ($options['side_ad3']) { echo $options['side_ad3']; } else { ?><a href="<?php echo $options['side_ad_url3']; ?>" class="target_blank"><img src="<?php esc_attr_e( $options['side_ad_image3'] ); ?>" alt="" /></a><?php }; ?>
<?php }; ?>

<?php
   echo $after_widget;
 }
}

add_action('widgets_init', create_function('', 'return register_widget("ad_widget");'));

?>