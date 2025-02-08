<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>
     <!-- Début de l'en-tête -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary text-white">
      <div class="container-fluid">
      <a class="navbar-brand text-white" href="#"><?php bloginfo('name') ?></a>
        <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
          
            <?php wp_nav_menu(['theme_location' => 'header',
                'container' => false,
                'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
            ]) ?>
            <?= get_search_form( ); ?>
        </div>
      </div>
    </nav>
    
    

    