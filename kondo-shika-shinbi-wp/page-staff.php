<?php
/**
 * Template Name: 院長・スタッフ紹介
 * Page Slug: staff
 * Page Template Name: page-staff.php
 */
the_post();
remove_filter('the_content', 'wpautop');
$staffs = get_field('staff');
?>
<section class="l-main">
    <div class="l-section is-lower is-top">
        <div class="l-section is-lower-inner">
          <?php get_template_part('content', 'pan_center'); // パンくず ?>

			<?php echo get_field( 'message' ) ?>
            <div class="c-staff-list">
                <div class="c-staff-list__inner">
                    <div class="l-container">
                        <div class="c-staff-list__title">
                            <h2 class="heading is-xlg">スタッフ紹介</h2>
                        </div>
                        <div class="c-staff-list__conts">
                            <?php foreach($staffs as $staff_key => $staff) {?>
                            <div class="c-staff-list__block">
                                <div class="c-staff-list__images">
                                    <img class="c-staff-list__image u-image-circle is-circle-primary" src="<?php echo GTag::get_attachment_url( $staff['staff-image'], 'full' ); ?>" alt="<?php echo $staff['staff-position'];?>">
                                </div>
                                <div class="c-staff-list__texts-block">
                                    <div class="c-staff-list__block-title">
                                        <h3 class="heading is-lg is-lg-message"><?php echo $staff['staff-position'];?></h3>
                                    </div>
                                    <div class="c-staff-list__texts">
	                                    <?php echo $staff['staff-discription'];?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <img class="c-staff-list__deco is-top" src="<?php GUrl::the_asset() ?>/assets/images/img-star-white.png" alt="">
                <img class="c-staff-list__deco is-center" src="<?php GUrl::the_asset() ?>/assets/images/img-star-white.png" alt="">
                <img class="c-staff-list__deco is-bottom" src="<?php GUrl::the_asset() ?>/assets/images/img-star-white.png" alt="">
            </div>
        </div>
    </div>
</section>
