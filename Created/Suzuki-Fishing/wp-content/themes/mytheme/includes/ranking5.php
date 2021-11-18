<aside id="sidebar">
    <a href="<?php echo esc_url(get_template_directory_uri()) ?>/ranking">
        <h2 class="mb-3 h3"><span class="border-left"></span>人気記事</h2>
    </a>
    <?php
    $args = array(
        'meta_key' => 'cf_popular_posts',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        'showposts' => 5,
    );
    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :
            $wp_query->the_post();
    ?>
            <a class="d-block mb-4" href="<?php the_permalink() ?>">
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
                    <div class="col-7 position-relative">
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
    <?php endwhile;
    endif;
    wp_reset_postdata(); ?>
    <div class="d-flex justify-content-end mb-4">
        <a class="btn-link" href="<?php echo esc_url(get_template_directory_uri()) ?>/ranking">人気記事一覧を見る<i style="margin-left: 10px;" class="fas fa-chevron-right"></i></a>
    </div>
</aside>