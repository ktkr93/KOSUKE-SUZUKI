<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'LAA1354191-79ihj5');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA1354191');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'fQnhE0uO');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql146.phy.lolipop.lan');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'iC|:"6IIGkcapjbxAcls*aHwPOTC:j~72NrO_*!UpbQWFx:.,YSa9A[WXB@7F`(N');
define('SECURE_AUTH_KEY', 'qU$9i.Q|vie"fuH_RJOCQ"MSon2E`).~#9v#mqUNsD1;@Y8zN&}^iK-c5@<J44DX');
define('LOGGED_IN_KEY', '1?C/$K-BZn7PT,3kK>Nrn%OGrNN1uCd*FXEDG_#E7LP2Q%bsEQVUDBi9S6UBaUiM');
define('NONCE_KEY', '<o_ckbeX}`((@@<}%QC0:DM&PB*F4fVohx!`[B:jg&K$Q"0vwi^=xK8(PWu[qC+3');
define('AUTH_SALT', '>Kc^:?"^X4Y;wxRB_p1ean"$I^6&l1y&@s$V!wa)x~@7iE2+~%ElwszGPEZGL(<L');
define('SECURE_AUTH_SALT', 'o-mO^{m0Xgp]6x-n~>2Hn0:TgpC4$AZ-TEq}K(x]Hr<1<^l)hco6@^y/M_;&93s-');
define('LOGGED_IN_SALT', 'dpD]#7xhV3xKGNz[Neh|,hpJ(o9zh^qvC|NS7uLs`/Unb)8FdS+7-UjEVG|%JBp[');
define('NONCE_SALT', 'bj"3YnstAQ8Up]sHnG$*L^7#!BDZ=XB%wokS`53wSm?xDvXQ^wmv"]q0d%}FnL0M');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp20211110215444_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
