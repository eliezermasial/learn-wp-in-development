<?php get_header() ?>
<div class="container">
    <p>
        je suis en train de créer un site web avec PHP et je suis bloqué sur la pag
    </p>
    <h1>bonjour tout le monde : <?php wp_title(); ?> </h1>
    <?php if(have_posts()): ?>
    <div class="row">

        <?php while(have_posts()): the_post();?>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem ;">
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto']) ?>
                <div class="card-body">
                    <h5 class="card-title"> <?php the_title() ?> </h5>
                    <p class="card-text"> <?php the_content()?>  </p>
                    <a href="<?php the_permalink() ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <?php endwhile?> 
        <div class="col-sm-4">
            <?= the_posts_pagination( );?>
       </div>
    </div>
    
    <?php else: ?>
        <p>pas de post</p>
    <?php endif?>
</div>
<?php get_footer()  ?>