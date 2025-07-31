<?php
/**
 Template Name: 院内紹介
 Page Slug: introduction
 Page Template Name: page-introduction.php
 */
the_post();
remove_filter('the_content', 'wpautop');
$introductions = get_field('introduction');
$galleries = get_field('gallery');
 ?>
<section class="l-main">
        <div class="l-section is-lower">
          <div class="l-section is-lower-inner">
            <?php get_template_part('content', 'pan_center'); // パンくず ?>
            <div class="c-introduction">
              <div class="c-introduction__inner">
                <div class="c-introduction__section">
                  <div class="c-title-block">
                    <div class="l-container">
                      <div class="c-title-block__title">
                        <h2 class="heading is-xlg">当院の設備</h2>
                      </div>
                      <div class="c-title-block__lead">
                        <?php echo get_field('introduction-lead');?>
                      </div>
                    </div>
                  </div>
                  <div class="c-introduction__conts">
                    <div class="l-container">
                      <div class="c-introduction__block">
                          <?php foreach($introductions as $introduction_key => $introduction) { ?>
                        <div class="c-introduction__box">
                          <div class="c-introduction__images">
<img class="c-introduction__image u-image-circle" src="<?php echo GTag::get_attachment_url( $introduction['introduction-image'], 'full' ); ?>" alt="<?php echo $introduction['introduction-title']?>">
                          </div>
                          <div class="c-introduction__texts">
                            <div class="c-introduction__title"><?php echo $introduction['introduction-title']?></div>
                            <div class="c-introduction__text"><?php echo $introduction['introduction-text']?></div>
                          </div>
                        </div>
                          <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="c-introduction__section">
                  <div class="c-title-block">
                    <div class="l-container">
                      <div class="c-title-block__title">
                        <h2 class="heading is-xlg">当院のギャラリー</h2>
                      </div>
                      <div class="c-title-block__lead">
	                      <?php echo get_field('gallery-lead');?>
                      </div>
                    </div>
                  </div>
                  <div class="c-introduction__conts">
                    <div class="l-container">
                      <div class="c-introduction__block">
	                      <?php foreach($galleries as $gallery_key => $gallery) { ?>
                              <div class="c-introduction__box">
                                  <div class="c-introduction__images">
                                      <img class="c-introduction__image u-image-circle" src="<?php echo GTag::get_attachment_url( $gallery['gallery-image'], 'full' ); ?>" alt="<?php echo $gallery['gallery-title']?>">
                                  </div>
                                  <div class="c-introduction__texts">
                                      <div class="c-introduction__title"><?php echo $gallery['gallery-title']?></div>
                                      <div class="c-introduction__text"><?php echo $gallery['gallery-text']?></div>
                                  </div>
                              </div>
	                      <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
