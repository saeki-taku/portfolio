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
