<?php

add_action('init', function () {
    add_theme_support('post-thumbnails');
});

/* ---------------------------------------
ウィジェットの有効化・設定
--------------------------------------- */
//ウィジェットを作成し、管理画面で設定できるようにします。
//また、各ウィジェットをくくるHTMLタグなども指定できます。
//表示にはテーマテンプレート内でdynamic_sidebar()に設定したidを指定します。
function theme_slug_widgets_init()
{
    register_sidebar(array(
        'name' => 'サイドバー',
        'id' => 'sidebar',
        'description' => 'サイドバーウィジェット',
    ));
}
add_action('widgets_init', 'theme_slug_widgets_init');


//CSSを読み込む
function add_stylesheet()
{
    wp_enqueue_style(
        'style', // mainという名前を設定
        get_template_directory_uri() . '/style.css', // パス
        array(), // style.cssより先に読み込むCSSは無いので配列は空
    );
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

//人気の記事を表示させる
function my_custom_popular_posts($post_id)
{
    $count_key = 'cf_popular_posts';
    $count = get_post_meta($post_id, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($post_id, $count_key);
        add_post_meta($post_id, $count_key, '0');
    } else {
        $count++;
        update_post_meta($post_id, $count_key, $count);
    }
}
function my_custom_track_posts($post_id)
{
    if (!is_single()) return;
    if (empty($post_id)) {
        global $post;
        $post_id = $post->ID;
    }
    my_custom_popular_posts($post_id);
}
add_action('wp_head', 'my_custom_track_posts');




//抜粋の文字数を調整
function custom_excerpt_length($length)
{
    return 32;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);
