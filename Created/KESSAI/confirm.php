<?php
$company = isset($_POST["company"]) ? $_POST["company"] : "";
$name = isset($_POST["name"]) ? $_POST["name"] : "";
$division = isset($_POST["division"]) ? $_POST["division"] : "";
$tel = isset($_POST["tel"]) ? $_POST["tel"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";

if (isset($_POST["inquiry"]) && is_array($_POST["inquiry"])) {
    $inquiry = implode("、", $_POST["inquiry"]);
}

$question = isset($_POST["question"]) ? $_POST["question"] : "";
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
    <meta name="description" content="業界・規模・エリアを問わず、1,000社以上の企業様にご利用いただいているKESSAIは、どんな形式・内容の決済でも管理できる決裁管理システムです。">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <title>お問い合わせ</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" type="text/css" href="css/destyle.css">
    <link rel="stylesheet" type="text/css" href="css/common_sp.css">
    <link rel="stylesheet" type="text/css" href="css/common_pc.css">
    <link rel="stylesheet" type="text/css" href="css/application_sp.css">
    <link rel="stylesheet" type="text/css" href="css/application_pc.css">
    <script src="https://kit.fontawesome.com/f66cdf6395.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body class="confirm">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W76H9PT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="page-header">
        <div class="header-container">
            <div class="header-inner">
                <div>
                    <a href="index.html">
                        <h1>KESSAI</h1>
                    </a>
                </div>
                <nav>
                    <ul class="header-nav">
                        <li><a href="index.html">ホーム</a></li>
                        <li><a href="problem-list.html">できること</a></li>
                        <li><a href="feature.html">機能</a></li>
                        <li><a href="news.html">お知らせ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="openbtn">
                <div>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="openbtn_text">
                    <p>メニュー</p>
                </div>
            </div>
        </div>
    </header>
    <div class="page-demo-heading">
        <div class="demo-heading-container">
            <h2>確認画面</h2>
        </div>
    </div>
    <div class="page-demo-main">
        <div class="demo-main-container">
            <p class="demo-main-heading">KESSAIの特長紹介資料をご希望の方は、以下のフォームに必要事項をご入力ください。</p>
            <form id="form" class="form" action="complete.php" method="post">
                <input type="hidden" name="company" value="<?php echo htmlspecialchars($company, ENT_QUOTES, "UTF-8"); ?>">
                <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>">
                <input type="hidden" name="division" value="<?php echo htmlspecialchars($division, ENT_QUOTES, "UTF-8"); ?>">
                <input type="hidden" name="tel" value="<?php echo htmlspecialchars($tel, ENT_QUOTES, "UTF-8"); ?>">
                <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, "UTF-8"); ?>">
                <input type="hidden" name="inquiry" value="<?php echo htmlspecialchars($inquiry, ENT_QUOTES, "UTF-8"); ?>">
                <input type="hidden" name="question" value="<?php echo htmlspecialchars($question, ENT_QUOTES, "UTF-8"); ?>">
                <p>
                    <label for="company"><span class="required">必須</span>会社名</label><br>
                    <?php echo htmlspecialchars($company, ENT_QUOTES, "UTF-8"); ?>
                </p>
                <p>
                    <label for="name"><span class="required">必須</span>お名前</label><br>
                    <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>
                </p>
                <p>
                    <label for="division"><span class="required">必須</span>部署</label><br>
                    <?php echo htmlspecialchars($division, ENT_QUOTES, "UTF-8"); ?>
                </p>
                <p>
                    <label for="tel"><span class="required">必須</span>電話番号</label><br>
                    <?php echo htmlspecialchars($tel, ENT_QUOTES, "UTF-8"); ?>
                </p>
                <p>
                    <label for="email"><span class="required">必須</span>メールアドレス</label><br>
                    <?php echo htmlspecialchars($email, ENT_QUOTES, "UTF-8"); ?>
                </p>
                <div class="checkbox">
                    <label class="checkbox-inq" for="inquiry">お問い合わせの理由</label><br>
                    <?php echo htmlspecialchars($inquiry, ENT_QUOTES, "UTF-8"); ?>
                </div>
                <p>
                    <label for="question">その他にご質問や不明点などがございましたらご記入ください</label><br>
                    <?php echo htmlspecialchars($question, ENT_QUOTES, "UTF-8"); ?>
                </p>
                <input class="inq-send" type="submit" name="send" value="送信する">
                <input class="inq-back" type="button" value="戻る" onClick="history.back()">
            </form>
        </div>
    </div>
    <div class="page-bottom">
        <div class="bottom-container">
            <ul class="bottom-box">
                <div>
                    <li class="bottom-heading">ホーム</li>
                    <li class="bottom-heading">KESSAIにできること
                        <br>～こんなお悩みありませんか？～
                    </li>
                    <ul>
                        <li><a href="problems/problem01.html">申請書を作るのがめんどくさい・・・</a></li>
                        <li><a href="problems/problem02.html">一日に何度も承認するのに時間がかかりすぎる</a></li>
                        <li><a href="problems/problem03.html">一日に何度も承認するのに時間がかかりすぎる</a></li>
                        <li><a href="problems/problem04.html">申請した決裁がなかなか承認されない・・・</a></li>
                    </ul>
                </div>
                <div>
                    <li class="bottom-heading">KESSAIの機能</li>
                    <ul>
                        <li><a href="feature.html">シンプルなフォーム</a></li>
                        <li><a href="feature.html">フロー管理</a></li>
                        <li><a href="feature.html">追っかけ機能</a></li>
                        <li><a href="feature.html">アラート機能</a></li>
                    </ul>
                </div>
                <div>
                    <li class="bottom-heading"><a href="feature.html">お知らせ</a></li>
                </div>
            </ul>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <p class="address">KESSAI株式会社
                <br>東京都千代田区千代田
                <br>千代田ビル
            </p>
            <p class="copyright">Copyright © 2021 KESSAI inc.</p>
        </div>
    </footer>
    <!-- ハンバーガーメニュー-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!--自作のJS-->
    <script src="js/script.js"></script>
    <!-- end ハンバーガーメニュー-->
</body>

</html>