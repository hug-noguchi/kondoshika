<?php
/**
 * オファー ( CTA...etc )
 *
 * @category components
 * @package growp
 * @since 1.0.0
 */
?>

<div class="review js-scroll-trigger c-animation-fade" style="padding-top: 40px;padding-bottom: 40px;background-color: #fff;">
  <div class="l-container">
    <div class="review__header sectionHeader">
      <h2 class="heading is-xlg">
        Googleの口コミ
      </h2>
    </div>
    <div class="review__content">
      <?php echo do_shortcode( '[grw id="2884"]' ); ?>
    </div>
  </div>
</div>

<div class="c-offer">
    <div class="l-container">
        <div class="c-offer__inner">
            <div class="c-offer__title">
                <h2 class="heading is-xlg">お問い合わせ / ご予約</h2>
            </div>
            <div class="c-offer__lead">立川の矯正歯科なら近藤歯科クリニックへ<br class="u-hidden-lg"><br>矯正・小児矯正に関する、ご相談・お問い合わせはお気軽に<br class="u-hidden-lg">下記よりご連絡ください。
            </div>
            <div class="c-offer__box">
                <div class="c-offer__button is-last">
                    <div class="c-offer__tel-text">お電話でのご予約お問い合わせはこちら
                    </div>
                    <a class="c-offer__tel" href="tel:042-524-0722"><i class="fa fa-phone" aria-hidden="true"></i>042-524-0722
                    </a>
                </div>
                <div class="c-offer__button">
                    <a class="c-button is-mail is-arrow is-yellow is-effect" href="<?php GUrl::the_url()?>/contact/">
                        メールでのお問い合わせはこちら
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
