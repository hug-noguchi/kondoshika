<?php
/**
 Template Name: セクション囲いなし
 Page Slug: plain
 Page Template Name: page-plain.php
 */
remove_filter('the_content', 'wpautop');
the_post();
get_template_part('content', 'pan_plain'); // パンくず
the_content();
