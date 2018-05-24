<?php //インデクスリスト用 ?>
<?php get_header(); ?>

<!--投稿記事-->
<section>
    <?PHP if(have_posts()): ?>
    <ul>
        <?PHP while(have_posts()):the_post(); ?>
        <li>
            <!--投稿日-->
            <time><?php echo get_the_date();?></time>
            <!--サムネイル-->
            <?php if(has_post_thumbnail()):?>
            <p>
                <!--個別ページへのリンク部分 the_permalink() -->
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail('my-thumbnail');?>
                </a>
            </p>
            <?php endif;?>
            <!--タイトル-->
            <h1>
                <a href="<?php the_permalink();?>">
                    <!--記事タイトル the_title() -->
                    <?php the_title();?>
                </a>
            </h1>
            <p>
                <!-- カテゴリー the_category() -->
                <!-- the_category()関数は 初期設定では区切り文字が指定されていないため、第一引数にカンマと半角スペースを区切り文字として指定する-->
                <?php the_category(', ');?>
            </p>
            <!-- タグ名 the_tags() -->
            <!-- 初期設定で複数のタグがある場合でもカンマと半角スペースで区切って表示される -->
            <p>
                <?php the_tags();?>
            </p>
        </li>
        <?PHP endwhile; ?>
    </ul>
    <?PHP endif; ?>
</section>

<?php get_footer(); ?>
