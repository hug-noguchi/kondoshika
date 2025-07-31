<?php
/**
 * Template Name: アクセス・診療時間
 * Page Slug: acsess
 * Page Template Name: page-access.php
 */
while ( have_posts() ) :
	the_post();
	?>
	<div class="l-section is-lower">
        <div class="l-section is-lower-inner">
            <div>
                <div class="l-post-content">
	                <?php the_content(); ?>
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
                            <a class="c-relation-lg__block" href="/aboutus/">
                                <img src="<?php GUrl::the_asset() ?>/access/imasges/clinic.jpg" alt="近藤歯科クリニックについて">
                                <p class="c-relation-lg__block-title">
                                    近藤歯科クリニックについて
                                </p>
                                <p class="c-relation-lg__text">当クリニックの小児矯正は身体にやさしい矯正歯科です。<br>
                                永久歯も抜きませんし、歯にかかる力も固定式のワイヤー、ブラケット装置よりも少ないです。</p>    
                                <div class="c-relation-lg__minitext lazyloaded">詳細を見る <i class="i fa fa-angle-right"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
<?php endwhile; // end of the loop.