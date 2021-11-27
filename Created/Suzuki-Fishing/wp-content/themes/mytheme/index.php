<!doctype html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W76H9PT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
        <?php get_template_part('includes/header') ?>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8 col-xl-8 mb-4">
                    <!-- timeを右寄せにするためrowを設定 -->
                    <?php get_template_part('includes/pickup') ?>
                    <?php get_template_part('includes/new5post') ?>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-4">
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