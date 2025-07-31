<?php
/**
 * @package WordPress
 */
?>

<?php
	//テンプレート振り分け
	if ( in_category_family(2) ) {
		//
		include('single-news.php');
	} elseif ( in_category_family(3) ) {
		//
	include('single-news.php');
} elseif ( in_category_family(87) ) {
	//
	include('single-voice.php');
	} else {
		//その他
		include('single-news.php');
	}
?>
