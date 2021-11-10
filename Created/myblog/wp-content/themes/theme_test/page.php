<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/nav'); ?>

    <?php while (have_posts()) : the_post(); ?>

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/contact-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </main>

    <?php endwhile; ?>

    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>