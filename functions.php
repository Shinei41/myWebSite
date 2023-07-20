<?php
    // 投稿のアーカイブページを作成する
    function post_has_archive($args, $post_type)
    {
        if ('post' == $post_type) {
            $args['rewrite'] = true; // リライトを有効にする
            $args['has_archive'] = 'posts'; // 任意のスラッグ名
        }
        return $args;
    }
    add_filter('register_post_type_args', 'post_has_archive', 10, 2);

    

/* ---------- カスタム投稿タイプを追加 ---------- */
add_action( 'init', 'create_post_type' );

function create_post_type() {

  register_post_type(
    'news',
    array(
      'label' => 'ニュース',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );

  register_taxonomy(
    'news-cat',
    'news',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(
    'news-tag',
    'news',
    array(
      'label' => 'タグ',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );
  
  add_theme_support('post-thumbnails');
}
?>