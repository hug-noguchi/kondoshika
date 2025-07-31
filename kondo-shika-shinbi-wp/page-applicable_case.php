<?php
/**
 Template Name: インビザラインの適応症例
 Page Slug: applicable_case
 Page Template Name: page-applicable_case.php
 */
the_post();
remove_filter('the_content', 'wpautop');
 ?>
 <section class="l-main">
         <div class="l-section is-lower">
           <div class="l-section is-lower-inner">
             <?php get_template_part('content', 'pan_center'); // パンくず ?>
             <?php the_content()?>
           </div>
         </div>
       </section>
