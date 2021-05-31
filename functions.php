<?php

add_action('init', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  //メニューの追加
  register_nav_menus([
    'global_nav' => 'グローバルナビゲーション',
    'work_link' => '作品一覧'
  ]);
});

// head-title
function wp_document_title_separator($title)
{
  if (is_home() || is_front_page()) {
    unset($title['tagline']); // ディスクリプションを出力しない
  }
  return $title;
}
add_filter('document_title_parts', 'wp_document_title_separator', 10, 1);


// front-pageの表示件数の設定
function custom_loop_rules($query)
{
  // 管理画面や、メインクエリ以外の処理に影響を及ぼさないように
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  // カテゴリーのアーカイブページ
  if ($query->is_home()) {
    $query->set('posts_per_page', 9); // 1ページあたりの表示件数を変更
  }
}
add_action('pre_get_posts', 'custom_loop_rules');

// MW WP Form エラーメッセージ
function my_error_message($error, $key, $rule)
{
  if ($key === 'contact_name' && $rule === 'noempty') {
    return 'お名前が入力されていません';
  }
  if ($key === 'furigana' && $rule === 'noempty') {
    return 'フリガナが入力されていません';
  }
  if ($key === 'mail' && $rule === 'noempty') {
    return 'E-mailが入力されていません';
  }
  if ($key === 'tell' && $rule === 'noempty') {
    return '電話番号が入力されていません';
  }
  if ($key === 'contents' && $rule === 'noempty') {
    return 'お問合せ内容が入力されていません';
  }
  return $error;
}
add_filter('mwform_error_message_mw-wp-form-5', 'my_error_message', 10, 3);
