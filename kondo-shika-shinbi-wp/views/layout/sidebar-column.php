<?php
/**
 * サイト共通 サイドバー
 *
 * @category components
 * @package growp
 * @since 1.0.0
 */
?>
<div class="c-sidebar">
    <div class="c-sidebar__title">コラムカテゴリー
    </div>

    <ul>
		<?php
		$categories = get_terms('category');
		foreach( $categories as $category ){
			if ( $category->parent ) {
			?>
            <li class="c-sidebar__item"><a href="<?php echo get_category_link( $category->term_id ) ?>"><?php echo $category->name ?></a></li>
		<?php }
		    }
        ?>
    </ul>
</div>
<div class="c-sidebar">
    <div class="c-sidebar__title  is-archive">月間アーカイブ</div>
    <select name="archive-dropdown"
            onchange="document.location.href=this.options[this.selectedIndex].value;">
        <option value=""><?php echo esc_attr(__('Select Month')); ?></option>
		<?php
		if(is_post_type_archive('voice')||is_singular('voice')) {
			$post_type = 'voice';
		} else {
			$post_type = 'post';
		}
		$date_args = array(
			'type' => 'monthly',
			'limit' => '',
			'format' => 'option',
			'before' => '',
			'after' => '',
			'show_post_count' => false,
			'echo' => 1,
			'order' => 'DESC',
			'post_type' => $post_type,
		);
		wp_get_archives($date_args);
		?>
    </select>
</div>
<div class="c-sidebar">
    <div class="c-sidebar__banners">
        <?php
            $categories = get_terms('category');
            foreach( $categories as $category ){
            if ( $category->parent ) {
                continue;
            }
        ?>
        <a class="c-sidebar__banner" href="<?php echo get_category_link( $category->term_id ) ?>">
            <img src="<?php GUrl::the_asset()?>/assets/images/img-banner-0<?php echo $category->term_id; ?>.jpg" alt="<?php echo $category->name ?>"/>
        </a>
        <?php } ?>
    </div>
</div>
