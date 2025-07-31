<?php
/**
 Template Name: 費用について
 Page Slug: price
 Page Template Name: page-price.php
 */
the_post();
remove_filter('the_content', 'wpautop');
$price_childs = get_field('price-child');
$price_preventions = get_field('price-prevention');
$price_portions = get_field('price-portion');
$price_mouthpieces = get_field('price-mouthpiece');
 ?>

 <style>
  .c-offer__container {
    max-width: 1060px;
    margin-left: auto;
    margin-right: auto;
  }
  @media screen and (min-width: 0em) and (max-width: 59.3125em) {
    .c-offer__container-box {
        padding-right: 16px;
        padding-left: 16px;
    }
    .c-offer__text.is-bold {
        margin-bottom: 16px;
    }
  }
 </style>

<section class="l-main">
        <div class="l-section is-lower">
          <div class="l-section is-lower-inner">
            <?php get_template_part('content', 'pan_center'); // パンくず ?>
            <?php the_content()?>
            <div class="c-price-conts">
              <div class="c-price-conts__inner">
                <div class="c-price-conts__block" id="child">
                  <div class="c-tabs is-page-link">
                    <div class="l-container">
                      <ul class="c-tabs__navs">
                        <li>
                          <a class="js-anchor is-active" href="#" data-anchor-target="#child">小児矯正</a>
                        </li>
                        <li>
                          <a class="js-anchor" href="#" data-anchor-target="#prevention">予防矯正</a>
                        </li>
                        <li>
                          <a class="js-anchor" href="#" data-anchor-target="#portion">部分矯正</a>
                        </li>
                        <li>
                            <a class="js-anchor" href="#" data-anchor-target="#mouthpiece">マウスピース矯正</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="l-container">
                    <div class="c-price-conts__head">
                      <div class="c-price-conts__text  u-text-center">
                        <?php if($price_childs['price-check']) {
                            echo $price_childs['price-child-discription'];
                        } ?>
                      </div>
                    </div>
                    <?php
                        $price_blocks = $price_childs['price-block'];
                        foreach($price_blocks as $price_block_key => $price_block) {
                            ?>
                    <div class="c-price-conts__conts">
                      <div class="c-price-conts__title">
                        <h3 class="heading is-lg"><?php echo $price_block['price-block-title']?></h3>
                      </div>
                      <div class="c-price-conts__faq-block">
                        <div class="c-faq">
	                        <?php
                                $price_steps = $price_block['price-child-step'];
                                $Num = 0;
                                foreach($price_steps as $price_step_key => $price_step) {
	                                $Num++;
	                        ?>
                              <div class="c-faq__block js-accordion">
                                <div class="c-faq__title" data-accordion-title="faq-title">
                                  <div class="c-faq__number"><?php echo $Num;?></div>
                                  <div class="c-faq__title-text"><?php echo $price_step['price-child-step-title']?></div>
                                </div>
                                <div class="c-faq__text" data-accordion-content="faq-text">
	                                <?php echo $price_step['price-child-step-text']?>
                                </div>
                              </div>
                            <?php } ?>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                  </div>
                </div>
                <div class="c-price-conts__block" id="prevention">
                  <div class="c-tabs is-page-link">
                    <div class="l-container">
                      <ul class="c-tabs__navs">
                        <li>
<a class="js-anchor" href="#" data-anchor-target="#child">小児矯正</a>
                        </li>
                        <li>
<a class="js-anchor is-active" href="#" data-anchor-target="#prevention">予防矯正</a>
                        </li>
                        <li>
<a class="js-anchor" href="#" data-anchor-target="#portion">部分矯正</a>
                        </li>
                        <li>
<a class="js-anchor" href="#" data-anchor-target="#mouthpiece">マウスピース矯正</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="l-container">
                    <div class="c-price-conts__head">
                      <div class="c-price-conts__text  u-text-center">
	                      <?php if($price_preventions['price-check']) {
		                      echo $price_preventions['price-discription'];
	                      } ?>
                      </div>
                    </div>
                  <?php
                      $price_blocks = $price_preventions['price-block'];
                      foreach($price_blocks as $price_block_key => $price_block) {
                  ?>
                    <div class="c-price-conts__conts">
                      <div class="c-price-conts__title">
                        <h3 class="heading is-lg"><?php echo $price_block['price-block-title']?></h3>
                      </div>
                      <div class="c-price-conts__faq-block">
                          <div class="c-faq">
		                      <?php
		                      $price_steps = $price_block['price-child-step'];
		                      foreach($price_steps as $price_step_key => $price_step) {
			                      ?>
                                  <div class="c-faq__block js-accordion">
                                      <div class="c-faq__title" data-accordion-title="faq-title">
                                      <div class="c-faq__number"><?php echo $price_step_key+1 ?></div>
                                          <div class="c-faq__title-text"><?php echo $price_step['price-child-step-title']?></div>
                                      </div>
                                      <div class="c-faq__text" data-accordion-content="faq-text">
					                      <?php echo $price_step['price-child-step-text']?>
                                      </div>
                                  </div>
		                      <?php } ?>
                          </div>
                      </div>
                    </div>
                  <?php } ?>
                  <div class="c-offer__container lazyloaded">
                    <p class="c-offer__text is-bold">
                      矯正・小児矯正に関する、ご相談・お問い合わせはお気軽に下記よりご連絡ください。</p>
                    <div class="c-offer__button is-large lazyloaded">
                      <a class="c-button is-mail is-arrow is-yellow is-effect" href="https://kondo-shika-shinbi.com/contact/"><span>メールでのお問い合わせはこちら</span></a>
                    </div>
                  </div>
                  </div>
                </div>
                <div class="c-price-conts__block" id="portion">
                  <div class="c-tabs is-page-link">
                    <div class="l-container">
                      <ul class="c-tabs__navs">
                        <li>
<a class="js-anchor" href="#" data-anchor-target="#child">小児矯正</a>
                        </li>
                        <li>
<a class="js-anchor" href="#" data-anchor-target="#prevention">予防矯正</a>
                        </li>
                        <li>
<a class="js-anchor is-active" href="#" data-anchor-target="#portion">部分矯正</a>
                        </li>
                        <li>
<a class="js-anchor" href="#" data-anchor-target="#mouthpiece">マウスピース矯正</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="l-container">
                    <div class="c-price-conts__head">
                      <div class="c-price-conts__text  u-text-center">
	                      <?php if($price_portions['price-check']) {
		                      echo $price_portions['price-discription'];
	                      } ?>
                      </div>
                    </div>
                  <?php
                      $price_blocks = $price_portions['price-block'];
                      foreach($price_blocks as $price_block_key => $price_block) {
                  ?>
                    <div class="c-price-conts__conts">
                      <div class="c-price-conts__title">
                        <h3 class="heading is-lg"><?php echo $price_block['price-block-title']?></h3>
                      </div>
                      <div class="c-price-conts__faq-block">
                          <div class="c-faq">
		                      <?php
		                      $price_steps = $price_block['price-child-step'];
		                      foreach($price_steps as $price_step_key => $price_step) {
			                      ?>
                                  <div class="c-faq__block js-accordion">
                                      <div class="c-faq__title" data-accordion-title="faq-title">
                                      <div class="c-faq__number"><?php echo $price_step_key+1 ?></div>
                                          <div class="c-faq__title-text"><?php echo $price_step['price-child-step-title']?></div>
                                      </div>
                                      <div class="c-faq__text" data-accordion-content="faq-text">
					                      <?php echo $price_step['price-child-step-text']?>
                                      </div>
                                  </div>
		                      <?php } ?>
                          </div>
                      </div>
                    </div>
                      <?php } ?>
                  </div>
                </div>
                <div class="c-price-conts__block" id="mouthpiece">
                  <div class="c-tabs is-page-link">
                    <div class="l-container">
                      <ul class="c-tabs__navs">
                        <li>
<a class="js-anchor" href="#" data-anchor-target="#child">小児矯正</a>
                        </li>
                        <li>
<a class="js-anchor" href="#" data-anchor-target="#prevention">予防矯正</a>
                        </li>
                        <li>
<a class="js-anchor" href="#" data-anchor-target="#portion">部分矯正</a>
                        </li>
                        <li>
<a class="js-anchor is-active" href="#" data-anchor-target="#mouthpiece">マウスピース矯正</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="l-container">
                    <div class="c-price-conts__head">
                      <div class="c-price-conts__text  u-text-center">
	                      <?php if($price_mouthpieces['price-check']) {
		                      echo $price_mouthpieces['price-discription'];
	                      } ?>
                      </div>
                    </div>
                  <?php
                      $price_blocks = $price_mouthpieces['price-block'];
                      foreach($price_blocks as $price_block_key => $price_block) {
                  ?>
                    <div class="c-price-conts__conts">
                      <div class="c-price-conts__title">
                        <h3 class="heading is-lg"><?php echo $price_block['price-block-title']?></h3>
                      </div>
                      <div class="c-price-conts__faq-block">
                          <div class="c-faq">
		                      <?php
		                      $price_steps = $price_block['price-child-step'];
		                      foreach($price_steps as $price_step_key => $price_step) {
			                      ?>
                                  <div class="c-faq__block js-accordion">
                                      <div class="c-faq__title" data-accordion-title="faq-title">
                                          <div class="c-faq__number"><?php echo $price_step_key+1 ?></div>
                                          <div class="c-faq__title-text"><?php echo $price_step['price-child-step-title']?></div>
                                      </div>
                                      <div class="c-faq__text" data-accordion-content="faq-text">
					                      <?php echo $price_step['price-child-step-text']?>
                                      </div>
                                  </div>
		                      <?php } ?>
                          </div>
                      </div>
                    </div>
                  <?php } ?>
			<div class="u-text-center">
				<a class="c-button is-lg is-arrow is-primary is-effect" style="display: inline-block;" href="https://kondo-shika-shinbi.com/archives/793/">
					<span><span>詳しくはこちら</span></span>
				</a>
			</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
