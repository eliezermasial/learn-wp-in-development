<?php get_header() ?>
    <main class="py-5">
        <?php while(have_posts()): the_post() ?>
        <h1> <?php the_title() ?> </h1>
        <p>
            <?php the_content() ?>
        </p>
        <a href="<?php echo get_post_type_archive_link('post') ?>">voir les actualites</a>
        <?php endwhile;?>
    </main>
<?php get_footer() ?>