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
define( 'DB_NAME', 'wp-03' );

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
define( 'AUTH_KEY',         '(:PDsuE43xdEQVUb<f< F1>$-ZGV%4g*F%Bi8E)E}`a:hxm]HZH2eaEEd~4:fTdK' );
define( 'SECURE_AUTH_KEY',  ':Ml^uE{L`Aak$=im2n$8IPVrSY}JmZoVP:s}of|&?n2UlLe_XF9LUUMWl~SH]H{7' );
define( 'LOGGED_IN_KEY',    'T]<{;lm-`S=Nx`%Gz/AGB9>W1y7hXOj>%WUZZR)OY[?#OLR)JrG8q!nu<mN+AVBc' );
define( 'NONCE_KEY',        '_S%W7)UGyeMQc2r{_CCIwWC-)w!f8dEghsGkG,m40r7.ECekXY$nO`;SE~s^0}[y' );
define( 'AUTH_SALT',        'Wu3>SX+wTF?>;V6hb2/Y_D!F0yud|TI{)0Hv?sx&&]13.p9z+U;Wic=rGTf.U1+4' );
define( 'SECURE_AUTH_SALT', 'FrY/m6zcKUL.>9;35b)^tO#AlRVLELz2Ein;NYnW|ZG&?ivN7pHTPF@,rRU|<;s?' );
define( 'LOGGED_IN_SALT',   'dLGqt(bp%{?9 6!T6(_xY>Y%Kcrwn;5Sa+^/*!wy=l!lN<S)sOe8+z;rIJgZ}>U5' );
define( 'NONCE_SALT',       'M?h#%5^II/9{97Ruw:X@ei#p~BUL!{i)VHW<x?3CRhF33*fJkJ3H+1#,Y>-gX23@' );

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
