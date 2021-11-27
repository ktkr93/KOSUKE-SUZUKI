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
        <div class="container-fluid px-md-4">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8 col-xl-8 mb-4">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="col-md-8 col-12">
                                <div class="bg-white py-3">
                                    <div class="text-center">
                                        <!-- 日付 -->
                                        <?php the_time('Y/m/d'); ?>
                                        <!-- 記事タイトル -->
                                        <h2 class="h2 px-3 pb-3 font-weight-bolder"><?php the_title(); ?></h2>
                                        <!-- カテゴリー -->
                                        <div class="post-category">
                                            <!-- カテゴリー名を表示 -->
                                            <?php
                                            $category = get_the_category();
                                            if ($category[0]) {
                                                echo '<a href="' . get_category_link($category[0]->term_id) . '"><p>' . $category[0]->cat_name . '</p></a>';
                                            }
                                            ?>
                                        </div>
                                        <!-- サムネイル -->
                                        <div class="pb-3">
                                            <?php
                                            $id = get_post_thumbnail_id();
                                            $img = wp_get_attachment_image_src($id);
                                            ?>
                                            <?php if (has_post_thumbnail()) : ?>
                                                <img class="img-fluid" src="<?php echo $img[0] ?>" alt="">
                                            <?php else : ?>
                                                <img class="img-fluid" src="<?php echo home_url() ?>/img/no-img.jpg" alt="">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!-- 本文 -->
                                    <div class="px-2 text-left">
                                        <?php remove_filter('the_content', 'wpautop'); ?>
                                        <?php echo get_the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                    else : ?>
                        <p>記事がありません。</p>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-4">
                    <?php get_template_part('includes/new5post') ?>
                    <?php get_template_part('includes/ranking5') ?>
                    <?php get_template_part('includes/category') ?>
                </div>
            </div>
        </div>
    </main>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#FF3300" fill-opacity="1" d="M0,96L80,85.3C160,75,320,53,480,69.3C640,85,800,139,960,154.7C1120,171,1280,149,1360,138.7L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
    <footer>
        <?php get_template_part('includes/footer') ?>
    </footer>
</body>
<?php get_footer(); ?>

</html>