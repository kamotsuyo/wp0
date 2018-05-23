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
define('DB_NAME', 'db_wordpress_0');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'kam_admin');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'hoge1234');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'xoLpuZTsOY/`OCY+nTA=@Mv_)BDsZ?^jSDSB5[;5E%-5z]=+ZU+Xoob}3xV^49o.');
define('SECURE_AUTH_KEY',  'QZ+BOu]aT5qbSi?T/|)q#|R_?eBHb7,%`5nxs.Jp/=UCZCg|;|#-SUl gthH,)5r');
define('LOGGED_IN_KEY',    ',eYjNP:nfX0!<?32[^0hq*n@1k,Pf5Q/_UW86W*m3b[Ok?_k)]@zHf=o)u5@;rIw');
define('NONCE_KEY',        'vFjF37mz@g|cLO&UQWM1ElS];!w8uLS#^bdA-+-[%[>FI.GvmL@T|Shq(Zh`c}^T');
define('AUTH_SALT',        '=Vzmx,SP&P#z4%JOj>X>SBd{8+9aoM4OW.Z#Ft!3A`O>lDFD$dn1:E9H!w<c[<.O');
define('SECURE_AUTH_SALT', 'h$(e02.IPa( E=g,kr3^iB~0._urX; y 526&zTD4>`#y}SJA< ^c!3FA<?#8&7W');
define('LOGGED_IN_SALT',   '{gsY@,P;s>{<{vP?1w{i-G|Pk)8n%dhf$WlT^M|bqno@^ODh:3BimV.T@eTX3%z9');
define('NONCE_SALT',       'Yc`ZthmE`4wO;Nj+z_BeuPc|*_HRjaxPHhw*r/qJ).yf/Nxe9t, E#D /~ABGI[E');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

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
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
