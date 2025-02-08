<?php wp_head() ?>
    <div class="container">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>

            <?php if(get_post_meta(get_the_ID(), SponsorMetaBox::META_KEY, true)): ?>
                <div class="alert alert-info">
                    Cet article est sponsorisé
                </div>
            <?php endif; ?>
            <img src="<?php the_post_thumbnail_url() ?>" alt="">
            
            <h1> <?php the_title() ?> </h1>
            <div>
                <?php the_content() ?>
            </div>

        <?php endwhile; endif?>
    </div>
<?php wp_footer() ?>