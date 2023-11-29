<?php
// カスタムメニュー機能
add_theme_support('menus');
?>

<?php
// 管理画面で、アイキャッチ画像を投稿できるようにする
// サムネイル機能の有効化
add_theme_support('post-thumbnails');
?>

<?php
//Contact Form7を使用する際に整形機能をoffにする
add_filter('wpcf7_autop_or_not', 'my_wpcf7_autop');
function my_wpcf7_autop()
{
    return false;
}
?>

<?php 
//head内のヴァージョンを非表示
remove_action('wp_head','wp_generator');
?>

<?php 
//'ver='を非表示
function remove_cssjs_ver2( $src ) {
  if ( strpos( $src, 'ver=' ) )
      $src = remove_query_arg( 'ver', $src );
  return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver2', 9999 );
add_filter( 'script_loader_src', 'remove_cssjs_ver2', 9999 );
?>