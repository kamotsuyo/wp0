<?PHP
/**
* スタイルシート・スクリプト読み込み
*
*/
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


/**
* wp_head()の余計な出力を削除する
*
*/
//絵文字不要
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

//EditURI を削除
remove_action('wp_head', 'rsd_link');
//wlwmanifest を削除
remove_action('wp_head', 'wlwmanifest_link');
//WordPressのバージョン表示不要
remove_action('wp_head', 'wp_generator');
//ヘッダーに以下のようなタグが挿入されるWP4.4からの機能を解除
//<link rel='https://api.w.org/' href='http:/xxxx/wordpress/wp-json/' />
remove_action('wp_head','rest_output_link_wp_head');
//プリフェッチ不要
function remove_dns_prefetch( $hints, $relation_type ) {
    if ( 'dns-prefetch' === $relation_type ) {
        return array_diff( wp_dependencies_unique_hosts(), $hints );
    }
    return $hints;
}
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );
