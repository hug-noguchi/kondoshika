<?php
/**
* サイト共通 サイドバー
*
* @category components
* @package growp
* @since 1.0.0
*/
?>
<div class="c-sidebar">
  <div class="c-sidebar__title">カテゴリー</div>

  <ul>
    <?php
    if(is_post_type_archive('voice')||is_singular('voice')||(is_tax('voice_cat'))) {
      echo '<li class="c-sidebar__item"><a href="';
      echo home_url();
      echo '/voice/">すべて</a></li>';
      $categories = get_terms('voice_cat');
    } else {
      echo '<li class="c-sidebar__item"><a href="';
      echo home_url();
      echo '/news/">すべて</a></li>';
      $categories = get_terms('category');
    }
    foreach( $categories as $category ){
      if ( $category->parent ) {
        continue;
      }
      ?>
      <li class="c-sidebar__item"><a href="<?php echo get_category_link( $category->term_id ) ?>"><?php echo $category->name ?></a></li>
    <?php } ?>
  </ul>
</div>

<div class="c-sidebar c-sidebar__list">
<h3 class="c-sidebar__title wpp_title">人気記事</h3>
		 <?php
$args = array(
  'range' => 'last30days',
  'order_by' => 'views',
  'post_type' => 'post',
  'limit' => 5,
  'thumbnail_width' => 150,
  'thumbnail_height' => 150,
  'post_html' => '<li class="c-sidebar__item wpp_list">{thumb} <a href="{url}">{text_title}</a></li>'
);
wpp_get_mostpopular($args);
?> 


<!-- <ul class="wpp-list">
<li class="c-sidebar__item wpp_list"><a href="https://kondo-shika-shinbi.test-hug.net/orthodontic_column/808/" target="_self"><img src="https://kondo-shika-shinbi.test-hug.net/wp-content/uploads/2021/01/E18_0217_0173.png" width="150" height="150" alt="" class="wpp-thumbnail wpp_featured wpp_def_no_src" loading="lazy"></a> <a href="https://kondo-shika-shinbi.test-hug.net/orthodontic_column/808/">前歯が生えてこない！</a></li>
<li class="c-sidebar__item wpp_list"><a href="https://kondo-shika-shinbi.test-hug.net/orthodontic_column/798/" target="_self"><img src="https://kondo-shika-shinbi.test-hug.net/wp-content/uploads/2021/01/E18_0217_0173.png" width="150" height="150" alt="" class="wpp-thumbnail wpp_featured wpp_def_no_src" loading="lazy"></a> <a href="https://kondo-shika-shinbi.test-hug.net/orthodontic_column/798/">乳歯（子どもの歯）の生え変わり</a></li>
<li class="c-sidebar__item wpp_list"><a href="https://kondo-shika-shinbi.test-hug.net/orthodontic_column/833/" target="_self"><img src="https://kondo-shika-shinbi.test-hug.net/wp-content/uploads/2022/10/no-image.jpg" width="150" height="150" alt="" class="wpp-thumbnail wpp_featured wpp_def_no_src" loading="lazy"></a> <a href="https://kondo-shika-shinbi.test-hug.net/orthodontic_column/833/">子どもの歯並びと指しゃぶり</a></li>
<li class="c-sidebar__item wpp_list"><a href="https://kondo-shika-shinbi.test-hug.net/orthodontic_column/859/" target="_self"><img src="https://kondo-shika-shinbi.test-hug.net/wp-content/uploads/2022/10/no-image.jpg" width="150" height="150" alt="" class="wpp-thumbnail wpp_featured wpp_def_no_src" loading="lazy"></a> <a href="https://kondo-shika-shinbi.test-hug.net/orthodontic_column/859/">矯正装置の種類</a></li>
<li class="c-sidebar__item wpp_list"><a href="https://kondo-shika-shinbi.test-hug.net/orthodontic_column/832/" target="_self"><img src="https://kondo-shika-shinbi.test-hug.net/wp-content/uploads/2022/10/no-image.jpg" width="150" height="150" alt="" class="wpp-thumbnail wpp_featured wpp_def_no_src" loading="lazy"></a> <a href="https://kondo-shika-shinbi.test-hug.net/orthodontic_column/832/">子どもの歯並びと舌の癖</a></li>

</ul> -->
</div>

<div class="c-sidebar">
  <div class="c-sidebar__title  is-archive">月間アーカイブ</div>
  <select name="archive-dropdown"
  onchange="document.location.href=this.options[this.selectedIndex].value;">
  <option value=""><?php echo esc_attr(__('Select Month')); ?></option>
  <?php
  if(is_post_type_archive('voice')||is_singular('voice')) {
    $post_type = 'voice';
  } else {
    $post_type = 'post';
  }
  $date_args = array(
    'type' => 'monthly',
    'limit' => '',
    'format' => 'option',
    'before' => '',
    'after' => '',
    'show_post_count' => false,
    'echo' => 1,
    'order' => 'DESC',
    'post_type' => $post_type,
    );
    wp_get_archives($date_args);
    ?>
  </select>
</div>
<div class="c-sidebar">
  <div class="c-sidebar__banners">
    <!--　コメントアウト 2021.0225
      <?php
      $categories = get_terms('category');
      foreach( $categories as $category ){
        if ( $category->parent || $category->term_id == 5 || $category->term_id == 6 || $category->term_id == 7 || $category->term_id == 8) {
          continue;
        }
        ?>
        <a class="c-sidebar__banner" href="<?php echo get_category_link( $category->term_id ) ?>">
          <img src="<?php GUrl::the_asset()?>/assets/images/img-banner-0<?php echo $category->term_id; ?>.jpg" alt="<?php echo $category->name ?>"/>
        </a>
      <?php } ?>
    -->
    <a class="c-sidebar__banner" href="<?php echo home_url(); ?>/info">
      <img src="<?php GUrl::the_asset()?>/assets/images/img-banner-01.jpg" alt="お知らせ"/>
    </a>
    <a class="c-sidebar__banner" href="<?php echo home_url(); ?>/orthodontic_column">
      <img src="<?php GUrl::the_asset()?>/assets/images/img-banner-05.jpg" alt="矯正歯科コラム"/>
    </a>
    <a class="c-sidebar__banner" href="<?php echo home_url(); ?>/staff_blog">
      <img src="<?php GUrl::the_asset()?>/assets/images/img-banner-03.jpg" alt="スタッフブログ"/>
    </a>
  </div>
</div>
