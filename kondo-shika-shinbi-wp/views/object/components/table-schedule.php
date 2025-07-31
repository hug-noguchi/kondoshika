<?php
/**
 * 診療時間表
 *
 * @category components
 * @package growp
 * @since 1.0.0
 */
// 受付時間
$time = get_field( 'time', 'option' );
// 曜日別
$weeks = get_field( 'week', 'option' );
?>
<div class="c-time-table">
    <table class="c-time-table__schedule">
        <thead>
            <tr>
                <th class="u-text-left">受付<br class="u-hidden-lg">時間</th>
				<?php foreach ( $weeks as $week_key => $week ) { ?>
                    <th><?php echo $week['week-title']; ?></th>
				<?php } ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="u-text-left">
                    <span class="is-text-lg">午前</span><br>
					<?php echo $time['time-am']; ?>
                </td>
				<?php foreach ( $weeks as $week_key => $week ) {
					$week_am = $week['week-am'];
					if ( $week_am == 'type01' ) {
						$week_am_text = '<i class="fa fa-circle" aria-hidden="true"></i>';
					} elseif ( $week_am == 'type02' ) {
						$week_am_text = '▲';
					} elseif ( $week_am == 'type03' ) {
						$week_am_text = '▲';
					} elseif ( $week_am == 'type04' ) {
						$week_am_text = '<i class="fa fa-times" aria-hidden="true"></i>';
					}
					?>
                    <td><span><?php echo $week_am_text; ?></span></td>
				<?php } ?>
            </tr>
            <tr>
                <td class="u-text-left">
                    <span class="is-text-lg">午後</span><br>
					<?php echo $time['time-pm']; ?>
                </td>
				<?php foreach ( $weeks as $week_key => $week ) {
					$week_pm = $week['week-pm'];
					if ( $week_pm == 'type01' ) {
						$week_pm_text = '<i class="fa fa-circle" aria-hidden="true"></i>';
					} elseif ( $week_pm == 'type02' ) {
						$week_pm_text = '<i class="fa fa-times" aria-hidden="true"></i>';
					}
					?>
                    <td><span><?php echo $week_pm_text; ?></span></td>
				<?php } ?>
            </tr>
        </tbody>
    </table>
    <div class="c-time-table__text">
		<?php echo get_field( 'time-text', 'option' ); ?>
    </div>
</div>
