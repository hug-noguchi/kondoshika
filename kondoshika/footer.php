<a href="#" id="topBtn"><img src="<?php echo home_url('/'); ?>images/to_top.png" alt="ページTOPへ"></a>

<script>
	$(document).ready(function () {
	$("#topBtn").hide();　//ボタンを非表示にする
	$(window).on("scroll", function () {
	if ($(this).scrollTop() > 100) { //ページの上から100pxスクロールした時
	$("#topBtn").fadeIn("fast"); //ボタンがフェードインする
	} else {
	$("#topBtn").fadeOut("fast");　//ボタンがフェードアウトする
	}
	scrollHeight = $(document).height(); //ドキュメントの高さ
	scrollPosition = $(window).height() + $(window).scrollTop(); //現在地
	footHeight = $("footer").innerHeight(); //止めたい位置の高さ(今回はfooter)
	if (scrollHeight - scrollPosition <= footHeight) { //ドキュメントの高さと現在地の差がfooterの高さ以下の時
	$("#topBtn").css({
	"position": "absolute", //pisitionをabsoluteに変更
	});
	} else { //それ以外の場合は
	$("#topBtn").css({
	"position": "fixed", //固定表示
	});
	}
	});


	//スムーススクロール設定
	$('#topBtn').click(function () {
	$('body,html').animate({
	scrollTop: 0
	}, 800);　//スムーススクロールの速度
	return false;
	});
	});
</script>

</main>


	<div class="ftcon pcnon"><a href="<?php echo home_url('/'); ?>contact"><img src="<?php echo home_url('/'); ?>images/f01.png" width="33.33%" alt="お問い合わせフォーム"/></a><a href="tel: 0425240722"><img src="<?php echo home_url('/'); ?>images/f02.png" width="33.33%" alt="042-524-0722"/></a><a href="https://appt.doctorsfile.jp/Patient/?hid=38731" target="_blank"><img src="<?php echo home_url('/'); ?>images/f03.png" width="33.33%" alt="予約"/></a></div>

	<?php if(has_tag()==true) : ?>
	<div class="footbox clearfix">
		<?php elseif ( is_front_page() || is_home() || is_single() ) : ?>
	<div class="footbox clearfix">
	<?php else: ?>
	<div class="footbox2 clearfix">
	<?php endif; ?>
		<div class="footbox-inner">
					<div class="foot_l fadein">
			<div class="sitemap01">
			<p class="ft"><a href="<?php echo home_url('/'); ?>">立川の矯正歯科：HOME</a></p>

				<p class="ft">矯正治療について</p>
			<ul>
								<li><a href="<?php echo home_url('/'); ?>about-orthodontics/">矯正歯科とは？</a></li>
								<li><a href="<?php echo home_url('/'); ?>orthodontic-consultation/">矯正相談</a></li>
								<li><a href="<?php echo home_url('/'); ?>clinic-of-choice/">なぜ、当院の矯正治療が選ばれるのか？</a></li>
								<li><a href="<?php echo home_url('/'); ?>orthodontic-plate/">床矯正について</a></li>
								<li><a href="<?php echo home_url('/'); ?>orthodontic-for-adults/">大人の矯正治療</a></li>
								<li><a href="<?php echo home_url('/'); ?>partial-orthodontics/">部分矯正とは？</a></li>
								<li><a href="<?php echo home_url('/'); ?>mft/">MFT(筋機能療法)について</a></li>
			</ul>

			<p class="ft">子どもの矯正｜小児矯正</p>
			<ul>
								<li><a href="<?php echo home_url('/'); ?>orthodontic-for-children/">子どもの矯正治療</a></li>
								<li><a href="<?php echo home_url('/'); ?>when-to-start/">子どもの矯正治療の開始時期</a></li>
								<li><a href="<?php echo home_url('/'); ?>invisalign/">インビザラインについて</a></li>
								<li><a href="<?php echo home_url('/'); ?>message/">お子さまと親御さんへのメッセージ</a></li>
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
			</ul>
			</div>
			<div class="sitemap02">
			<p class="ft"><a href="<?php echo home_url('/'); ?>price/">矯正費用について</a></p>
			<p class="ft">治療方針｜矯正歯科</p>
			<ul>
				<li><a href="<?php echo home_url('/'); ?>about-us/">近藤歯科クリニックについて</a></li>
				<li><a href="<?php echo home_url('/'); ?>about-staff/">スタッフについて</a></li>
				<li><a href="<?php echo home_url('/'); ?>treatment-policy/">近藤歯科クリニック治療方針</a></li>
				<li><a href="<?php echo home_url('/'); ?>treatment-flow-duration/">矯正治療の流れ・治療期間</a></li>
				<li><a href="<?php echo home_url('/'); ?>oral-function/">口腔機能を重視した矯正治療</a></li>
				<li><a href="<?php echo home_url('/'); ?>registered-dietitian/">近藤歯科クリニックの管理栄養士</a></li>
				<li><a href="<?php echo home_url('/'); ?>access/">アクセス・診療時間</a></li>
				<li><a href="<?php echo home_url('/'); ?>gallery/">フォトギャラリー</a></li>
			</ul>

			<p class="ft"><a href="<?php echo home_url('/'); ?>faq/">よくある質問</a></p>
			</div>
		</div>
					<div class="foot_r fadein">
			<p class="foot_com">立川の矯正歯科 近藤歯科クリニック</p>
			<p class="clinic_photo"><img src="<?php echo home_url('/'); ?>images/clinic_photo.png" alt="近藤歯科クリニック：外観"></p>
			<p>小児歯科･矯正歯科･予防歯科･一般歯科･歯周病･義歯･歯科口腔外科（外来環算定歯科）</p>
			<br />
			<p>〒190-0011
				東京都立川市高松町2-25-3メープル立川1F
			</p>
			<br />
					<p class="foot_tel"><a href="tel: 0425240722">042-524-0722</a></p>
			<p>&nbsp;</p>
						<div class="c-opening__block-table"><div class="c-time-table fadein">
			<table class="c-time-table__schedule">
				<thead>
				<tr>
					<th class="u-text-left">受付<br class="u-hidden-lg">時間</th>
					<th>月</th>
					<th>火</th>
					<th>水</th>
					<th>木</th>
					<th>金</th>
					<th>土	</th>
					<th>日/祝</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td class="u-text-left">
						<span class="is-text-lg">午前</span><br>
					9:40～13:00                </td>
					<td><span>▲</span></td>
					<td><span>●</span></td>
					<td><span>×</span></td>
					<td><span>●</span></td>
					<td><span>▲</span></td>
					<td><span>●</span></td>
					<td><span>×</span></td>
				</tr>
				<tr>
					<td class="u-text-left">
						<span class="is-text-lg">午後</span><br>
					14:30～18:30                </td>
					<td><span>●</span></td>
					<td><span>●</span></td>
					<td><span>×</span></td>
					<td><span>●</span></td>
					<td><span>●</span></td>
					<td><span>×</span></td>
					<td><span>×</span></td>
				</tr>
				</tbody>
				</table>
			</div>
			<div>
				※▲ 10:00～13:00迄です <br>
				※初診随時受付（予約制）<br>
				※電話予約可能
			</div>

			<br />

			<p class="foot_com">関連サイト</p>
						<ul class="related_link">
							<li><a href="https://kondo-shika-shinbi.com/shounishika/" target="_blank">立川 小児矯正</a></li>
							<li><a href="https://kondo-shika-shinbi.com/info/" target="_blank">立川 小児歯科</a></li>
							<li><a href="https://kondo-shika-shinbi.com/" target="_blank">立川 矯正歯科</a></li>
							<li><a href="https://tachikawa-kyousei-kondoshika.net/howto/" target="_blank">立川市の歯科クリニックの選び方</a></li>
						</ul>

			</div>
			</div>
		</div>
	</div>
	<p class="copyright">Copyright© 2022 <a href="<?php echo home_url('/'); ?>">立川の矯正歯科 近藤歯科クリニック</a> All Rights Reserved.</p>
</footer>
<?php wp_footer(); ?>
<script src="<?php echo home_url('/'); ?>js/lightbox.min.js"></script>
</body>
</html>
