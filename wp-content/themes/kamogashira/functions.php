<?PHP
//add_action関数に登録する独自関数を作成する
function load_scripts(){
    //スタイルシート読み込み
    //wp_enqueue_style()の第一引数はid属性にセットされる(-cssを末尾に追記されて)
    wp_enqueue_style('main',get_stylesheet_uri());
    //スクリプト読み込み
    //wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer )
    wp_enqueue_script('require-js',get_template_directory_uri().'/library/js/require.js');
    //第３引数$depsにrequire-jsを指定する(array形式)
    $deps = array('require-js');
    wp_enqueue_script('main-js',get_template_directory_uri().'/library/js/main.js',$deps);

}
//上記のload_scripts関数をadd_action関数でwp_enqueue_scriptsフックに登録する
add_action('wp_enqueue_scripts','load_scripts');

//テーマサポート
function kamogashira_setup(){
    //タイトルタグを自動出力。wp_head関数が必要。
    add_theme_support('title-tag');
    //アイキャッチ画像を有効化
    add_theme_support('post-thumbnails');
    //テーマ専用の画像サイズの追加
    add_image_size('my-thumbnail',80,50,true);
    //ヒーローイメージ（トップページや記事ページの先頭に大きく表示される画像のこと）画像サイズの追加
    add_image_size('my-hero',600,300,true);
}
add_action('after_setup_theme','kamogashira_setup');

//URLの正規表現
define('URL_REG', '/(https?|ftp)(:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+)/');
