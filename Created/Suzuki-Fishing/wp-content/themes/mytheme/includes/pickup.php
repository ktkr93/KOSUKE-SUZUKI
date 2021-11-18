<h2 class="mb-3 h3"><span class="border-left"></span>注目記事</h2>
<?php
$top_query = new WP_Query("tag='ピックアップ'");
?>
<?php if ($top_query->have_posts()) : ?>
    <?php while ($top_query->have_posts()) : $top_query->the_post(); ?>
        <?php
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id);
        ?>
        <?php if (have_posts()) : ?>
            <a class="col-12 pickup-content" href="<?php the_permalink(); ?>">
                <div class="row position-relative">
                    <!-- アイキャッチ画像 -->
                    <img class="img-fluid mb-3" src="<?php echo $img[0] ?>" alt="">
                    <!-- 記事タイトル -->
                    <div class="article-category">
                        <p>
                            <!-- カテゴリー名を表示 -->
                            <?php
                            $category = get_the_category();
                            $categoryName = $category[0]->name;
                            echo $categoryName;
                            ?>
                        </p>
                    </div>
                    <p class="fs-6 article-bold"><?php the_title() ?></p>
                    <div class="excerpt-text">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="row">
                        <time class="pickup-time-position-absolute">
                            <i class="far fa-clock far-position"></i>
                            <?php if (get_the_time('Y/m/d') == get_the_modified_date('Y/m/d')) : ?>
                                公開日: <?php the_time('Y/m/d') ?>
                            <?php else : ?>
                                最終更新日: <?php the_modified_date('Y/m/d') ?>
                            <?php endif; ?>
                        </time>
                    </div>
            </a>
        <?php else : ?>
            <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/no-img.jpg" alt="">
        <?php endif ?>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>