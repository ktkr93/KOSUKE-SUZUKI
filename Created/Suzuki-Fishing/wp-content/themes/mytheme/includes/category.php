<a href="<?php echo esc_url(get_template_directory_uri()) ?>/category">
    <h2 class="mb-3 h3"><span class="border-left"></span>カテゴリー一覧</h2>
</a>
<ul class="category-list">
    <?php
    // パラメータを指定
    $args = array(
        // カテゴリー内の記事数順で指定
        'orderby' => 'count',
        // 降順で指定
        'order' => 'DSC'
    );
    $categories = get_categories($args);

    foreach ($categories as $category) {
        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . ' (' . $category->count . ')</a> </li> ';
    }
    ?>
</ul>