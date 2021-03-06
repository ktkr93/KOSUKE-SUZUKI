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
    <meta name="description" content="with CATは、ご家族であるねこ様の体重・おしっこのデータ・ご不在時の記録写真など、毎日の体調を記録・管理する、ねこのトータルヘルスチェックサービスです。">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <title>with CAT</title>
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

<body class="registration">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W76H9PT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
        <div class="header-container">
            <div class="flex">
                <a href="index.html">
                    <h1>with CAT</h1>
                </a>
            </div>
            <div class="openbtn">
                <span></span><span></span><span></span>
            </div>
            <nav class="menu">
                <ul>
                    <li>
                        <a href="ability.html">with CATでできること</a>
                    </li>
                    <li>
                        <a href="sick.html">ねこの病気</a>
                    </li>
                    <li>
                        <a href="news.html">ニュース</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="page-regi-heading">
        <div class="regi-heading-container">
            <h2>会員登録</h2>
        </div>
    </div>
    <div class="page-regi-main">
        <div class="regi-main-container">
            <p class="regi-main-heading">以下のフォームに必要事項をご入力ください。</p>
            <form id="form" class="form" action="confirm.php" method="post">
                <p>
                    <label for="username"><span class="required">必須</span>飼い主様のお名前</label><br>
                    <input type="text" name="username" id="username" placeholder="にゃんこ 太郎" required>
                </p>
                <p>
                    <label for="catname"><span class="required">必須</span>ねこ様のお名前</label><br>
                    <input type="text" name="catname" id="catname" placeholder="おもち" required>
                </p>
                <p>
                    <label for="email"><span class="required">必須</span>メールアドレス</label><br>
                    <input type="email" name="email" id="email" placeholder="omochi@nya-n.com" required>
                </p>
                <p>
                    <label for="question">その他にご質問や不明点などがございましたらご記入ください</label>
                    <textarea name="question" id="question"></textarea>
                </p>
                <p>
                    <input type="checkbox" id="inquiry01" value="プライバシーポリシーに同意する" required><a href="privacy.html" target="blank">プライバシーポリシー<i class="fas fa-external-link-alt"></i></a>に同意する
                </p>
                <input class="inq-send" type="submit" name="send" value="確認画面へ">
            </form>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <ul class="footer-link">
                <li>
                    <a href="ability.html">with CATでできること</a>
                </li>
                <li>
                    <a href="sick.html">ねこの病気</a>
                </li>
                <li>
                    <a href="news.html">ニュース</a>
                </li>
            </ul>
            <div class="sns">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/" target="blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/TwitterJP" target="blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://about.instagram.com/ja-jp" target="blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="footer-tc">
                <li>
                    <a href="">利用規約</a>
                </li>
                <li>
                    <a href="">プライバシーポリシー</a>
                </li>
            </ul>
        </div>
    </footer>
    <div class="bottom">
        <div class="bottom-container">
            <p>© with CAT all rights Reserved.</p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>