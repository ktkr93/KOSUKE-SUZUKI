<a href="<?php echo esc_url(get_template_directory_uri()) ?>/archive">
    <h2 class="mb-3 h3"><span class="border-left"></span>新着記事</h2>
</a>
<?php if (have_posts()) : while (have_posts()) : the_post() ?>
        <a class="article-height d-block mb-4" href="<?php the_permalink() ?>">
            <div class="row">
                <div class="col-5">
                    <?php
                    $id = get_post_thumbnail_id();
                    $img = wp_get_attachment_image_src($id);
                    ?>
                    <?php if (has_post_thumbnail()) : ?>
                        <img class="img-fluid" src="<?php echo $img[0] ?>" alt="">
                    <?php else : ?>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/no-img.jpg" alt="">
                    <?php endif ?>
                </div>
                <div class="col-7">
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
                        <?php the_excerpt() ?>
                    </div>
                    <time class="time-position-absolute">
                        <i class="far fa-clock far-position"></i>
                        <?php if (get_the_time('Y/m/d') == get_the_modified_date('Y/m/d')) : ?>
                            公開日: <?php the_time('Y/m/d') ?>
                        <?php else : ?>
                            最終更新日: <?php the_modified_date('Y/m/d') ?>
                        <?php endif; ?>
                    </time>
                </div>
            </div>
        </a>
    <?php endwhile ?>
<?php else : ?>
    <p><?php _e('投稿がありません'); ?></p>
<?php endif ?>
<div class="d-flex justify-content-end">
    <a class="btn-link" href="<?php echo esc_url(get_template_directory_uri()) ?>/archive">新着記事一覧を見る<i style="margin-left: 10px;" class="fas fa-chevron-right"></i></a>
</div>