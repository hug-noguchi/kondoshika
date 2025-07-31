<?php
/**
* [レイアウト]
* ヘッダー
*
* @category components
* @package growp
* @since 1.0.0
*/
?>
<header class="l-header <?php if(is_front_page()) { echo 'is-top'; } else { echo 'is-lower'; }?>">
  <div class="l-header__top">
    <div class="l-header__logos">
      <?php if(is_front_page()) { ?>
        <h1 class="l-header__heading-text">立川の小児矯正歯科</h1>
      <?php } elseif( is_page('21')) { ?>
        <h1 class="l-header__heading-text">矯正治療_小児矯正歯科</h1>
      <?php } elseif( is_page('19')) { ?>
        <h1 class="l-header__heading-text">小児矯正_小児矯正歯科</h1>
      <?php } elseif( is_page('1522')) { ?>
        <h1 class="l-header__heading-text">費用について_小児矯正歯科</h1>
      <?php } elseif( is_page('6')) { ?>
        <h1 class="l-header__heading-text">近藤歯科クリニックの強み</h1>
      <?php } elseif( is_page('7')) { ?>
        <h1 class="l-header__heading-text">よくある質問</h1>
      <?php } elseif( is_page('2034')) { ?>
        <h1 class="l-header__heading-text">矯正治療の流れ</h1>
      <?php } elseif( is_page('11')) { ?>
        <h1 class="l-header__heading-text">アクセス・診療時間</h1>
      <?php } elseif( is_page('18')) { ?>
        <h1 class="l-header__heading-text">マウスピース矯正_矯正歯科</h1>
      <?php } elseif( is_page('20')) { ?>
        <h1 class="l-header__heading-text">予防矯正_小児矯正歯科</h1>
      <?php } elseif( is_page('16')) { ?>
        <h1 class="l-header__heading-text">インビザライン_矯正歯科</h1>
      <?php } elseif( is_page('17')) { ?>
        <h1 class="l-header__heading-text">部分矯正_矯正歯科</h1>
      <?php } elseif( is_page('27')) { ?>
        <h1 class="l-header__heading-text">院長・スタッフの紹介</h1>
      <?php } elseif( is_page('12')) { ?>
        <h1 class="l-header__heading-text">院内紹介_小児矯正歯科</h1>
      <?php } elseif( is_page('11')) { ?>
        <h1 class="l-header__heading-text">矯正治療の流れ_小児矯正歯科</h1>

      <?php } else { ?>
        <h1 class="l-header__heading-text">立川の矯正歯科・小児矯正なら近藤歯科クリニック</h1>
      <?php } ?>
      <div class="l-header__heading">
        <a class="l-header__logo" href="<?php GUrl::the_url() ?>/">
          <img src="<?php GUrl::the_asset()?>/assets/images/logo.png" alt="立川の矯正歯科　近藤歯科クリニック"/>
        </a>
      </div>
    </div>
    <a class="l-header__sp-tel u-hidden-lg" href="tel:042-524-0722"><i class="fa fa-phone" aria-hidden="true"></i>
    </a>
    <div class="l-header__info">
      <div class="l-header__tel">
        <span class="l-header__tel-text">お問い合わせはこちら！</span>
        <!-- <span class="l-header__tel-text">ご予約お問い合わせはこちら！</span> -->
        <a class="l-header__tel-number" href="tel:0425240722"><i class="fa fa-phone" aria-hidden="true"></i>042-524-0722
        </a>
      </div>
      <div class="l-header__contacts">
        <a class="l-header__contact" href="<?php GUrl::the_url() ?>/contact/"><span>お問い合わせ</span></a>
        <a class="l-header__reservation" href="<?php GUrl::the_url() ?>/reservation/" target="_blank" style="display: none;">
          <span>ご予約</span></a>
        </div>
      </div>
    </div>
    <nav class="l-header__nav">
      <ul class="l-header__nav-inner">
        <li>
          <a href="<?php GUrl::the_url() ?>/ortho/child/">
            <img src="<?php GUrl::the_asset()?>/assets/images/icon-global-nav-03.png" alt="小児矯正治療について"/>
            <span>小児矯正</span>
          </a>
        </li>
        <li>
          <a href="<?php GUrl::the_url() ?>/ortho/">
            <img src="<?php GUrl::the_asset()?>/assets/images/icon-global-nav-01.png" alt="矯正治療"/>
            <span>矯正治療</span>
          </a>
        </li>
        <li>
          <a href="<?php GUrl::the_url() ?>/flow/">
            <img src="<?php GUrl::the_asset()?>/assets/images/icon-global-nav-08.png" alt="矯正治療の流れ"/>
            <span>矯正治療の流れ</span>
          </a>
        </li>
        <li>
          <a href="<?php GUrl::the_url() ?>/price/">
            <img src="<?php GUrl::the_asset()?>/assets/images/icon-global-nav-02.png" alt="費用について"/>
            <span>費用について</span>
          </a>
        </li>
        <li>
          <a href="<?php GUrl::the_url() ?>/aboutus/">
            <img src="<?php GUrl::the_asset()?>/assets/images/icon-global-nav-06.png" alt="近藤歯科クリニックについて"/>
            <span>近藤歯科クリニックについて</span>
          </a>
        </li>
        <li>
          <a href="<?php GUrl::the_url() ?>/faq/">
            <img src="<?php GUrl::the_asset()?>/assets/images/icon-global-nav-09.png" alt="よくある質問"/>
            <span>よくある質問</span>
          </a>
        </li>

        <li>
          <a href="<?php GUrl::the_url() ?>/access/">
            <img src="<?php GUrl::the_asset()?>/assets/images/icon-global-nav-04.png" alt="アクセス・診療時間"/>
            <span>アクセス・診療時間</span>
          </a>
        </li>
      </ul>
    </nav>
  </header>

  <style>
    @media screen and (min-width: 950px) {
      .l-header,
      .l-header .l-header__nav {
        transition: all 0.5s linear;
      }
      .l-header.header--min {
        padding: 0 20px;
      }
      .l-header.header--min .l-header__box {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
      }
      .l-header.header--min .l-header__heading-text {
        font-size: 10px;
      }
      .l-header.header--min .l-header__heading {
        max-width: 180px;
      }
      .l-header.header--min .l-header__tel {
        margin-top: 18px;
        margin-bottom: 0;
        margin-right: 8px;
      }
      .l-header.header--min .l-header__tel-text {
        font-size: 8px;
      }
      .l-header.header--min .l-header__tel-number {
        font-size: 21px;
      }
      .l-header.header--min .l-header__contact,
      .l-header.header--min .l-header__reservation {
        width: 100px;
        font-size: 12px;
        height: 50px;
        border-radius: 8px;
        margin-top: 18px;
        margin-right: 0;
      }
      .l-header.header--min .l-header__nav {
        position: absolute;
        top: 8px;
        left: 40%;
        width: 520px;
        margin-left: -260px;
        margin-bottom: 0;
      }
      .l-header.header--min .l-header__nav-inner > li {
        font-size: 12px;
        line-height: 1.2;
        padding: 0px 10px;
      }
      .l-header.header--min .l-header__nav-inner > li img {
        width: 24px!important;
      }
      .l-header.header--min .l-header__nav-inner > li:nth-child(7) img {
        width: 18px!important;
      }
      .l-header__nav-inner > li:after {
        top: -4px;
      }
      .l-header__nav-inner > li:nth-child(2):after {
        top: 0;
      }
      .l-header__nav-inner > li:nth-child(3):after {
        top: 4px;
      }
      .l-header__nav-inner > li:nth-child(4):after {
        top: 4px;
        right: -3px;
      }
      .l-header__nav-inner > li:nth-child(5):after,
      .l-header__nav-inner > li:nth-child(6):after {
        top: 7px;
      }
    }
    @media screen and (min-width: 950px) and (max-width: 1150px) {
      .l-header.header--min {
        padding: 0 10px;
      }
      .l-header.header--min .l-header__heading {
        max-width: 120px;
      }
      .l-header.header--min .l-header__tel {
        margin-top: 22px;
      }
      .l-header.header--min .l-header__tel-text {
        padding: 0px 2px;
        margin-bottom: 0px;
      }
      .l-header.header--min .l-header__tel-number {
        font-size: 18px;
      }
      .l-header.header--min .l-header__contact,
      .l-header.header--min .l-header__reservation {
        width: 60px;
        margin-top: 20px;
      }
      .l-header.header--min .l-header__reservation span {
        padding: 0;
      }
      .l-header.header--min .l-header__nav {
        width: 520px;
        margin-left: -260px;
      }
      .l-header.header--min .l-header__nav-inner > li {
        padding: 0px 8px;
      }
      .l-header__nav-inner > li:nth-child(3):after,
      .l-header__nav-inner > li:nth-child(4):after {
        top: 4px;
      }
      .l-header__nav-inner > li:nth-child(6):after {
        top: 5px;
      }
    }
    @media screen and (max-width: 950px) {
      .l-header__top  {
        padding-top: 6px;
      }
    }
  </style>

  <div class="c-slidebar-container js-slidebar-container is-top-to-bottom">
