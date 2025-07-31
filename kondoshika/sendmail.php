<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php
define('WP_USE_THEMES', false);
require('wp-blog-header.php');
?>
<?php
//==========================================================
//  メールフォームシステム ver.0.96β
//  eWeb http://www.eweb-design.com/
//  Ajax対応カスタマイズ
//  AjaxMail http://www.ajaxmail.jp
//==========================================================

// このファイルの名前
$script ="sendmail.php";

// メールを送信するアドレス(複数指定する場合は「,」で区切る)
$to = "kurokei77@gmail.com";

// 送信されるメールのタイトル
$sbj = "Contact";

// 送信確認画面の表示(する=1, しない=0)
$chmail = 1;

// 送信後に自動的にジャンプする(する=1, しない=0)
// 0にすると、送信終了画面が表示されます。
$jpage = 1;

// 送信後にジャンプするページ(送信後にジャンプする場合)
$next = "http://dreamteller.heteml.jp/atmore/thanks/";

$from_add = 1;


// 差出人に送信内容確認メールを送る(送る=1, 送らない=0)
// 送る場合は、メール入力欄のname属性を「email」にしてください。
$remail = 1;

// 差出人に送信確認メールを送る場合のメールのタイトル
$resbj = "応募・お問い合わせを受け付けました";

// 必須入力項目を設定する(する=1, しない=0)
// 原則としてここはしない=0にしておいてください。
$esse = 1;

// 必須入力項目(入力フォームで指定したname)
$eles = array('会社名','郵便番号','担当者ご氏名','お電話番号','email','お問い合わせ内容');


//--------------------------------------------------------------------
// 以上で基本的な設定は終了です。
// 以下の変更は自己責任でお願いします。(行数はデフォルト時)
// 未入力画面のレイアウト → 88行目周辺
// 送信メールのレイアウト → 103行目周辺
// 差出人への送信確認メールのレイアウト → 128行目周辺
// 送信確認画面のレイアウト → 163行目周辺
// 送信終了画面のレイアウト → 194行目周辺
// 送信確認画面や終了画面のヘッダとフッタ → 209行目周辺
//--------------------------------------------------------------------

$sendm = 0;
foreach($_POST as $key=>$var) {
  if($var == "eweb_submit") $sendm = 1;
}

// 文字の置き換え
$string_from = "＼";
$string_to = "ー";

// 未入力項目のチェック
if($esse == 1) {
  $flag = 0;
  $length = count($eles) - 1;
  foreach($_POST as $key=>$var) {
    $key = strtr($key, $string_from, $string_to);
    if($var == "eweb_submit") ;
    else {
      for($i=0; $i<=$length; $i++) {
        if($key == $eles[$i] && empty($var)) {
          $errm .= "<FONT color=#ff0000>「".$key."」は必須入力項目です。</FONT><br />\n";
          $flag = 1;
        }
      }
    }
  }
  foreach($_POST as $key=>$var) {
    $key = strtr($key, $string_from, $string_to);
    for($i=0; $i<=$length; $i++) {
      if($key == $eles[$i]) {
        $eles[$i] = "eweb_ok";
      }
    }
  }
  for($i=0; $i<=$length; $i++) {
    if($eles[$i] != "eweb_ok") {
      $errm .= "<FONT color=#ff0000>「".$eles[$i]."」が未選択です。</FONT><br />\n";
      $eles[$i] = "eweb_ok";
      $flag = 1;
    }
  }
  if($flag == 1){
    htmlHeader();
?>


<!--- 未入力があった時の画面 --- 開始 --------------------->

<p>&nbsp;</p>

<div align="center">
<p>
入力エラー<br /><br />
<?php echo $errm; ?>
<br /><br />
<input type="button" value="前画面に戻る" onClick="history.back()">
</p>
</div>

<!--- 終了 --->


<?php 
    htmlFooter();
    exit(0);
  }
}
//--- メールのレイアウトの編集 --- 開始 ------------------->

$body="「".$sbj."」からの発信です\n\n";
$body.="-------------------------------------------------\n\n";
foreach($_POST as $key=>$var) {
  $key = strtr($key, $string_from, $string_to);
  if(get_magic_quotes_gpc()) $var = stripslashes($var);
  if($var == "eweb_submit") ;
  else $body.="[".$key."] ".$var."\n";
}
$body.="\n-------------------------------------------------\n\n";
$body.="送信日時：".date( "Y/m/d (D) H:i:s", time() )."\n";
$body.="ホスト名：".getHostByAddr(getenv('REMOTE_ADDR'))."\n\n";

//--- 終了 --->


if($remail == 1) {
//--- 差出人への送信確認メールのレイアウトの編集 --- 開始 ->

$rebody="お問合せありがとうございました。\n";
$rebody.="以下の内容が送信されました。\n\n";
$rebody.="-------------------------------------------------\n\n";
foreach($_POST as $key=>$var) {
  $key = strtr($key, $string_from, $string_to);
  if(get_magic_quotes_gpc()) $var = stripslashes($var);
  if($var == "eweb_submit") ;
  else $rebody.="[".$key."] ".$var."\n";
}
$rebody.="\n-------------------------------------------------\n\n";
$rebody.="送信日時：".date( "Y/m/d (D) H:i:s", time() )."\n";
$reto = $_POST['email'];
$rebody=mb_convert_encoding($rebody,"JIS","UTF-8");
$resbj="=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($resbj,"JIS","UTF-8"))."?=";
$reheader="From: $to\nReply-To: ".$to."\nContent-Type: text/plain;charset=iso-2022-jp\nX-Mailer: PHP/".phpversion();

//--- 終了 --->
}

$body=mb_convert_encoding($body,"JIS","UTF-8");
$sbj="=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($sbj,"JIS","UTF-8"))."?=";
if($from_add == 1) {
  $from = $_POST['email'];
  $header="From: $from\nReply-To: ".$_POST['email']."\nContent-Type: text/plain;charset=iso-2022-jp\nX-Mailer: PHP/".phpversion();
} else {
  $header="Reply-To: ".$_POST['email']."\nContent-Type: text/plain;charset=iso-2022-jp\nX-Mailer: PHP/".phpversion();
}
if($chmail == 0 || $sendm == 1) {
  mail($to,$sbj,$body,$header);
  if($remail == 1) { mail($reto,$resbj,$rebody,$reheader); }
}
else { htmlHeader();
?>


<!--- 送信確認画面のレイアウトの編集 --- 開始 ------------->

<p style="margin: 20px 40px;">以下の内容で間違いがなければ、「送信する」ボタンを押してください。</p>


<form action="<? echo $script; ?>" method="POST">
<? echo $err_message; ?>

<div>
<table class="contab">
<?php
foreach($_POST as $key=>$var) {
  $key = strtr($key, $string_from, $string_to);
  if(get_magic_quotes_gpc()) $var = stripslashes($var);
  $var = htmlspecialchars($var);
  print("<tr><th>".$key."</th><td>".$var);
?>
<INPUT type="hidden" name="<?= $key ?>" value="<?= $var ?>">
<?php
  print("</td></tr>\n");
}
?>
</table>
</div>

<br>
<div class="messageBtn">
<input type="hidden" name="eweb_set" value="eweb_submit">
<input type="submit" value="送信する">
<input type="button" value="戻る" onClick="history.back()">
</div>
</form>


<!--- 終了 --->

<?php htmlFooter(); } if(($jpage == 0 && $sendm == 1) || ($jpage == 0 && ($chmail == 0 && $sendm == 0))) { htmlHeader(); ?>


<!--- 送信終了画面のレイアウトの編集 --- 開始 ------------->

<div style="margin: 100px 0 300px 0;">
<p class="cen">
ありがとうございました。送信は無事に終了しました。<br />
<br />
担当者より24時間以内にご連絡させていただきます。<br />
日曜・祝祭日の場合はお返事に時間がかかる場合がございますのでご了承ください。<br />
<br />
<a href="https://smilecast.me/lp/">元のページに戻る</a>
</p>
</div>

<p class="cen"></p>

<!--- 終了 --->

<?php htmlFooter(); } else if(($jpage == 1 && $sendm == 1) || $chmail == 0) { header("Location: ".$next); } function htmlHeader() { ?>


<!--- ヘッダーの編集 --- 開始 ----------------------------->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--[if lt IE 9]><html xmlns="http://www.w3.org/1999/xhtml" class="ie"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" lang="<?php bloginfo('language'); ?>"><!--<![endif]-->
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />

<title><?php seo_title(); ?></title>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" /> 

<?php wp_head(); ?>

<link href="<?php echo home_url('/'); ?>reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo home_url('/'); ?>style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</head>
<body>

<header>
  <div class="head">
    <div class="head-inner clearfix">
      <div class="logo">
		  <p><a href="<?php echo home_url('/'); ?>"><img src="<?php echo home_url('/'); ?>images/logo.png" alt="@more アットモア" /></a></p>
      </div>
 <?php if(is_mobile()) { ?>
<div class="navToggle">
    <span></span><span></span><span></span><span>menu</span>
</div>
<nav class="globalMenuSp">
    <ul>
			<li><a href="<?php echo home_url('/'); ?>">@more アットモア TOP</a></li>
			<li><a href="<?php echo home_url('/'); ?>products/">健康・美容商品一覧</a></li>
			<li><a href="<?php echo home_url('/'); ?>story/">アットモアの歴史</a></li>
			<li><a href="<?php echo home_url('/'); ?>development/">商品開発・製造について</a></li>
			<li><a href="<?php echo home_url('/'); ?>transactions/">お取引を希望される方へ</a></li>
			<li><a href="<?php echo home_url('/'); ?>company/">会社案内</a></li>
			<li><a href="<?php echo home_url('/'); ?>concept/">アットモアってどんな会社？</a></li>
			<li><a href="<?php echo home_url('/'); ?>promise/">私たちの約束</a></li>
			<li><a href="<?php echo home_url('/'); ?>samole/">サンプル請求</a></li>
			<li><a href="<?php echo home_url('/'); ?>contact/">お問い合わせ</a></li>
			<li><a href="https://atmore.buyshop.jp/" target="_blank">ネットショップ</a></li>
			<li><a href="https://more-miyara.com/" target="_blank">エステサロン 宮良の館</a></li>
			<li><a href="<?php echo home_url('/'); ?>privacy-policy/">プライバシーポリシー</a></li>
    </ul>
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
 <?php }; ?>
      <div class="logo_r">
      <ul class="hlink">
       <li><a href="<?php echo home_url('/'); ?>sample/">サンプル請求</a></li>
       <li><a href="https://atmore.buyshop.jp/" target="_blank">ネットショップ</a></li>
       <li><a href="<?php echo home_url('/'); ?>contact/">お問い合わせ</a></li>
      </ul>
<?php if(!is_mobile()) { ?><?php include('wp-content/themes/atmore/sidebar.php'); ?><?php }; ?>
      </div>
    </div>
  </div>
</header>
<?php if(is_mobile()) { ?>
<div class="langarea clearfix">
 <div class="langarea-inner">
  <p class="langt"><?php include('wp-content/themes/atmore/sidebar.php'); ?></p>
 </div>
</div>
<?php }; ?>

<section class="mainvisual-low">
  <h1>お問い合わせフォーム</h1>
</section>

<!--- 終了 --->


<?php } function htmlFooter() { ?>


<!--- フッターの編集 --- 開始 ----------------------------->

<section class="beauty">

<div class="flex-box3">
 <div class="flex-item3">
  <p><a href="http://dreamteller.heteml.jp/atmore/transactions/"><img src="http://dreamteller.heteml.jp/atmore/images/deal.png" alt="お取引を希望される方へ" /></a></p>
 </div>
 <div class="flex-item3">
  <p><a href="http://dreamteller.heteml.jp/atmore/sample/"><img src="http://dreamteller.heteml.jp/atmore/images/sample.png" alt="サンプル請求" /></a></p>
 </div>
 <div class="flex-item3">
  <p><a href="http://dreamteller.heteml.jp/atmore/seminar/"><img src="http://dreamteller.heteml.jp/atmore/images/seminar.png" alt="アットモア講習会" /></a></p>
 </div>
 <div class="flex-item3">
  <p><a href="http://dreamteller.heteml.jp/atmore/contact/"><img src="http://dreamteller.heteml.jp/atmore/images/contact.png" alt="お問い合わせ" /></a></p>
 </div>
</div>
</section>

<section class="flink">
<p><a href="http://dreamteller.heteml.jp/atmore/">Home</a> ｜ <a href="http://dreamteller.heteml.jp/atmore/company/">会社案内</a> ｜ <a href="http://dreamteller.heteml.jp/atmore/contact/">お問い合わせ</a> ｜ <a href="http://dreamteller.heteml.jp/atmore/privacy-policy/">プライバシーポリシー</a></p>
</section>

<footer>
<p class="logo_foot"><img src="http://dreamteller.heteml.jp/atmore/images/logo.png" alt="@more アットモア" /></p>
<p class="copyright">Copyright(C) 2018 内面美容と外面美容の総合ブランド @more. All rights reserved.</p>
</footer>


<?php wp_footer(); ?>
</body>
</html>
<!--- 終了 --->


<?php } ?>