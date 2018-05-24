<?PHP







//テーマサポート
function kamogashira_setup(){
    //タイトルタグを自動出力。wp_head関数が必要。
    add_theme_support('title-tag');
    //アイキャッチ画像を有効化
    add_theme_support('post-thumbnails');
    //テーマ専用の画像サイズの追加
    add_image_size('my-thumbnail',80,50,true);
    //ヒーローイメージ（トップページや記事ページの先頭に大きく表示される画像のこと）画像サイズの追加
    add_image_size('my-hero',1200,630,true);
}


add_action('after_setup_theme','kamogashira_setup');
