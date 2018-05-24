<!-- パスワードを必要とする投稿ではコメントテンプレートを表示しない-->
<?PHP if(post_password_required()){
    return;
} ?>
<?PHP if(have_comments()): ?>
<div>
    <h2>コメントとトラックバック</h2>
    <ul>
        <?PHP wp_list_comments(); ?>
    </ul>
</div>
<?PHP endif; ?>
<?PHP if(comments_open()): ?>
<div class="box-generic">
    <div class="box-content" "box-comment-input">
        <?PHP comment_form(); ?>
    </div>

</div>
<?PHP 
$data = current_user_can('edit_theme_options');
error_reporting(E_ALL);ini_set('log_errors',true);trigger_error($data,E_USER_NOTICE); ?>




<?PHP endif;?>
