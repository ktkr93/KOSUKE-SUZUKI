<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/nav'); ?>

    <?php while (have_posts()) : the_post(); ?>
        <!-- Page Header-->
        <?php
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id);
        ?>
        <header class="masthead" style="background-image: url('<?php echo $img[0]; ?>')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1><?php the_title(); ?></h1>
                            <span class="meta">
                                Posted by
                                <?php the_author(); ?>
                                on <?php the_time("Y/m/d"); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <?php the_content(); ?>

                        <?php if (!is_singular('post')) : ?>
                            <dl>
                                <dt>カテゴリー</dt>
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'item_category');
                                foreach ($terms as $term) :
                                ?>
                                    <dd>
                                        <a href="<?php echo get_term_link($term->slug, 'item_category'); ?>"><?php echo htmlspecialchars($term->name); ?></a>
                                    </dd>
                                <?php endforeach; ?>
                                <dt>価格</dt>
                                <dd><?php echo number_format(get_field('価格')); ?>円</dd>
                                <dt>発売日</dt>
                                <dd><?php the_field('発売日') ?></dd>
                            </dl>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </article>

    <?php endwhile; ?>

    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
</body>

</html>