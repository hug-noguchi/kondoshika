<?php
/**
 Template Name: インビザラインと床矯正比較
 Page Slug: floor_comparison
 Page Template Name: page-floor_comparison.php
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
         <div class="l-container lazyloaded l-section is-lower">
                    <div class="c-relation-lg__title lazyloaded">
                        <h2 class="heading is-xlg">関連コンテンツ</h2>
                    </div>
                        <div class="c-relation-lg__links lazyloaded link_01">
                            <a class="c-relation-lg__block" href="/ortho/">
                                <img src="<?php GUrl::the_asset() ?>/access/imasges/child.jpg" alt="矯正治療について">
                                <p class="c-relation-lg__block-title">
                                    矯正治療について
                                </p>    
                                <p class="c-relation-lg__text">近藤歯科クリニックでは、子供たちの健全な成長発育を第一に考えております。<br>
                                したがって、矯正治療で大事な永久歯は抜かずに治療いたします。</p>
                                <div class="c-relation-lg__minitext lazyloaded">詳細を見る <i class="i fa fa-angle-right"></i></div>
                            </a>
                            <a class="c-relation-lg__block" href="/ortho/child/">
                                <img src="<?php GUrl::the_asset() ?>/ortho/mouthpiece/images/syounikyousei.jpg" alt="⼩児矯正とは">
                                <p class="c-relation-lg__block-title">
                                ⼩児矯正とは
                                </p>
                                <p class="c-relation-lg__text">近藤⻭科クリニックの小児矯正では、自然に無理なく、 【⻭並びを良くする】だけでなく、お子様、お父様、 お母様方とまっすぐに向き合い、ともに、心身ともに向上していけますよう、 小児矯正に取り組んでおります。</p>    
                                <div class="c-relation-lg__minitext lazyloaded">詳細を見る <i class="i fa fa-angle-right"></i></div>
                            </a>
                        </div>
                    </div>
       </section>
