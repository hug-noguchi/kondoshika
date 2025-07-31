<?php
/**
 * [レイアウト]
 * フッター
 *
 * @category components
 * @package growp
 * @since 1.0.0
 */
?>

<!-- SPお問合せ&Tellボタン -->
<div class="s-pagetop">
  <a class="contact c-button is-yellow is-base-color" href="/contact/">お問い合わせ</a>
  <!-- <a class="reserve c-button is-primary" href="https://appt.doctorsfile.jp/Patient/?hid=38731" target="_blank">ご予約</a> -->
</div>

<footer class="l-footer" role="contentinfo">
    <div class="c-pagetop"><a class="c-pagetop__button js-anchor" href="#" data-anchor-target="html"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    </div>
    <div class="l-footer__utiltty">
        <div class="l-footer__utiltty-inner l-container">
            <div class="l-footer__info"><a class="l-footer__logo" href="<?php echo home_url(); ?>/"><img src="<?php GUrl::the_asset()?>/assets/images/logo-footer.jpg" alt="近藤歯科クリニック" /></a>
                <div class="l-footer__add is-add-pc">
                    東京都立川市高松町2-25-3 メープル立川1F<br>
                    立川駅徒歩10分
                </div>
                <?php GTemplate::get_component( "table-schedule" );?>
                <p style="padding-left:1em;
text-indent:-1em;
               font-size: 13px;">※駐車場3台完備(1台増設して駐車場3台)従来の番号1，2の隣の3です。</p>
            </div>
            <div class="l-footer__map">
                <div class="c-google-map">
                    <div class="c-google-map__inner"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6479.693715862818!2d139.419512!3d35.705386!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e16eecc0673d%3A0xe4d9cfb7db427108!2z44CSMTkwLTAwMTEg5p2x5Lqs6YO956uL5bed5biC6auY5p2-55S677yS5LiB55uu77yS77yV4oiS77yT!5e0!3m2!1sja!2sjp!4v1562305321309!5m2!1sja!2sjp" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                </div>
                <div class="l-footer__add is-add-sp">
                    東京都立川市高松町2-25-3 メープル立川1F<br>
                    立川駅徒歩10分
                </div>

				 <div class="sp">
					 <div class="l-footer__add is-add-sp">
                    <a href="https://tachikawa-kyousei-kondoshika.net/" target="_blank">立川矯正歯科(患者様、ママ、お子様に寄り添う<br class="sp">歯科クリニック)</a>
                </div>
				</div>

                <div class="l-footer__map-button"><a class="c-button is-md is-arrow is-primary is-effect" href="//goo.gl/maps/UtkYHCBFPCzSBrga6" target="_blank">Mapを見る</a></div>
            </div>
        </div>
    </div>
    <div class="l-footer__menu">
        <div class="l-footer__menu-inner l-container">
            <div class="l-footer__menu-block">
                <ul class="l-footer__list">
                    <li><a href="<?php echo home_url(); ?>/">矯正歯科HOME</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/ortho/">矯正治療</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/ortho/child/">小児矯正</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/ortho/adult/">マウスピース矯正（成人矯正）</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/ortho/prevention/">予防矯正</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/ortho/adult/mouthpiece/">インビザライン（マウスピース矯正）</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/ortho/adult/portion/">部分矯正</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/price/">費用について</a>
                    </li>
                </ul>
            </div>
            <div class="l-footer__menu-block">
                <ul class="l-footer__list">
                    <li><a href="<?php echo home_url(); ?>/aboutus/">近藤歯科クリニックについて</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/staff/">院長・スタッフ紹介</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/introduction/">院内紹介</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/access/">アクセス・診療時間</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/flow/">矯正治療の流れ</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a>
                    </li>
                </ul>
            </div>
            <div class="l-footer__menu-block">
                <ul class="l-footer__list">
                    <!--<li><a href="<?php echo home_url(); ?>/voice/">患者様の声</a></li>-->
                    <li><a href="<?php echo home_url(); ?>/news/">お知らせ</a></li>
                    <li><a href="<?php echo home_url(); ?>/movie/">矯正を動画でわかりやすくご案内</a></li>
                    <!--<li><a href="<?php echo home_url(); ?>/archives/tegory/school_blog/">小学生のみなさんへ</a></li>-->
                </ul>
            </div>
            <div class="l-footer__menu-block">
                <ul class="l-footer__list">
                    <li><a href="<?php echo home_url(); ?>/staff_blog/">スタッフブログ</a></li>
                    <li><a href="<?php echo home_url(); ?>/orthodontic_column/">矯正歯科コラム</a></li>
                    <li><a href="<?php echo home_url(); ?>/case_of_correction/">矯正の事例集</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="l-footer__bottom">
        <div class="l-container">
            <ul class="l-footer__privacys">
                <li><a href="<?php echo home_url(); ?>/privacy-policy/">個人情報保護方針</a>
                </li>
                <li><a href="<?php echo home_url(); ?>/sitemap/">サイトマップ</a>
                </li>
                <li><a href="https://tachikawa-kyousei-kondoshika.net/" target="_blank">立川矯正歯科(患者様、ママ、お子様に寄り添う歯科クリニック)</a></li>
            </ul>
            <div class="l-footer__copyright">Copyrigh© 2021 <a href="<?php echo home_url(); ?>">立川 矯正歯科 近藤歯科クリニック</a> <br class="u-hidden-lg">All Rights Reserved.</div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
    window._mfq = window._mfq || [];
    (function() {
        var mf = document.createElement("script");
        mf.type = "text/javascript";
        mf.defer = true;
        mf.src = "//cdn.mouseflow.com/projects/0c68811c-e9b9-450a-b355-cc0e2c2f1295.js";
        document.getElementsByTagName("head")[0].appendChild(mf);
    })();

</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
$(function() {
    var topBtn = $('.c-pagetop');
        topBtn.hide();
        //スクロールが100に達したらボタン表示
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                topBtn.fadeIn();
            } else {
                topBtn.fadeOut();
            }
        });
        // スクロールしてトップ
        topBtn.click(function () {
            $('body,html,').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    });

    $(function () {
        $(window).on('load scroll', function () {
            var $header = $('.l-header');

            // 200以上スクロールしたら処理
            if ($(window).scrollTop() > 200) {
            $header.addClass('header--min');
            } else {
            $header.removeClass('header--min');
            }
        });
    });

    $(function(){
      // #で始まるアンカーをクリックした場合に処理
      $('.heading_list a[href^="#"]').click(function(){
        // 移動先を92px上にずらす
        var adjust = 112;
        // スクロールの速度
        var speed = 400; // ミリ秒
        // アンカーの値取得
        var href= $(this).attr("href");
        // 移動先を取得
        var target = $(href == "#" || href == "" ? 'html' : href);
        // 移動先を調整
        var position = target.offset().top - adjust;
        // スムーススクロール
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
      });
    });
</script>

<!--
<?php if ( is_post_type_archive('movie') ) : ?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script type="text/javascript">
//初回のみモーダルをすぐ出す判定。flagがモーダル表示のstart_open後に代入される
  var access = $.cookie('access')
  if(!access){
    flag = true;
    $.cookie('access', false);
  }else{
    flag = false
  }

  //モーダル表示
  $(".video-open").modaal({
  start_open:flag, // ページロード時に表示するか
  overlay_close:true,//モーダル背景クリック時に閉じるか
  type: 'video',
  background: '#28BFE7', // 背景色
  overlay_opacity:0.8, // 透過具合
  before_open:function(){// モーダルが開く前に行う動作
    $('html').css('overflow-y','hidden');/*縦スクロールバーを出さない*/
  },
  after_close:function(){// モーダルが閉じた後に行う動作
    $('html').css('overflow-y','scroll');/*縦スクロールバーを出す*/
  }
  });
</script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css">
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/9-6-2/css/9-6-2.css">
<?php endif; ?>
-->

</body>

</html>
