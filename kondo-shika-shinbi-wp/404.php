<?php
/**
 * 404 template
 * =====================================================
 * @package  growp
 * @license  GPLv2 or later
 * @since 1.0.0
 * =====================================================
 */
// ページヘッダーの設定
add_filter( 'growp/page_header/title', function () {
	return 'ページが見つかりません';
} );
add_filter( 'growp/page_header/image', function () {
	return GUrl::asset( '/assets/images/pagehead-aboutus.jpg' );
} );
?>
<div class="l-section is-lower <?php echo $Class;?>">
    <div class="l-section is-lower-inner <?php echo $Class;?>">
        <div class="l-container">
            <div class="row">
                <div class="large-10 is-push-lg-1 small-12">
                    <h1 class="heading is-lg">指定されたページは存在しません。</h1>
                    <p>大変申し訳ございませんが、お探しのページは、削除されたか、ファイル名が間違っている可能性があります。アドレスの確認、もしくはトップページよりお探しください。</p>
                    <div class="u-mbs is-lg is-top">
                        <p class="u-text-center">
                            <a href="/" class="c-button is-lg is-arrow is-primary is-effect">トップページへ戻る</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
