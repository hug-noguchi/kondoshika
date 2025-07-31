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
  .heading.heading_top {
    margin-top: 2.4rem !important;
    margin-bottom: 1rem;
  }
  .ortho_faq_q {
    display: block;
    font-size: 20px;
    color: #333;
    position: relative;
    letter-spacing: 0.5px;
    margin-top: 1.7rem;
    margin-bottom: 1rem;
  }
  .heading04_text {
    max-width: 1140px;
    margin-left: auto;
    margin-right: auto;
    padding: 0 40px;
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
    .heading_box {
      display: flex;
      flex-direction: column-reverse;
    }
    .heading.heading_top {
      margin-top: 1.7rem !important;
    }
    h4 {
      font-size: 1.1rem;
    }
    .heading04_text {
      padding-right: 16px;
      padding-left: 16px;
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
            <li><a href="#heading04">４． 歯を抜かない矯正治療への誤解</a></li>
            <li><a href="#heading05">５． 矯正治療の後戻りは“咬めない”ことが原因</a></li>
            <li><a href="#heading06">６． なぜ、歯を抜かない矯正治療ができるのか？</a></li>
            <li><a href="#heading07">７． 歯を抜かないための方法（1）</a></li>
            <li><a href="#heading08">８． 歯を抜かないための方法（2）</a></li>
            <li><a href="#heading09">９． 歯を抜かないための方法（3）</a></li>
            <li><a href="#heading10">１０． 近藤歯科クリニックの矯正治療</a></li>
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
        <div class="c-lower-about-top__conts l-container heading_box">
          <div class="c-lower-about-top__text-block">
            <h3 class="heading is-lg">【誤解①】歯を抜かない矯正はゴリラ顔になる？</h3>
            <h4>「前に出るからゴリラ顔に…？」は誤解です</h4>
            <p>
              歯を抜かない矯正についてよくある誤解のひとつが「ゴリラのような顔つきになる」というものです。<br>
              これは、歯列のスペースが十分にないにもかかわらず、抜歯を避けて無理に歯を並べた結果、前歯が過剰に前方に突出してしまったケースを見聞きしたことに由来していると考えられます。<br>
              つまり、「歯が前に出る＝口元が出っ張る＝ゴリラ顔になる」という図式が誤解として独り歩きしてしまったのです。
            </p>
          </div>
          <div class="c-lower-about-top__images">
            <div class="c-title-block">
              <div class="c-title-block__title">
                <h2 class="heading is-xlg is-xlg-left" id="heading04">4. 歯を抜かない矯正治療への誤解</h2>
              </div>
            </div>
            <div class="c-lower-about-top__image">
              <img class="u-image-radius" src="../wp-content/uploads/2020/09/img-mouthpiece-03.jpg" alt="歯を抜かない矯正治療への誤解" />
            </div>
          </div>
        </div>
        <div class="heading04_text">
          <h4>問題は「抜く・抜かない」ではなく、スペース確保の方法</h4>
          <p>
            歯並びを整えるためには、必ず“歯が並ぶためのスペース”が必要です。<br>
            このスペースをどのように確保するかは、患者さん一人ひとりの顎の大きさ、歯のサイズ、咬み合わせの状態などを総合的に診断して決めていきます。
          </p>
          <p>具体的には、以下のような方法でスペースを確保します。</p>
          <ul>
            <li>・歯列のアーチを拡大（横や前方へ広げる）</li>
            <li>・歯の傾斜をコントロールして立て直す</li>
            <li>・歯と歯の間をわずかに削る（IPR）</li>
            <li>・奥歯を奥へ移動させる</li>
            <li>・必要に応じて抜歯も検討</li>
          </ul>
          <p>
            無理な非抜歯矯正は、見た目や機能面において理想的な仕上がりが得られないリスクがあります。<br>
            そのため、当院では非抜歯を前提に治療を押し進めるのではなく、歯列・骨格の分析結果に基づいた判断を大切にしています。
          </p>
          <h4>「非抜歯にこだわる」治療が問題になることも</h4>
          <p>実際に、他院で「100%非抜歯矯正」と断言された治療を受け、治療後の口元の突出感や咬み合わせに違和感を抱えて当院へご相談に来られる患者さんも少なくありません。</p>
          <p>
            矯正治療は、矯正専門医以外の歯科医師でも行うことが可能ですが、その分、矯正に関する知識や経験には大きな個人差があるのが現実です。<br>
            「抜かない歯医者」を掲げていても、それが必ずしも医学的に最善の選択であるとは限りません。<br>
            治療の成功には、診断力と設計力、そして患者さんとの丁寧なコミュニケーションが欠かせません。
          </p>
          <h3 class="heading is-lg heading_top">【誤解②】歯を抜かない矯正は後戻りが起こりやすい？</h3>
          <h4>後戻りの原因は「非抜歯かどうか」ではない</h4>
          <p>
            「歯を抜かないと後戻りしやすい」と言われることがありますが、これは医学的には正確ではありません。<br>
            矯正治療によって移動した歯は、歯根を支える歯槽骨のリモデリング（再構築）を伴って移動します。<br>
            そのため、歯が新しい位置に安定するまでの間は、元の位置に戻ろうとする傾向があるのです。<br>
            これは抜歯矯正・非抜歯矯正のいずれにも起こりうる現象で、治療法の違いによるものではありません。
          </p>
          <h4>後戻りを防ぐには、保定（リテーナー）が重要</h4>
          <p>
            後戻りの防止には、治療後に装着する「リテーナー（保定装置）」の使用が極めて重要です。<br>
            リテーナーの使用状況や、使用期間が適切であるかどうかが、後戻りのリスクを大きく左右します。<br>
            また、次のような要因も後戻りに関与します。
          </p>
          <ul>
            <li>・舌の癖（舌突出癖など）</li>
            <li>・頬や唇の筋肉の誤った使い方</li>
            <li>・頬杖やうつぶせ寝などの生活習慣</li>
            <li>・咬み合わせのバランスや顎の成長状態（特にお子さんの場合）</li>
          </ul>
          <p>つまり、「後戻りしやすいかどうか」は非抜歯かどうかではなく、治療後の管理や生活習慣に依存する部分が大きいのです。</p>
          <h4>矯正治療後のサポートも大切にしています</h4>
          <p>
            当院では、治療後の定期的なチェックを継続しながら、リテーナーの装着状況やお口の中の変化を確認しています。<br>
            抜くか抜かないかではなく、「どうやって後戻りを最小限にするか」にこだわったサポート体制を整えています。
          </p>
          <h3 class="heading is-lg heading_top">【誤解③】歯を抜かない矯正は治療期間が長くなる？</h3>
          <h4>治療期間は症例によって異なります</h4>
          <p>
            「歯を抜かないと治療が長引く」と思われる方も多いですが、実際には非抜歯矯正の方が早く歯が整うケースも多くあります。<br>
            歯を抜いた場合は、そのスペースが大きく、他の歯を動かしてその隙間を埋めるのに時間がかかることがあります。<br>
            特に、必要性のない抜歯をしてしまった場合、スペースが持て余され、最終的に前歯の隙間（ブラックトライアングル）やすきっ歯のような状態が残るリスクもあります。
          </p>
          <h4>診断・治療計画の質が治療期間を左右する</h4>
          <p>
            当院では、矯正治療の初期段階で時間をかけて診断・シミュレーションを行い、患者さんと治療方針をしっかり共有します。<br>
            このプロセスが結果として治療期間の短縮にもつながると考えています。<br>
            「どの歯をどの順序でどれだけ動かすか」「スペース確保はどの方法で行うか」などの設計力が、無駄のないスムーズな矯正治療の鍵となります。
          </p>
          <h4>非抜歯矯正＝時間がかかるとは限らない</h4>
          <p>
            確かに、非抜歯でスペースを作るには、歯列の拡大や歯の傾きの調整など、多少の時間を要することがあります。<br>
            しかし、歯の移動距離や咬み合わせのズレが大きい抜歯矯正のほうが長くかかることもあるため、一概には言えません。<br>
            大切なのは、患者さん一人ひとりの口腔状態に合わせた最適な治療計画を立てること。<br>
            非抜歯矯正であっても、適切な設計とサポートによって、治療期間をできる限り効率的に進めることが可能です。
          </p>
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
                <h2 class="heading is-xlg is-xlg-left" id="heading05">5. 矯正治療の後戻りは“咬めない”ことが原因</h2>
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
        <h2 class="heading is-xlg" id="heading06">6. なぜ、歯を抜かない矯正治療ができるのか？</h2>
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

    <div class="c-lower-about-top">
      <img class="c-lower-about-top__deco is-right" src="../wp-content/uploads/2019/08/img-cloud-blue.png" alt="飾り" />
      <div class="c-lower-about-top__inner">
        <div class="c-lower-about-top__conts l-container heading_box">
          <div class="c-lower-about-top__text-block">
            <h3 class="heading is-lg">歯列を拡大してスペースを作り出す</h3>
            <p>
              歯を抜かずに矯正治療を行うための選択肢のひとつとして、歯列を横方向や前方向に拡大する方法があります。<br>
              とくに、奥歯が内側に傾いている場合には、それらをまっすぐに起こして正しい位置に整えることで、歯列全体にわずかながらスペースを生み出すことが可能です。
              <br><br>
              また、前方への拡大によってもスペースを確保できますが、骨格的な余裕のないまま無理に広げてしまうと、歯が歯槽骨（歯を支える骨）からはみ出してしまう「骨外移動」の状態になります。<br>
              これにより、歯茎（歯肉）の退縮や歯の動揺・将来的な歯の喪失といったリスクを高めるおそれがあるため、歯の動きの範囲や方向には細心の注意が必要です。
              <br><br>
              そのため、骨の形態や厚み、歯列のアーチの広がり具合を精密に評価したうえで、無理のない範囲で拡大が可能かどうかを診断することが大切です。<br>
              診断にはレントゲンや3D画像解析などの検査を通じて、患者さん一人ひとりに合った治療方針を決めていきます。
            </p>
          </div>
          <div class="c-lower-about-top__images">
            <div class="c-title-block">
              <div class="c-title-block__title">
                <h2 class="heading is-xlg is-xlg-left heading_title02" id="heading07">7. 歯を抜かないための方法（1）</h2>
              </div>
            </div>
            <div class="c-lower-about-top__image">
              <img class="u-image-radius" src="../wp-content/uploads/2019/08/img-mouthpiece-02.jpg" alt="歯を抜かないための方法（1）" />
            </div>
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
                <h2 class="heading is-xlg is-xlg-left" id="heading08">8. 歯を抜かないための方法（2）</h2>
              </div>
            </div>
            <div class="c-lower-about-top__image">
              <img class="u-image-radius" src="../wp-content/uploads/2019/08/img-mouthpiece-02.jpg" alt="歯を抜かないための方法（2）" />
            </div>
          </div>
          <div class="c-lower-about-top__text-block">
            <h3 class="heading is-lg">歯の側面を削ってスペースを作り出す</h3>
            <p>
              歯の表面を覆う「エナメル質」は、人体の中でもっとも硬い組織であり、厚みはおおよそ1～2mmあります。<br>
              このエナメル質のうち、0.3～0.6mm程度を歯の側面からわずかに削る方法を「ディスキング（ストリッピング）」といいます。<br>
              これにより、歯と歯の間に微細なすき間を作り、歯を並べるためのスペースを確保します。<br>
              この方法は、もともと歯列が比較的密集していて歯と歯が重なっているような方に効果的です。
            </p>
            <div>
              <p class="ortho_faq_q"><strong>Q. 健康な歯を削っても大丈夫？</strong></p>
              <p>
                A. 健康な歯を削ることに抵抗を感じるのは自然なことです。<br>
                たしかに、可能な限り歯を削らずに治療できるのが理想ですが、ディスキングは必要最小限の範囲で行うため、虫歯や歯の割れといった重大なリスクはほとんどありません。
                <br><br>
                むしろ、歯を抜かずに咬み合わせや歯並びを整えることができるという大きなメリットがあります。<br>
                また、歯と歯のすき間がわずかにできることで清掃性が向上し、歯垢がたまりにくくなるという副次的な利点もあります。<br>
                治療の目的と安全性をきちんと理解したうえで、納得していただける治療法を選択することが大切です。
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

      <div class="c-lower-about-top">
      <img class="c-lower-about-top__deco is-right" src="../wp-content/uploads/2019/08/img-cloud-blue.png" alt="飾り" />
      <div class="c-lower-about-top__inner">
        <div class="c-lower-about-top__conts l-container heading_box">
          <div class="c-lower-about-top__text-block">
            <h3 class="heading is-lg">奥歯を後ろに下げて手前側にスペースを作る</h3>
            <p>
              顎の骨の余地が充分にある方は、奥歯の位置をさらに後ろに移動する手法があります。<br>
              専門的には「遠心移動」と呼ばれるテクニックです。<br>
              とくに顎の骨に十分なスペースがあり、親知らずがすでに抜かれているケースでは、奥歯を後ろに移動させることで前方の歯に必要なスペースを確保しやすいです。<br>
              この動きを効率的に行うためには、「アンカーインプラント」と呼ばれる特殊な固定装置が有効です。
            </p>
            <div>
              <p class="ortho_faq_q"><strong>Q. アンカーインプラントとは？</strong></p>
              <p>
                A. アンカーインプラントとは、直径1〜2mm程度の小さなチタン製のネジのような器具を、顎の骨に一時的に埋め込む装置です。<br>
                これにより、歯の移動に必要な強固な支点が得られ、奥歯をしっかりと後方に引っぱることができます。<br>
                「ネジを骨に打ち込む」と聞くと、強い痛みを想像される患者さんもいらっしゃいますが、実際の処置は局所麻酔を用いて行うため、痛みを感じることはほとんどありません。<br>
                埋入後も、インプラントが触れているのは骨の部分であり、神経が存在しないため、強い痛みや違和感は起こりにくいのが特徴です。<br>
                アンカーインプラントを装着後しばらくは多少の異物感がありますが、1週間程度で慣れる方がほとんどです。<br>
                アンカーインプラントは矯正期間中のみ使用され、治療終了後は簡単に取り外すことが可能です。
              </p>
            </div>
          </div>
          <div class="c-lower-about-top__images">
            <div class="c-title-block">
              <div class="c-title-block__title">
                <h2 class="heading is-xlg is-xlg-left" id="heading09">9. 歯を抜かないための方法（3）</h2>
              </div>
            </div>
            <div class="c-lower-about-top__image">
              <img class="u-image-radius" src="../wp-content/uploads/2019/08/img-child-01.jpg" alt="歯を抜かないための方法（3）" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="c-aboutus-power">
      <div class="c-title-block">
        <div class="l-container">
          <div class="c-title-block__title">
            <h2 class="heading is-xlg" id="heading10">10. 近藤歯科クリニックの矯正治療</h2>
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
