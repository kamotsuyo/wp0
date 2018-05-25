<?PHP
function load_scripts(){
    //スタイルシート読み込み
    wp_enqueue_style('main',get_stylesheet_uri());
    //スクリプト読み込み
    wp_enqueue_script('require',get_theme_file_uri().'/library/js/require.js');
    wp_enqueue_script('main',get_theme_file_uri().'/library/js/main.js');
}
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


//絵文字不要
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
//ブログ投稿機能不要
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
//WordPressのバージョン表示不要
remove_action('wp_head', 'wp_generator');
//Embed 'https://api.w.org/‘ 不要
remove_action('wp_head','rest_output_link_wp_head');
//プリフェッチ不要
function remove_dns_prefetch( $hints, $relation_type ) {
    if ( 'dns-prefetch' === $relation_type ) {
        return array_diff( wp_dependencies_unique_hosts(), $hints );
    }
    return $hints;
}
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );
