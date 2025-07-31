<?php
/**
 Template Name: FAQ
 Page Slug: price
 Page Template Name: page-faq.php
 */
the_post();
remove_filter('the_content', 'wpautop');
$price_childs = get_field('price-child');
$price_preventions = get_field('price-prevention');
$price_portions = get_field('price-portion');
$price_mouthpieces = get_field('price-mouthpiece');
 ?>
<section class="l-main">
        <div class="l-section is-lower">
          <div class="l-section is-lower-inner">
            <?php get_template_part('content', 'pan_center'); // パンくず ?>
            <?php the_content()?>
          </div>
          <div class="l-container lazyloaded l-section is-lower">
          <div class="c-relation-lg__title lazyloaded">
              <h2 class="heading is-xlg">関連コンテンツ</h2>
          </div>
              <div class="c-relation-lg__links lazyloaded link_01">
                  <a class="c-relation-lg__block" href="/ortho/">
                      <img src="<?php GUrl::the_asset() ?>/access/imasges/child.jpg" alt="矯正治療について" data-src="<?php GUrl::the_asset() ?>/access/imasges/child.jpg" class=" lazyloaded"><noscript><img src="<?php GUrl::the_asset() ?>/access/imasges/child.jpg" alt="矯正治療について" data-eio="l"></noscript>
                      <p class="c-relation-lg__block-title">
                          矯正治療について
                      </p>
                      <p class="c-relation-lg__text">近藤歯科クリニックでは、子供たちの健全な成長発育を第一に考えております。<br>
                      したがって、矯正治療で大事な永久歯は抜かずに治療いたします。</p>
                      <div class="c-relation-lg__minitext lazyloaded">詳細を見る <i class="i fa fa-angle-right"></i></div>
                  </a>
                  <a class="c-relation-lg__block" href="/flow/">
                      <img src="<?php GUrl::the_asset() ?>/faq/images/img-flow-01.jpg" alt="矯正治療の流れ" data-src="<?php GUrl::the_asset() ?>/faq/images/img-flow-01.jpg" class=" lazyloaded"><noscript><img src="<?php GUrl::the_asset() ?>/faq/images/img-flow-01.jpg" alt="矯正治療の流れ" data-eio="l"></noscript>
                      <p class="c-relation-lg__block-title">
                        矯正治療の流れ
                      </p>
                      <p class="c-relation-lg__text">近藤歯科クリニックの矯正相談は矯正治療一般論ではなく、個別に詳しくご説明いたします。<br>
                      小児矯正の場合、年齢、骨格的なタイプ、性格、習慣、考え方などにより、それぞれ大きく変わってきます。</p>
                      <div class="c-relation-lg__minitext lazyloaded">詳細を見る <i class="i fa fa-angle-right"></i></div>
                  </a>
                  <a class="c-relation-lg__block" href="/ortho/child/">
                      <img src="<?php GUrl::the_asset() ?>/faq/images/img-child-top-01.jpg" alt="小児矯正について" data-src="<?php GUrl::the_asset() ?>/faq/images/img-child-top-01.jpg" class=" lazyloaded"><noscript><img src="<?php GUrl::the_asset() ?>/faq/images/img-child-top-01.jpg" alt="小児矯正について" data-eio="l"></noscript>
                      <p class="c-relation-lg__block-title">
                        小児矯正について
                      </p>
                      <p class="c-relation-lg__text">子どもの健全な成長発育を考え、それをプラス方向に変え、“永久歯を抜くことなく”、なるべく“症状の軽度のうちに対応”する矯正治療です。</p>
                      <div class="c-relation-lg__minitext lazyloaded">詳細を見る <i class="i fa fa-angle-right"></i></div>
                  </a>
                  <a class="c-relation-lg__block" href="/price/">
                      <img src="<?php GUrl::the_asset() ?>/faq/images/preice.jpg" data-src="<?php GUrl::the_asset() ?>/faq/images/preice.jpg" class=" lazyloaded"><noscript><img src="<?php GUrl::the_asset() ?>/faq/images/preice.jpg" alt="費用について" data-eio="l"></noscript>
                      <p class="c-relation-lg__block-title">
                        費用について
                      </p>
                      <p class="c-relation-lg__text">当クリニックの矯正費用はすべて分割式（デンタルローンもあります）です。</p>
                      <div class="c-relation-lg__minitext lazyloaded">詳細を見る <i class="i fa fa-angle-right"></i></div>
                  </a>
              </div>
          </div>
        </div>
      </section>
