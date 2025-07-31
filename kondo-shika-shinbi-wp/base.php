<?php
/**
 * ベーステンプレート
 * : テンプレート階層を上書きし、
 * 基本的にこのテンプレートを先に読み込みます。
 * =====================================================
 * @package  growp
 * @license  GPLv2 or later
 * @since 1.0.0
 * =====================================================
 */

$content = GTemplate::get_content();

wp_reset_query();

GTemplate::get_template( "foundation/head" );
if(!is_page('reservation')) {
    GTemplate::get_layout( "slidebar" );
    GTemplate::get_layout( "header" );
    GTemplate::get_component( "mainvisual" );
    GTemplate::get_component( "page-header" );
    $wrapper = apply_filters( 'growp/wrapper', 'onecolumn' );
?>
<?php if ( $wrapper === "twocolumn" ) { ?>
    <div class="l-wrapper">
        <div class="l-wrapper__inner">
			<?php if ( is_post_type_archive( 'voice' ) ) {
				$page_id = 28;
				$content_voice = get_page( $page_id );
				echo $content_voice->post_content;
			}
			?>
            <div class="l-container is-two-columns">
                <section class="l-main is-two-columns">
                    <div class="l-post-content">
						<?php
						echo $content;
						unset( $content );
						?>
                    </div>
                </section>
                <aside class="l-aside">
					<?php
                        if(is_category('column') || cat_is_ancestor_of(4, $cat)) {
	                        GTemplate::get_layout( "sidebar-column" );
                        } else {
                            GTemplate::get_layout( "sidebar" );
                        }
                    ?>
                </aside>
            </div>
        </div>
    </div>
<?php } else { ?>
    <section class="l-main<?php if ( is_front_page() ) {
		echo ' is-top';
	} ?>">
	<?php
	echo $content;
	unset( $content );
}
?>
    </section>
<?php
// フッター取得前のアクションフック
do_action( 'get_footer' );

// フッターを取得
GTemplate::get_component( "offer" );
GTemplate::get_layout( "footer" );
    };
