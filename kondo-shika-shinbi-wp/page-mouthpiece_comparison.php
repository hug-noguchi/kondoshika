<?php
/**
 Template Name: インビザラインと他のマウスピースの比較
 Page Slug: mouthpiece_comparison
 Page Template Name: page-mouthpiece_comparison.php
 */
the_post();
remove_filter('the_content', 'wpautop');
 ?>
 <section class="l-main">
         <div class="l-section is-lower">
           <div class="l-section is-lower-inner">
             <?php get_template_part('content', 'pan'); // パンくず ?>
             <?php the_content()?>
           </div>
         </div>
       </section>
