<?php
/*
Template Name: LP用レイアウト
*/
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/nav'); ?>

    <?php while (have_posts()) : the_post(); ?>

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