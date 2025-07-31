<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,viewport-fit=cover">
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="preload" href="<?php echo home_url('/'); ?>styles.css" as="style">
<link rel="preload" href="<?php echo home_url('/'); ?>js/jquery.film_roll.js" as="script">
<link rel="preload" href=“<?php echo home_url('/'); ?>images/main01<?php if(is_mobile()): ?>_sp<?php endif; ?>.png” as="image">
<link rel="preload" href=“<?php echo home_url('/'); ?>images/main02<?php if(is_mobile()): ?>_sp<?php endif; ?>.png” as="image">
<link rel="preload" href=“<?php echo home_url('/'); ?>images/main03<?php if(is_mobile()): ?>_sp<?php endif; ?>.png” as="image">
<meta name="thumbnail" content="https://tachikawa-kyousei-kondoshika.net/manage/wp-content/uploads/2021/07/tachikawa-ogp.jpg" />
<title><?php seo_title(); ?></title>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="icon" href="/favicon.ico">
	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5LJ4K9X');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager 2022/08/14 -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-THJFQ3C');</script>
<!-- End Google Tag Manager -->
	
	<?php wp_head(); ?>

		<link rel="stylesheet" href="<?php echo home_url('/'); ?>styles.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo home_url('/'); ?>reset.css" type="text/css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- [if lt IE 9] -->
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<!-- [endif] -->

		<?php if ( is_page('gallery') ) : ?>
		<link rel="stylesheet" href="<?php echo home_url('/'); ?>css/lightbox.min.css" type="text/css" />
		<?php endif; ?>
		<script>
			(function(d) {
			var config = {
			kitId: 'pfq2uzw',
			scriptTimeout: 3000,
			async: true
			},
			h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
			})(document);
		</script>
			<script type="text/javascript" src="<?php echo home_url('/'); ?>js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="<?php echo home_url('/'); ?>js/jquery.easing.1.3.js"></script>
			<link rel="stylesheet" type="text/css" href="<?php echo home_url('/'); ?>slick-theme.css">
			<link rel="stylesheet" type="text/css" href="<?php echo home_url('/'); ?>slick.css">
			<script type="text/javascript" src="<?php echo home_url('/'); ?>js/slick.min.js"></script>
			<link rel="stylesheet" href="<?php echo home_url('/'); ?>lity.css" />
			<script src="<?php echo home_url('/'); ?>js/lity.min.js"></script>
			<style>
			.film_roll_wrapper {
			overflow: hidden;
			}
			.film_roll_shuttle {
			position: relative;
			}
			.film_roll_shuttle img{
			width: 100%;
			height: auto;
			}
			.film_roll_child {
			display: inline-block;
			margin-right: 10px;
			z-index: 1;
			position: relative;
			
			}
			.btn_prev,
			.btn_next {
			position: absolute;
			top: 30%;
			width: 48px;
			height: 48px;
			}
			.btn_prev {
			left: 15px;
			}
			.btn_next {
			right: 15px;
			}
			.btn_prev:hover,
			.btn_next:hover {
			opacity: 0.7;
			}
			.film_roll_pager {
			text-align: center;
			}
			.film_roll_pager a {
			display: inline-block;
			width: 20px;
			height: 20px;
			margin: 0 25px 0 0;
			text-indent: -9999px;
			overflow: hidden;
			}
			.film_roll_pager a:nth-child(1) {
			background: url(images/si01.png) no-repeat;
			}
			.film_roll_pager a:nth-child(2) {
			background: url(images/si02.png) no-repeat;
			}
			.film_roll_pager a:nth-child(3) {
			background: url(images/si03.png) no-repeat;
			}
			.film_roll_pager a:nth-child(4) {
			background: url(images/S/img04.jpg) no-repeat;
			}
			.film_roll_pager a:nth-child(5) {
			background: url(images/S/img05.jpg) no-repeat;
			}
			.film_roll_pager a.active:nth-child(1),
			.film_roll_pager a.active:nth-child(2),
			.film_roll_pager a.active:nth-child(3),
			.film_roll_pager a.active:nth-child(4),
			.film_roll_pager a.active:nth-child(5) {
			opacity: 0.6;
			}
			.film_roll_pager span {
			}
			#film_roll_arrow {
			}
			
			.flarge{
			font-size: 28px;
			}
			
			.mvbox{
			position: relative;
			z-index: 1;
			}
			
			.mv01{
			z-index: 1;
			}
			.mv02{
			z-index: 5;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			}
			.slick-slide{
			position: relative;
			z-index: 5;
			}
			.mv{
			z-index: 5;
			}
			
			.mvt01{
			z-index: 30;
			position: absolute;
			top: 0px;
			right: 100px;
			height: 300px;
			font-size: 18px;
			-webkit-writing-mode: vertical-rl;
			-ms-writing-mode: tb-rl;
			writing-mode: vertical-rl;
			letter-spacing: 5px;
			}
			
			.mvt02{
			z-index: 30;
			position: absolute;
			top: 30px;
			right: 160px;
			font-size: 18px;
			height: 370px;
			-webkit-writing-mode: vertical-rl;
			-ms-writing-mode: tb-rl;
			writing-mode: vertical-rl;
			letter-spacing: 5px;
			}
			
			.mvt03{
			z-index: 30;
			position: absolute;
			top: 300px;
			left: 60px;
			font-size: 18px;
			letter-spacing: 5px;
			padding: 5px 10px;
			background: #fbffb8;
			margin-bottom: 15px;
			}
			
			.mvt04{
			z-index: 30;
			position: absolute;
			top: 350px;
			left: 100px;
			font-size: 18px;
			letter-spacing: 5px;
			padding: 5px 10px;
			background: #fbffb8;
			}

			@media only screen and (max-width: 1024px){
			.flarge{
			font-size: 18px;
			}

			.mvt01{
			z-index: 30;
			position: absolute;
			top: 85%;
			left: 20px;
			font-size: 14px;
			letter-spacing: 5px;
			padding: 3px 7px;
			width: 80％;
			height: auto;
			background: #fbffb8;
			-webkit-writing-mode: horizontal-tb;
			-ms-writing-mode: horizontal-tb;
			writing-mode: horizontal-tb;
			text-align: center;
			}
			
			.mvt02{
			z-index: 30;
			position: absolute;
			top: 100%;
			left: 60px;
			width: 80%;
			height: auto;
			font-size: 14px;
			letter-spacing: 5px;
			padding: 3px 7px;
			background: #fbffb8;
			-webkit-writing-mode: horizontal-tb;
			-ms-writing-mode: horizontal-tb;
			writing-mode: horizontal-tb;
			text-align: center;
			}
			
			
			
			.mvt03{
			z-index: 30;
			position: absolute;
			top: 85%;
			left: 20px;
			font-size: 14px;
			letter-spacing: 5px;
			padding: 3px 7px;
			width: 80%;
			height: auto;
			background: #fbffb8;
			-webkit-writing-mode: horizontal-tb;
			-ms-writing-mode: horizontal-tb;
			writing-mode: horizontal-tb;
			text-align: center;
			}
			
			.mvt04{
			z-index: 30;
			position: absolute;
			top: 100%;
			left: 60px;
			width: 80%;
			height: auto;
			font-size: 14px;
			letter-spacing: 5px;
			padding: 3px 7px;
			background: #fbffb8;
			-webkit-writing-mode: horizontal-tb;
			-ms-writing-mode: horizontal-tb;
			writing-mode: horizontal-tb;
			text-align: center;
			}
			
			.film_roll_pager {
			margin-top: 20px;
			}
			
			.film_roll_wrapper{
			width: 100%;
			height: 170px;
			}
			.film_roll_wrapper img{
			width: 100%;
			height: auto;
			}
			}
			@media only screen and (max-width: 768px){
			.mvt02{
			top: 120%;
			}
			.mvt04{
			top: 120%;
			}
			}
			</style>
			<script>
			$(function(){
			$(window).scroll(function (){
			$('.fadein').each(function(){
			var elemPos = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll > elemPos - windowHeight + 200){
			$(this).addClass('scrollin');
			}
			});
			});
			});
			</script>

</head>
<body>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TFW8KPS');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFW8KPS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Google Tag Manager (noscript) 2022/08/14-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THJFQ3C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
		<!----- header----->
		<header>
			<div class="head clearfix">
				<div class="logo">
					
					<?php if ( is_front_page() || is_home() ) : ?>
					<h1>立川の矯正歯科</h1>
					<?php else: ?>
					<h1><?php the_title(); ?>：立川の矯正歯科</h1>
					<?php endif; ?>
					<p><a href="<?php echo home_url('/'); ?>"><img src="<?php echo home_url('/'); ?>images/logo.png" alt="近藤歯科クリニック"></a></p>
				</div>
				<div class="tel">
					<p class="tel01"><img src="<?php echo home_url('/'); ?>images/tel.png" alt="phone"></p>
					<p class="tel02">ご予約・お問い合わせはこちら！</p>
					<p class="tel03"><a href="tel: 0425240722">042-524-0722</a></p>
				</div>
				<div class="h_contact">
					<div class="img_wrap">
			<p><a href="<?php echo home_url('/'); ?>contact/"><img src="<?php echo home_url('/'); ?>images/hcon01.png" alt="お問い合わせ"></a></p>
			</div>
					<div class="img_wrap">
			<p><a href="https://appt.doctorsfile.jp/Patient/?hid=38731" target="_blank"><img src="<?php echo home_url('/'); ?>images/hcon02.png" alt="ご予約"></a></p>
		</div>
				</div>
			</div>
		</header>

		<?php if (  is_front_page() ||  is_home() ) : ?>
		<article>
			<section class="main_visual">
			<script>
			$(document).ready(function() {
					$('.slider2').slick({
							centerMode: true,
							centerPadding: '5%',
							dots: true,
							autoplay: true,
							autoplaySpeed: 1500,
							speed: 1500,
							pauseOnFocus: false,
							focusOnSelect: true,
							infinite: true,
							touchMove: true,
							responsive: [
							{
								breakpoint: 750,
								settings: {
									autoplaySpeed: 2000,
									speed: 2000,
									centerPadding: '2%',
								},
							},
							],
					});
			});
		</script>
		<div class="sliderArea2">
			<div class="sliderWide2">
				<ul class="slider2">
					
					<div>
						<p class="mv"><a href="#"><img src="<?php echo home_url('/'); ?>images/main01<?php if(is_mobile()): ?>_sp<?php endif; ?>.png" alt="立川の歯を抜かない矯正歯科" /></a></p>
					<p class="mvt01">患者さんの<span class="flarge">心</span>に寄り添う</p>
						<p class="mvt02">立川の<span class="flarge">歯を抜かない</span>矯正歯科</p>
					</div>
					<div>
						<p class="mv"><a href="#"><img src="<?php echo home_url('/'); ?>images/main02<?php if(is_mobile()): ?>_sp<?php endif; ?>.png" alt="年齢に合わせた子どもの歯科矯正" /></a></p>
						<p class="mvt03">お子さまの<span class="flarge">年齢に合った</span></p>
						<p class="mvt04"><span class="flarge">オーダーメイド</span>の歯科矯正</p>
					</div>
					<div>
						<p class="mv"><a href="#"><img src="<?php echo home_url('/'); ?>images/main03<?php if(is_mobile()): ?>_sp<?php endif; ?>.png" alt="妊婦健診時歯並び（お口の機能）に関するアドバイス" /></a></p>
						<p class="mvt03">お子さまの<span class="flarge">歯のケア</span>は</p>
						<p class="mvt04">お母さんが<span class="flarge">妊娠したとき</span>から</p>
					</div>

					<div>
						<p class="mv"><a href="#"><img src="<?php echo home_url('/'); ?>images/main01<?php if(is_mobile()): ?>_sp<?php endif; ?>.png" alt="立川の抜かない矯正歯科" /></a></p>
						<p class="mvt01">患者さんの<span class="flarge">心</span>に寄り添う</p>
						<p class="mvt02">立川の<span class="flarge">歯を抜かない</span>矯正歯科</p>
					</div>
					<div>
						<p class="mv"><a href="#"><img src="<?php echo home_url('/'); ?>images/main02<?php if(is_mobile()): ?>_sp<?php endif; ?>.png" alt="年齢に合わせた子どもの歯科矯正" /></a></p>
						<p class="mvt03">お子さまの<span class="flarge">年齢に合った</span></p>
						<p class="mvt04"><span class="flarge">オーダーメイド</span>の歯科矯正</p>
					</div>
					<div>
						<p class="mv"><a href="#"><img src="<?php echo home_url('/'); ?>images/main03<?php if(is_mobile()): ?>_sp<?php endif; ?>.png" alt="妊婦健診時歯並び（お口の機能）に関するアドバイス" /></a></p>
						<p class="mvt03">お子さまの<span class="flarge">歯のケア</span>は</p>
						<p class="mvt04">お母さんが<span class="flarge">妊娠したとき</span>から</p>
					</div>
				</ul>
			</div>
		</div>

			</section>
		</article>
		<?php endif; ?>
			<div class="navToggle">
			<span></span><span></span><span></span><span>menu</span>
			</div>
			<nav class="globalMenuSp">
			<div class="menu">
			<p><a href="<?php echo home_url('/'); ?>">立川の矯正歯科 HOME</a></p>
			<label for="menu_bar01">矯正治療について</label>
			<input type="checkbox" id="menu_bar01" />
			<ul id="links01">
			<li><a href="<?php echo home_url('/'); ?>about-orthodontics/">矯正歯科とは？</a></li>
			<li><a href="<?php echo home_url('/'); ?>orthodontic-consultation/">矯正相談</a></li>
			<li><a href="<?php echo home_url('/'); ?>clinic-of-choice/">なぜ、当院の矯正治療が選ばれるのか？</a></li>
			<li><a href="<?php echo home_url('/'); ?>orthodontic-plate/">床矯正について</a></li>
			<li><a href="<?php echo home_url('/'); ?>orthodontic-for-adults/">大人の矯正治療</a></li>
			<li><a href="<?php echo home_url('/'); ?>partial-orthodontics/">部分矯正とは？</a></li>
			<li><a href="<?php echo home_url('/'); ?>mft/">MFT(筋機能療法)について</a></li>
			</ul>
			<label for="menu_bar02">子どもの矯正｜小児矯正</label>
			<input type="checkbox" id="menu_bar02" />
			<ul id="links02">
			<li><a href="<?php echo home_url('/'); ?>orthodontic-for-children/">子どもの矯正治療</a></li>
			<li><a href="<?php echo home_url('/'); ?>when-to-start/">子どもの矯正治療の開始時期</a></li>
			<li><a href="<?php echo home_url('/'); ?>invisalign/">インビザラインについて</a></li>
			<li><a href="<?php echo home_url('/'); ?>message/">お子さまと親御さんへのメッセージ</a></li>
			<li><a href="<?php echo home_url('/'); ?>how-to-get-goodcare/">お子さまの矯正治療を上手に受けるには？</a></li>
			<li><a href="<?php echo home_url('/'); ?>no-tooth-extraction/">歯を抜かない矯正治療とは？</a></li>
			<li><a href="<?php echo home_url('/'); ?>cute-face/">かわいいお顔、良いお顔になるには？</a></li>
			<li><a href="<?php echo home_url('/'); ?>3point/">美しい歯並びを保つための3つの条件</a></li>
			<li><a href="<?php echo home_url('/'); ?>about-chewing/">かむことについて</a></li>
				<li><a href="<?php echo home_url('/'); ?>healthy-teeth/">ママとお子様の健口(健康)教室（歯並びの良いお子様の育て方）</a></li>
			<li><a href="<?php echo home_url('/'); ?>malocclusion/">不正咬合について</a></li>
			<li><a href="<?php echo home_url('/'); ?>mandibular-overlap/">受け口（反対咬合）について</a></li>
			<li><a href="<?php echo home_url('/'); ?>overbite/">出っ歯について</a></li>
			<li><a href="<?php echo home_url('/'); ?>motivation/">小児矯正に必要なのはお子さまの「やる気」</a></li>
			<li><a href="<?php echo home_url('/'); ?>dentition/">素人目にはわかりにくい歯並び・かみ合わせ</a></li>
			<li><a href="<?php echo home_url('/'); ?>pregnant-woman-dental-examination/">妊婦歯科健診から小児矯正まで</a></li>
			<li><a href="<?php echo home_url('/'); ?>students-dentition/">立川の小学生の歯並び</a></li>
		</ul>
		<p><a href="<?php echo home_url('/'); ?>price/">矯正費用について</a></p>
			<label for="menu_bar03">治療方針｜矯正歯科</label>
			<input type="checkbox" id="menu_bar03" />
			<ul id="links03">
			<li><a href="<?php echo home_url('/'); ?>about-us/">近藤歯科クリニックについて</a></li>
			<li><a href="<?php echo home_url('/'); ?>about-staff/">スタッフについて</a></li>
			<li><a href="<?php echo home_url('/'); ?>treatment-policy/">近藤歯科クリニック治療方針</a></li>
			<li><a href="<?php echo home_url('/'); ?>treatment-flow-duration/">矯正治療の流れ・治療期間</a></li>
			<li><a href="<?php echo home_url('/'); ?>oral-function/">口腔機能を重視した矯正治療</a></li>
			<li><a href="<?php echo home_url('/'); ?>registered-dietitian/">近藤歯科クリニックの管理栄養士</a></li>
			<li><a href="<?php echo home_url('/'); ?>access/">アクセス・診療時間</a></li>
			<li><a href="<?php echo home_url('/'); ?>gallery/">フォトギャラリー</a></li>
			</ul>
			<p><a href="<?php echo home_url('/'); ?>faq/">よくある質問</a></p>
			</div>
			</nav>
			
			<script>
			$(function() {
					$('.navToggle').click(function() {
							$(this).toggleClass('active');
							
							if ($(this).hasClass('active')) {
								$('.globalMenuSp').addClass('active');
							} else {
								$('.globalMenuSp').removeClass('active');
							}
					});
			});
		</script>
<nav class="global_menu">
			<ul>
				
				<li class="menu">
				<a href="<?php echo home_url('/'); ?>"><img src="<?php echo home_url('/'); ?>images/navi01.png" alt="立川の矯正歯科"></a>
				</li>
				
				<li class="menu">
				<a href="<?php echo home_url('/'); ?>about-orthodontics/"><img src="<?php echo home_url('/'); ?>images/navi02.png" alt="矯正治療について"></a>
				<ul class="child_menu">
					<li><a href="<?php echo home_url('/'); ?>about-orthodontics/">矯正歯科とは？</a></li>
					<li><a href="<?php echo home_url('/'); ?>orthodontic-consultation/">矯正相談</a></li>
					<li><a href="<?php echo home_url('/'); ?>clinic-of-choice/">なぜ、当院の矯正治療が選ばれるのか？</a></li>
					<li><a href="<?php echo home_url('/'); ?>orthodontic-plate/">床矯正について</a></li>
					<li><a href="<?php echo home_url('/'); ?>orthodontic-for-adults/">大人の矯正治療</a></li>
					<li><a href="<?php echo home_url('/'); ?>partial-orthodontics/">部分矯正とは？</a></li>
					<li><a href="<?php echo home_url('/'); ?>mft/">MFT(筋機能療法)について</a></li>
				</ul>
				</li>
				
				<li class="menu">
				<a href="<?php echo home_url('/'); ?>orthodontic-for-children/"><img src="<?php echo home_url('/'); ?>images/navi03.png" alt="子どもの矯正｜小児矯正"></a>
				<ul class="child_menu">
					<li><a href="<?php echo home_url('/'); ?>orthodontic-for-children/">子どもの矯正治療</a></li>
					<li><a href="<?php echo home_url('/'); ?>when-to-start/">子どもの矯正治療の開始時期</a></li>
					<li><a href="<?php echo home_url('/'); ?>invisalign/">インビザラインについて</a></li>
					<li><a href="<?php echo home_url('/'); ?>message/">お子さまと親御さんへメッセージ</a></li>
					<li><a href="<?php echo home_url('/'); ?>how-to-get-goodcare/">お子さまの矯正治療を上手に受けるには？</a></li>
					<li><a href="<?php echo home_url('/'); ?>no-tooth-extraction/">歯を抜かない矯正治療とは？</a></li>
					<li><a href="<?php echo home_url('/'); ?>cute-face/">かわいいお顔、良いお顔になるには？</a></li>
					<li><a href="<?php echo home_url('/'); ?>3point/">美しい歯並びを保つための3つの条件</a></li>
					<li><a href="<?php echo home_url('/'); ?>about-chewing/">かむことについて</a></li>
				<li><a href="<?php echo home_url('/'); ?>healthy-teeth/">ママとお子様の健口(健康)教室（歯並びの良いお子様の育て方）</a></li>
					<li><a href="<?php echo home_url('/'); ?>mandibular-overlap/">受け口（反対咬合）について</a></li>
					<li><a href="<?php echo home_url('/'); ?>malocclusion/">不正咬合について</a></li>
					<li><a href="<?php echo home_url('/'); ?>overbite/">出っ歯について</a></li>
					<li><a href="<?php echo home_url('/'); ?>motivation/">小児矯正に必要なのはお子さまの「やる気」</a></li>
					<li><a href="<?php echo home_url('/'); ?>dentition/">素人目にはわかりにくい歯並び・かみ合わせ</a></li>
			<li><a href="<?php echo home_url('/'); ?>pregnant-woman-dental-examination/">妊婦歯科健診から小児矯正まで</a></li>
			<li><a href="<?php echo home_url('/'); ?>students-dentition/">立川の小学生の歯並び</a></li>
				</ul>
				</li>
				
		
		<li class="menu">
				<a href="<?php echo home_url('/'); ?>price/"><img src="<?php echo home_url('/'); ?>images/navi04.png" alt="費用について"></a>
		</li>
				
				<li class="menu">
		<a href="<?php echo home_url('/'); ?>treatment-flow-duration/"><img src="<?php echo home_url('/'); ?>images/navi05.png" alt="治療方針｜矯正歯科"></a>
				<ul class="child_menu">
					<li><a href="<?php echo home_url('/'); ?>about-us/">近藤歯科クリニックについて</a></li>
					<li><a href="<?php echo home_url('/'); ?>about-staff/">スタッフについて</a></li>
					<li><a href="<?php echo home_url('/'); ?>treatment-policy/">近藤歯科クリニック治療方針</a></li>
					<li><a href="<?php echo home_url('/'); ?>treatment-flow-duration/">矯正治療の流れ・治療期間</a></li>
					<li><a href="<?php echo home_url('/'); ?>oral-function/">口腔機能を重視した矯正治療</a></li>
					<li><a href="<?php echo home_url('/'); ?>registered-dietitian/">近藤歯科クリニックの管理栄養士</a></li>
					<li><a href="<?php echo home_url('/'); ?>access/">アクセス・診療時間</a></li>
					<li><a href="<?php echo home_url('/'); ?>gallery/">フォトギャラリー</a></li>
				</ul>
				</li>
				
				<li class="menu">
					<a href="<?php echo home_url('/'); ?>faq/"><img src="<?php echo home_url('/'); ?>images/navi06.png" alt="よくある質問"></a>
				</li>
				
			</ul>
		</nav>
		<!----- /header ----->
<main>