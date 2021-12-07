<?php session_start() ?>

<?php
//DB名などを変数へ格納
$host = 'mysql146.phy.lolipop.lan';
$username = 'LAA1354191';
$passwd = 'fQnhE0uO';
$dbname = 'LAA1354191-79ihj5';

//SQLへの接続を変数へ格納
$conn = mysqli_connect($host, $username, $passwd, $dbname);

//値を変数へ格納
$username = $_REQUEST['username'];
$catname = $_REQUEST['catname'];
$email = $_REQUEST['email'];
$question = $_REQUEST['question'];

//DBへ値を格納する内容を変数へ格納
$sql = "INSERT INTO withCAT_users VALUES ('$username','$catname','$email','$question')";

mysqli_query($conn, $sql);
mysqli_close($conn);
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
    <meta name="description" content="with CATは、ご家族であるねこ様の体重・おしっこのデータ・ご不在時の記録写真など、毎日の体調を記録・管理する、ねこのトータルヘルスチェックサービスです。">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <title>会員登録が完了しました</title>
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

<body class="complete">
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
            <?php
            // POSTされたトークンを取得
            $token = isset($_POST["token"]) ? $_POST["token"] : "";
            // セッション変数のトークンを取得
            $session_token = isset($_SESSION["token"]) ? $_SESSION["token"] : "";
            // セッション変数のトークンを削除
            unset($_SESSION["token"]);
            ?>
            <?php if ($token != "" && $token == $session_token) : ?>
                <?php
                //自動返信メールの設定
                mb_language("japanese");
                mb_internal_encoding("UTF-8");
                $to = $_POST["email"];
                $subject = "お問い合わせいただきありがとうございます。";
                $header = "From: info@withcat.com";
                $header .= "\n";
                $header .= "Bcc: ktkr93@gmail.com";
                $message = "お問い合わせいただきありがとうございます。" . "\n" .
                    "以下の通りにお問い合わせ内容を受け付けました。" . "\n" . "\n" .
                    "飼い主様のお名前｜" . $_POST["username"] . "\n" .
                    "ねこ様のお名前｜" . $_POST["catname"] . "\n" .
                    "メールアドレス｜" . $_POST["email"] . "\n" .
                    "その他にご質問や不明点などがございましたらご記入ください｜" . $_POST["question"];
                mb_send_mail($to, $subject, $message, $header);
                ?>
                <p class="regi-main-heading">
                    <?php echo $_POST["username"] ?>様、会員登録いただきありがとうございます。
                    <br>以下の登録情報を、メールにて確認させていただきました。
                </p>
                <form id="form" class="form" action="#">
                    <p>
                        <label for="username">飼い主様のお名前</label><br>
                        <?php echo $_POST["username"] ?>
                    </p>
                    <p>
                        <label for="catname">ねこ様のお名前</label><br>
                        <?php echo $_POST["catname"] ?>
                    </p>
                    <p>
                        <label for="email">メールアドレス</label><br>
                        <?php echo $_POST["email"] ?>
                    </p>
                    <p>
                        <label for="question">その他にご質問や不明点などがございましたらご記入ください</label><br>
                        <?php echo $_POST["question"] ?>
                    </p>
                    <div class="detail-link">
                        <a href="index.html">ホームへ戻る</a>
                    </div>
                </form>
            <?php else : ?>
                <p>会員登録に失敗しました。
                    <br>会員登録ページへお戻りいただき、最初からご登録をお願いいたします。
                </p>
                <div class="detail-link">
                    <a href="registration.php">会員登録ページへ戻る</a>
                </div>
            <?php endif ?>
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