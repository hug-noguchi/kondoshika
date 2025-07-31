<?php
/**
 Template Name: 関連コンンツ付きページ
 Page Slug: ortho_natural
 Page Template Name: page-ortho_natural.php
 */
the_post();
remove_filter('the_content', 'wpautop');
$relations = get_field('relation');
?>

<style>
  .c-title-block__title {
    max-width: 1140px;
    margin-left: auto;
    margin-right: auto;
  }
  .heading.is-xlg-left.title_first {
    text-align: center;
  }
  .heading.is-xlg-left.title_first:before {
    background-color: transparent;
    display: block;
    position: absolute;
    content: "";
    width: 114px;
    height: 12px;
    left: 50%;
    bottom: 0px;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
  }
  .heading_list {
    border: 1px solid #ddd;
    max-width: 1060px;
    width: 100%;
    margin: 2rem auto;
    background: #F9F7F0;
    padding: 1rem 40px;
  }
  .heading_list a {
    display: block !important;
    transition: all ease .2s !important;
    text-decoration: none !important;
    color: #333 !important;
    font-weight: 400 !important;
  }
  .heading_title02 {
    letter-spacing: -1.8px;
  }
  .c-lower-about-top__points {
    padding-top: 100px;
  }
  .title04_text-block {
    padding-top: 150px;
  }
  .title_lead {
    text-align: center;
    margin: 40px 0;
  }
  .link_01 > div {
    width: 48%;
    margin-right: 0;
    text-decoration: none;
  }
  .link_01 > div img {
    border-radius: 10px;
    border: 3px solid #78c5d2;
    width: 100%;
  }
  .link_01 .c-relation-lg__block-title {
    text-decoration: none;
    padding-left: 0;
  }
  .link_01 .c-relation-lg__block-title:before {
    all: unset;
  }
  .gokai_lead {
    margin-bottom: 10px;
  }
  .c-lower-about-top__number {
    height: 60px;
    width: 60px;
  }
  .c-lower-about-top__number-inner span:nth-child(1) {
    font-size: 10px;
    padding-bottom: 6px;
    margin-bottom: 1px;
  }
  .c-lower-about-top__number-inner span:nth-child(1):before {
    width: 40px;
  }
  .c-lower-about-top__number-inner span:nth-child(2) {
    font-size: 26px;
  }
  .reason04 .c-lower-about-top__text {
    padding: 16px 0px;
  }
  .reason_notes {
    margin-top: 20px;
  }
  @media (max-width: 1140px) {
    .heading_list {
      padding: 16px 20px !important;
      margin-right: 32px;
      margin-left: 32px;
      max-width: -webkit-fill-available;
    }
  }
  @media screen and (min-width: 0em) and (max-width: 59.3125em) {
    .heading_list {
      margin-right: 16px;
      margin-left: 16px;
    }
    .heading.is-xlg-left.title_first:before {
      width: 85px;
      height: 9px;
      background-repeat: no-repeat;
    }
    .heading_list.l-container {
      padding: 1rem 16px;
    }
    .c-lower-about-top__points {
      padding-top: 0;
    }
    .title04_text-block {
      padding-top: 0;
    }
    .title_lead {
      text-align: left;
      padding-right: 16px;
      padding-left: 16px;
    }
    .c-overview-number__block:nth-child(2n) {
      flex-direction: column-reverse;
    }
    .goal .c-lower-about-top__conts {
      display: flex;
      flex-direction: column-reverse;
    }
    .goal .c-lower-about-top__image img {
      width: 100%;
    }
    .c-lower-about-top__point {
      min-height: 92px;
    }
    .c-lower-about-top__number {
      height: 50px;
      width: 50px;
    }
    .c-lower-about-top__number-inner span:nth-child(1) {
      font-size: 8px;
    }
    .c-lower-about-top__number-inner span:nth-child(2) {
      font-size: 22px;
    }
    .c-lower-about-top__text {
      width: calc(100% - 70px);
    }
    .reason04 .c-lower-about-top__text {
      padding: 13px 0px;
    }
    .link_01 > div {
      width: auto;
    }
  }
</style>

<div class="l-section is-lower is-top">
  <div class="l-section is-lower-inner">
    <?php get_template_part('content', 'pan'); // パンくず ?>
    <div class="c-lower-about-top">
      <img class="c-lower-about-top__deco is-left" src="../wp-content/uploads/2019/08/img-cloud-blue.png" alt="飾り" />
      <img class="c-lower-about-top__deco is-right" src="../wp-content/uploads/2019/08/img-cloud-blue.png" alt="飾り" />
      <div class="c-title-block__title">
        <h2 class="heading is-xlg is-xlg-left title_first">歯を抜かない矯正治療</h2>
      </div>
      <div class="title_lead">
        <p><strong>近藤歯科クリニックでは歯（永久歯）を抜かない矯正治療を行っています。</strong></p>
        <p>なぜ、歯を抜かないで矯正治療が可能なのか、ご説明いたします。</p>
      </div>
      <div class="c-lower-about-top__inner">
        <div class="heading_list">
          <ul>
            <li><a href="#heading01">１． なぜ、矯正治療で歯を抜くのか？</a></li>
            <li><a href="#heading02">２． 近藤歯科クリニックの矯正治療の目標</a></li>
            <li><a href="#heading03">３． 矯正治療への誤解</a></li>
            <li><a href="#heading04">４． 矯正治療の後戻りは“咬めない”ことが原因</a></li>
            <li><a href="#heading05">５． なぜ、歯を抜かない矯正治療ができるのか？</a></li>
            <li><a href="#heading06">６． 近藤歯科クリニックの矯正治療</a></li>
          </ul>
        </div>
        <div class="c-lower-about-top__conts l-container">
          <div class="c-lower-about-top__images">
            <div class="c-title-block">
              <div class="c-title-block__title">
                <h2 class="heading is-xlg is-xlg-left" id="heading01">1. なぜ、矯正治療で歯を抜くのか？</h2>
              </div>
            </div>
            <div class="c-lower-about-top__image">
              <img class="u-image-radius" src="../wp-content/uploads/2021/01/iStock-697646850.jpg" alt="なぜ、矯正治療で歯を抜くのか？" />
            </div>
          </div>
          <div class="c-lower-about-top__text-block">
            従来の矯正治療は、歯をできるだけきれいに並べることでした。<br>
            現状の歯並びで、歯の重なり（叢生＝そうせい）を改善するためには、歯の並ぶスペースを確保する必要があります。<br>
            そのため、大事な永久歯を抜いてスペースをつくり、さらに、上下左右のかみ合わせのバランスを考えて上下左右1本ずつで計4本、さらに上下左右の親知らずを含めれば、計8本もの歯を抜かれるケースが多かったです。<br>
            さらに、従来の矯正治療では、子供の場合、成長発育については計算に入れず、最初の診断時の骨格写真（セファロ写真）で診断をして永久歯の抜歯の必要性の有無を決めていました。<br>
            その結果、実際の成長発育後の状態により、歯と歯の間に隙間ができてしまい、すきっぱになったり、咬み合わせが変わったりする傾向がありました。<br>
            また、永久歯の本数が少なくなることにより、歯周病にかかった時のリスクが大きくなり、歯の欠損部位が増えていく傾向にもあります。
          </div>
        </div>
      </div>
    </div>

    <div class="c-lower-about-top goal">
      <img class="c-lower-about-top__deco is-left" src="../wp-content/uploads/2019/08/img-cloud-blue.png" alt="飾り" />
      <img class="c-lower-about-top__deco is-right" src="../wp-content/uploads/2019/08/img-cloud-blue.png" alt="飾り" />
      <div class="c-lower-about-top__inner">
        <div class="c-lower-about-top__conts l-container">
          <div class="c-lower-about-top__text-block">
            <p style="color: #ff0000;">
              近藤歯科クリニックの矯正治療の目標は<br>
              歯を抜かずに、よく噛めて、後戻りの少ない、歯に負担のかけない矯正治療です。
            </p>
            <p>
              歯は、見た目大事ですが、“よく噛める”とういう機能も大事です。<br>
              機能を考えますと、永久歯を抜く（それも4～8本）というのは、“咬む機能”（咀嚼機能）におきましてだいぶマイナスになります。<br>
              そして、“よく噛めない！”ということは、矯正治療後の後戻りの原因にもなります。<br>
              なぜならば、歯並びは“かみ合わせ”（咬合）によって維持されるからです。
            </p>
          </div>
          <div class="c-lower-about-top__images">
            <div class="c-title-block">
              <div class="c-title-block__title">
                <h2 class="heading is-xlg is-xlg-left heading_title02" id="heading02">2. 近藤歯科クリニックの矯正治療の目標</h2>
              </div>
            </div>
            <div class="c-lower-about-top__image">
              <img class="u-image-radius" src="../wp-content/uploads/2021/01/iStock-1008724888.jpg" alt="近藤歯科クリニックの矯正治療の目標" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="c-lower-about-top">
      <p>
        <img class="c-lower-about-top__deco" src="../wp-content/uploads/2019/08/img-cloud-blue.png" alt="飾り" />
      </p>
      <div class="c-lower-about-top__inner">
        <div class="c-lower-about-top__conts l-container">
          <div class="c-lower-about-top__images">
            <div class="c-title-block">
              <div class="c-title-block__title">
                <h2 class="heading is-xlg is-xlg-left" id="heading03">3. 矯正治療への誤解</h2>
              </div>
            </div>
            <div class="c-lower-about-top__image">
              <img class="u-image-radius" src="../wp-content/uploads/2019/08/img-child-top-01.jpg" alt="矯正治療への誤解" />
            </div>
          </div>
          <div class="c-lower-about-top__points">
            <p class="gokai_lead">
              一般的に“矯正治療をすると、よく噛めるようになる”というように考えてしまいがちですが、これは誤りです。<br>以下理由を述べます。
            </p>
            <div class="c-lower-about-top__point">
              <div class="c-lower-about-top__number">
                <div class="c-lower-about-top__number-inner"><span>Reason</span><span>01</span></div>
              </div>
              <div class="c-lower-about-top__text"> きれいな歯並びでも、良いかみ合わせが作れるとは限らない。</div>
            </div>
            <div class="c-lower-about-top__point">
              <div class="c-lower-about-top__number">
                <div class="c-lower-about-top__number-inner"><span>Reason</span><span>02</span></div>
              </div>
              <div class="c-lower-about-top__text">仮に良いかみ合わせでも、顎の骨の形、咬む筋肉がしっかりとしていないと咬めない。</div>
            </div>
            <div class="c-lower-about-top__point">
              <div class="c-lower-about-top__number">
                <div class="c-lower-about-top__number-inner"><span>Reason</span><span>03</span></div>
              </div>
              <div class="c-lower-about-top__text">普段から良い咬み方をしていないとしっかりと咬めない。</div>
            </div>
            <div class="c-lower-about-top__point reason04">
              <div class="c-lower-about-top__number">
                <div class="c-lower-about-top__number-inner"><span>Reason</span><span>04</span></div>
              </div>
              <div class="c-lower-about-top__text">良い咬み方は正しい姿勢から生まれる。</div>
            </div>
            <div class="c-lower-about-top__point">
              <div class="c-lower-about-top__number">
                <div class="c-lower-about-top__number-inner"><span>Reason</span><span>05</span></div>
              </div>
              <div class="c-lower-about-top__text">正しい姿勢は鼻呼吸並びに良い生活習慣から生まれる。</div>
            </div>
            <div class="c-lower-about-top__point">
              <div class="c-lower-about-top__number">
                <div class="c-lower-about-top__number-inner"><span>Reason</span><span>06</span></div>
              </div>
              <div class="c-lower-about-top__text">従来の矯正治療は歯を並べることが第一になっている。</div>
            </div>
            <div class="c-lower-about-top__point">
              <div class="c-lower-about-top__number">
                <div class="c-lower-about-top__number-inner"><span>Reason</span><span>07</span></div>
              </div>
              <div class="c-lower-about-top__text">もともとの歯並びがその人に合った歯並びかみ合わせである。</div>
            </div>
            <p class="reason_notes">
              こう考えてみると、“歯並びを変える”ということは、単に歯並びだけでなく、その人の生活習慣、姿勢、食生活なども変えていく必要があると言えるでしょう。<br>
              近藤歯科クリニックの矯正治療では、無理なくそれらを日常生活の中に取り入れていくアドバイス、サポートを行っています。
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="c-lower-about-top">
      <img class="c-lower-about-top__deco is-right" src="../wp-content/uploads/2019/08/img-cloud-blue.png" alt="飾り" />
      <div class="c-lower-about-top__inner">
        <div class="c-lower-about-top__conts l-container">
          <div class="c-lower-about-top__images">
            <div class="c-title-block">
              <div class="c-title-block__title">
                <h2 class="heading is-xlg is-xlg-left" id="heading04">4. 矯正治療の後戻りは“咬めない”ことが原因</h2>
              </div>
            </div>
            <div class="c-lower-about-top__image">
              <img class="u-image-radius" src="../wp-content/uploads/2019/08/img-ortho-03.png" alt="近藤歯科クリニックの矯正治療の目標" />
            </div>
          </div>
          <div class="c-lower-about-top__text-block title04_text-block">
            上記のように歯並びだけを変えても、咬めるようにはなりません。<br>
            そして、“咬めない歯並び”は必ず後戻りをしていきます。<br>
            <strong>なぜならば、歯並びは咬むことによって維持されているからです。</strong><br>
            適度な咬む力は歯の根に伝わり、歯根膜、歯槽骨などの歯を支える組織に適度な刺激を与え、<br>
            歯をしっかりと支えられる骨を作っていくのです。<br>
            咬む刺激のない歯は、骨の支えが不十分ですぐに動いてしまうのです。
          </div>
        </div>
      </div>
    </div>

    <div class="l-container lazyloaded l-section is-lower">
      <div class="c-relation-lg__title lazyloaded">
        <h2 class="heading is-xlg" id="heading05">5. なぜ、歯を抜かない矯正治療ができるのか？</h2>
      </div>
      <div class="c-relation-lg__links lazyloaded link_01">
        <div class="c-relation-lg__block">
          <img src="<?php GUrl::the_asset() ?>/price/images/preice.jpg" alt="子供の場合">
          <p class="c-relation-lg__block-title"><strong>○ 子供の場合</strong></p>
          <p class="c-relation-lg__text">
            子供（この場合小学生以下を指します）は成長発育をします。<br>
            成長発育を、正しい方向にもっていけば、歯を抜かずにほぼきれいに並べることは可能です。<br>
            矯正器具の使用とともに、正しい、生活習慣、食生活、姿勢、呼吸、咬み方の練習により、誤った方向への成長発育を変えていくのです。<br>
            そして、従来遺伝的な傾向が強く、歯の移動だけでは困難であった骨格的な問題のあるケースでも、症例を小学校低学年から取り組めば、だいぶ良い方向に変えていくことができるのです。<br>
            上記のような骨格的な問題のあるケースでは、「成長発育が止まるまで様子を見ましょう。<br>
            成長が止まったら、顎の骨を切る外科手術をしましょう。」と矯正医から言われていました。<br>
            しかし、早期に呼吸など可能なところから取り組むことにより、外科手術は避けられるかもしれません。<br>
            歯科医師であれば、自分の子供に“顎の骨を切る外科手術”を受けさせたいと思う人はいないと思います。
          </p>
        </div>
        <div class="c-relation-lg__block">
          <img src="../wp-content/uploads/2019/08/img-adult-02.jpg" alt="成人の場合">
          <p class="c-relation-lg__block-title"><strong>○ 成人の場合</strong></p>
          <p class="c-relation-lg__text">
            成人は成長発育しないので、歯並びのアーチを広げたり、後方に歯を動かしたり、歯と歯の間を少し削ったりして無理のない範囲で並べていきます。<br>
            歯の重なりが軽度の場合、ほぼきれいになりますが、重なりが重度の場合は、歯に負担をかけない範囲で、患者さんと相談して終了ラインを決めていきます。
          </p>
        </div>
      </div>
    </div>

    <div class="c-aboutus-power">
      <div class="c-title-block">
        <div class="l-container">
          <div class="c-title-block__title">
            <h2 class="heading is-xlg" id="heading06">6. 近藤歯科クリニックの矯正治療</h2>
          </div>
        </div>
      </div>
      <div class="c-aboutus-power__top-image">
        <!-- <img src="../wp-content/uploads/2019/08/img-aboutus-power.jpg" alt="近藤歯科クリニックの矯正治療" /> -->
        <img src="../wp-content/uploads/2019/08/bg-ortho-top.jpg" alt="近藤歯科クリニックの矯正治療" />
      </div>
      <div class="c-aboutus-power__content">
        <img class="c-aboutus-power__deco is-left" src="../wp-content/uploads/2019/08/img-cloud-aboutus-left.png" alt="" />
        <img class="c-aboutus-power__deco is-right" src="../wp-content/uploads/2019/08/img-cloud-aboutus-right.png" alt="" />
        <div class="c-aboutus-power__text-block  u-box-shadow">
          <div class="c-aboutus-power__text">
            単に歯並びだけでなく、患者さんが“やってよかった！”と思っていただける矯正治療を目指しています。<br>
            よく聞くのは、「矯正したが歯を抜かれた」「矯正したが、歯が動いてしまった」という患者さんのお話です。<br>
            そう親御さん方が思われるから、当クリニックは自信をもって歯を抜かない矯正治療をお勧めするのです。
          </div>
          <div class="c-aboutus-power__text">
            お子さんの場合、良い歯並びの条件の一つとして“鼻呼吸”があげられるのですが、当クリニックでは、矯正治療前から、終了後まで、鼻呼吸の指導を続けています。<br>
            鼻呼吸はもちろん免疫力を高めるし、体にもいいですが、歯並びだけでなく、口元もしまり、唇も美しい形になります。<br>
            これは一つの例ですが、このようにして、矯正治療後も皆様方（とくにお子様方）は定期的に通ってもらい、虫歯チェック、クリーニングを兼ねて歯並び、口元チェック、親知らずの状態のチェックなど継続しております。
          </div>
        </div>
        <!-- </div> -->
      </div>
    </div>
