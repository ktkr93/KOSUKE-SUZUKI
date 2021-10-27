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
    <div class="contact-heading">
        <div class="contact-heading-container">
            <h2>CONTACT</h2>
        </div>
    </div>
    <div class="contact-main">
        <div class="contact-main-container">
            <p class="contact-main-heading">以下のフォームに必要事項をご入力ください。</p>
            <form id="form" class="form" action="confirm.php" method="post">
                <p>
                    <label for="name"><span class="required">必須</span>お名前</label><br>
                    <input type="text" name="name" id="name" placeholder="Anne Jacqueline Hathaway" required>
                </p>
                <p>
                    <label for="tel"><span class="required">必須</span>電話番号</label><br>
                    <input type="tel" name="tel" id="tel" placeholder="08012345678" required>
                </p>
                <p>
                    <label for="email"><span class="required">必須</span>メールアドレス</label><br>
                    <input type="email" name="email" id="email" placeholder="mail@fashion.com" required>
                </p>
                <p>
                    <label for="question"><span class="required">必須</span>お問い合わせ内容をご記入ください</label>
                    <textarea name="question" id="question" required></textarea>
                </p>
                <p>
                    <input type="checkbox" id="inquiry01" value="プライバシーポリシーに同意する" required><a href="privacy.html" target="blank">プライバシーポリシー<i class="fas fa-external-link-alt"></i></a>に同意する
                </p>
                <input class="inq-send" type="submit" name="send" value="確認画面へ">
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
                <a href="contact.php">
                    <p>お問い合わせはこちら</p>
                </a>
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