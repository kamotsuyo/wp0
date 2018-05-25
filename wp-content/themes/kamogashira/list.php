<!--記事一覧-->
<div id="list">
    <?PHP if(have_posts()):?>
    <?PHP $counter = 0; ?>
    <ul>
        <?PHP while(have_posts()):the_post(); ?>
        <?PHP $counter += 1; ?>
        <?PHP global $g_list_index;$g_list_index = $counter;//インデックスなので-1 ?>
        <?PHP get_template_part('entry-card'); ?>
        <li><time><?PHP the_date();?></time>
            <?PHP if(has_post_thumbnail()): ?>
            <p>
                <a href="<?PHP the_permalink();?>">
                    <?PHP the_post_thumbnail('my-thumbnail');?>
                </a>
            </p>
            <?PHP endif;?>
            <h1>
                <a href="<?PHP the_permalink();?>">
                    <?PHP echo $counter; the_title();?>
                </a>
            </h1>
            <p>
                <?PHP the_category();?>
            </p>
            <p>
                <?PHP the_tags()?>
            </p>
        </li>
        <?PHP endwhile;?>
    </ul>
    <?PHP endif;?>
</div>
