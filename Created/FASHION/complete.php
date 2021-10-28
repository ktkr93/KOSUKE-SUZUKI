<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");

$to = $_POST["email"];
$subject = "お問い合わせいただきありがとうございます。";
$header = "From: contact@fashion.com";
$header .= "\n";
$header .= "Bcc: ktkr93@gmail.com";
$message = "お問い合わせいただきありがとうございます。" . "\n" .
    "以下の通りにお問い合わせ内容を受け付けました。" . "\n" . "\n" .
    "お名前｜" . $_POST["name"] . "\n" .
    "電話番号｜" . $_POST["tel"] . "\n" .
    "メールアドレス｜" . $_POST["email"] . "\n" .
    "お問い合わせ内容をご記入ください｜" . $_POST["question"];

mb_send_mail($to, $subject, $message, $header);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W76H9PT');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FASHIONでは最新トレンドのレディース、メンズをお買い求めいただけます。">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <title>CONTACT</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="css/destyle.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f66cdf6395.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body class="contact-page">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W76H9PT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header id="header">
        <div class="header-container">
            <a href="index.html">
                <h1>FASHION</h1>
            </a>
        </div>
    </header>
    <div class="contact-main">
        <div class="contact-main-container">
            <p class="contact-main-heading">
                <?php echo $_POST["name"] ?> 様、お問い合わせいただきありがとうございます。
                <br>以下のお問い合わせ内容を、メールにて確認させていただきました。
            </p>
            <form id="form" class="form" action="#">
                <p>
                    <label for="name">お名前</label><br>
                    <?php echo $_POST["name"] ?>
                </p>
                <p>
                    <label for="tel">電話番号</label><br>
                    <?php echo $_POST["tel"] ?>
                </p>
                <p>
                    <label for="email">メールアドレス</label><br>
                    <?php echo $_POST["email"] ?>
                </p>
                <p>
                    <label for="question">お問い合わせ内容をご記入ください</label><br>
                    <?php echo $_POST["question"] ?>
                </p>
                <div class="toTOP-link">
                    <a href="index.html">ホームへ戻る</a>
                </div>
            </form>
        </div>
    </div>
    <footer id="footer">
        <div class="footer-container">
            <h2>CONTACT</h2>
            <div class="footer-text">
                <a href="tel:03-0000-0000">
                    <p>TEL：03-0000-0000</p>
                </a>
                <p>お問い合わせは<a href="contact.php"><span>こちら</span></a></p>
            </div>
            <div class="sns">
                <a href="https://about.instagram.com/ja-jp" target="blank"><i class="fab fa-instagram icon-size"></i></a>
                <a href="https://twitter.com/TwitterJP" target="blank"><i class="fab fa-twitter icon-size"></i></a>
                <a href="https://www.facebook.com/" target="blank"><i class="fab fa-facebook-f icon-size"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>