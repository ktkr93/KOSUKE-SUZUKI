<!-- それぞれのカテゴリーの記事一覧 -->

<!doctype html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <header>
        <?php get_template_part('includes/header') ?>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8 col-xl-8 mb-4">
                    <h2 class="mb-3 h3"><span class="border-left"></span><?php wp_title('') ?></h2>
                    <?php if (have_posts()) : while (have_posts()) : the_post() ?>
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
                        <?php endwhile ?>
                    <?php else : ?>
                        <p><?php _e('投稿がありません'); ?></p>
                    <?php endif ?>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-4">
                    <?php get_template_part('includes/newpost5') ?>
                    <?php get_template_part('includes/ranking5') ?>
                    <?php get_template_part('includes/category') ?>
                </div>
            </div>
        </div>
    </main>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#FF3300" fill-opacity="1" d="M0,96L80,85.3C160,75,320,53,480,69.3C640,85,800,139,960,154.7C1120,171,1280,149,1360,138.7L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
    <footer class="position-relative">
        <?php get_template_part('includes/footer') ?>
    </footer>
</body>
<?php get_footer(); ?>

</html>