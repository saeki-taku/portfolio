<?php

add_action('init', function() {
  add_theme_support('title');
  add_theme_support('post-thumbnails');
  //メニューの追加
  register_nav_menus([
    'global_nav' => 'グローバルナビゲーション',
    'work_link' => '作品一覧'
  ]);
});



function custom_loop_rules ( $query ) {
  // 管理画面や、メインクエリ以外の処理に影響を及ぼさないように
  if ( is_admin() || ! $query->is_main_query() ){
      return;
  }
  // カテゴリーのアーカイブページ
  if ( $query->is_home() ) {
      $query->set('posts_per_page', 9); // 1ページあたりの表示件数を変更
  }
}
add_action('pre_get_posts','custom_loop_rules');
?>
