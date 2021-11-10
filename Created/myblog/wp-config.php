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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'wp-01' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'ktkr93' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q<gynER`y~)lgtX,ey|?ePHAa~!a|JEn`iBHwkilev(!yAYK|F/0KM)gWgg|S8U7' );
define( 'SECURE_AUTH_KEY',  '^J,vt2>QJyA=%/qhZw,ESPP6VZ6251Sn^MttV]-T6oZwd;p!0Vk5f-aEv-8e?+~N' );
define( 'LOGGED_IN_KEY',    'm3B(,w?y#J$S$Z&14#nm,bvdqURG!9]Ez)Uod`nv#N69EF0}d0@g$ eTe6N{lnlx' );
define( 'NONCE_KEY',        'ke53(7x-,>]h6yY)hu^.`,ovx=gt5 9w1%?sDgm5IoY4@8^io[q<?q`I;_6$sz_f' );
define( 'AUTH_SALT',        '.>i!EH|tPpa^H/-GxrLJg*>Z:RV?TVvu3$[z1yY3&;Pw,`V|SDlpBM/+7B+r3UW:' );
define( 'SECURE_AUTH_SALT', '${RRpYc[v<~eqG^R9ysISe9Pa=US9KHM^<edqzT<0q~w5:AL]z8V*6T?3Lw^rtj>' );
define( 'LOGGED_IN_SALT',   'z>wTh/qYRXKdSkqd,U2f:~DiNoNc[u os-FJO&)s&1r; s*?wM{#gg]aw,tWEcIH' );
define( 'NONCE_SALT',       '68i_Y|D}EmK3UA.l1-${HX^DEMGc@2y5;5z):Q:58_uC3Eaq7NNgrWWeG:<&{yjx' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
