<?php

function add_custom_meta_boxes() {
 add_meta_box(
  'wp_recommend_post',//ID of meta box
  __('Recommend post', 'tcd-w'),//label
  'recommend_post',//callback function
  'post',// post type
  'side'
 );
}
add_action('add_meta_boxes', 'add_custom_meta_boxes');

function recommend_post(){
    global $post;
    $custom = get_post_custom($post->ID);
    $recommend_post = $custom["recommend_post"][0];
?>
<p><?php _e('Check if you wan\'t to show this post for recommend post.', 'tcd-w');  ?></p>
<label><input type="checkbox" name="recommend_post" <?php if( $recommend_post == true ) { ?>checked="checked"<?php } ?> />  <?php _e('Show this post for recommend post.', 'tcd-w');  ?></label>
<input type="hidden" name="my_hidden_flag" value="true" />
<?php
}


function save_details( $post_id ) {
 if (isset($_POST['my_hidden_flag'])) {
    $mydata = $_POST['recommend_post'];
    if ( "" == get_post_meta( $post_id, 'recommend_post' )) {
        add_post_meta( $post_id, 'recommend_post', $mydata, true ) ;
    } else if ( $mydata != get_post_meta( $post_id, 'recommend_post' )) {
        update_post_meta( $post_id, 'recommend_post', $mydata ) ;
    } else if ( "" == $mydata ) {
        delete_post_meta( $post_id, 'recommend_post' ) ;
    }
 }
}
add_action('save_post', 'save_details');






// 管理画面の記事一覧に「カスタムフィールド」のフィルタを追加する
add_filter( 'parse_query', 'ba_admin_posts_filter' );
add_action( 'restrict_manage_posts', 'ba_admin_posts_filter_restrict_manage_posts' );
function ba_admin_posts_filter( $query )
{
    global $pagenow;
    if ( is_admin() && $pagenow=='edit.php' && isset($_GET['ADMIN_FILTER_FIELD_NAME']) && $_GET['ADMIN_FILTER_FIELD_NAME'] != '') {
        $query->query_vars['meta_key'] = $_GET['ADMIN_FILTER_FIELD_NAME'];
    if (isset($_GET['ADMIN_FILTER_FIELD_VALUE']) && $_GET['ADMIN_FILTER_FIELD_VALUE'] != '')
        $query->query_vars['meta_value'] = $_GET['ADMIN_FILTER_FIELD_VALUE'];
    }
}
function ba_admin_posts_filter_restrict_manage_posts()
{
    global $wpdb;
    $sql = 'SELECT DISTINCT meta_key FROM '.$wpdb->postmeta.' ORDER BY 1';
    $fields = $wpdb->get_results($sql, ARRAY_N);
    $current = isset($_GET['ADMIN_FILTER_FIELD_NAME'])? $_GET['ADMIN_FILTER_FIELD_NAME']:'';
?>
<select name="ADMIN_FILTER_FIELD_NAME">
<option value=""><?php _e('All post', 'tcd-w');  ?></option>
<option value="recommend_post"<?php if($current){ echo ' selected="selected"'; }; ?>><?php _e('Recommend post', 'tcd-w');  ?></option>
</select>
<?php
}






// 投稿一覧にカスタムフィールドを表示する
add_filter("manage_edit-post_columns", "add_new_post_columns");
function add_new_post_columns($post_columns){
    $post_columns = array(
        "cb" => '<input type="checkbox"/>',
        "title" => __('Title', 'tcd-w'),
        'recommend_post' => __('Recommend post', 'tcd-w'),
        'categories' => __('Category', 'tcd-w'),
        'tags' => __('Tags', 'tcd-w'),
        "author" => __('Author', 'tcd-w'),
        "comments" => __('Comments', 'tcd-w'),
        "date" => __('Date', 'tcd-w'),
    );
    return $post_columns;
}
add_action('manage_post_posts_custom_column', 'manage_post_columns', 10, 2);

function manage_post_columns($column_name, $id) {
    global $post;
    switch ($column_name) {
      case 'recommend_post':
        if(get_post_meta($post->ID, 'recommend_post', true)) { _e('Show', 'tcd-w'); };
      default:
      break;
    } // end switch
};

?>