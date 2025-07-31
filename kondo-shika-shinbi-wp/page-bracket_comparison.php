<?php
/**
 Template Name: インビザライン（マウスピース矯正）とブラケット矯正との比較
 Page Slug: bracket_comparison
 Page Template Name: page-bracket_comparison.php
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
