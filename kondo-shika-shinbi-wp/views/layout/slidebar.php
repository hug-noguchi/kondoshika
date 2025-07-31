<?php
/**
 * サイト共通 スマホ用メニュー
 *
 * @category components
 * @package growp
 * @since 1.0.0
 */
?>
<a class="c-slidebar-button js-slidebar-button" href="#">
    <span class="c-slidebar-button__line"><span></span><span></span><span></span></span><span class="c-slidebar-button__text">MENU</span>
</a>
<div class="c-slidebar-menu js-slidebar-menu is-top-to-bottom">
    <ul>
      <li>
          <a href="<?php GUrl::the_url() ?>/ortho/child/">小児矯正</a>
      </li>
        <li>
            <a href="<?php GUrl::the_url() ?>/ortho/">矯正治療</a>
        </li>
          <li>
            <a href="<?php GUrl::the_url() ?>/flow/">矯正治療の流れ</a>
        </li>
        <li>
            <a href="<?php GUrl::the_url() ?>/price/">費用について</a>
        </li>
        <li>
            <a href="<?php GUrl::the_url() ?>/aboutus/">近藤歯科クリニックについて</a>
        </li>
        <li>
            <a href="<?php GUrl::the_url() ?>/faq/">よくある質問</a>
        </li>

        <li>
            <a href="<?php GUrl::the_url() ?>/access/">アクセス・診療時間</a>
        </li>
    </ul>
    <div class="c-slidebar-menu__button">
        <a class="c-button is-yellow is-arrow is-base-color is-sp" href="<?php GUrl::the_url() ?>/contact/">お問い合わせ</a>
    </div>
    <div class="c-slidebar-menu__button" style="display: none;">
        <a class="c-button is-primary is-arrow is-sp" href="<?php GUrl::the_url() ?>/reservation/" target="_blank">
            ご予約
        </a>
    </div>
</div>
