<?php

function monTheme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'en tete menu');
    add_image_size('post-thumbnail', 350, 215, true);
}

function montheme_enregister_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', ['popper'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', [], false, true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function monTheme_menu_class($classes, $item, $args): array
{
    if ('header' === $args->theme_location) {
        $classes[] = 'nav-item';
        return $classes;
    }
    return $classes;
}

function nav_menu_link_class(array $atts, $item, $args): array
{
    if ($args->theme_location === 'header') {
        $atts['class'] = 'nav-link';
        return $atts;
    }
    return $atts;
}

function montheme_title($title)
{
    return 'eliezer';
}

function monTheme_add_custo_box()
{
    add_meta_box('monTheme_custo_box', 'sponsor', 'monTheme_render_sponsor_box', 'post', 'side');
}

function monTheme_init()
{
    register_taxonomy('sport', 'post', [
        'labels' => [
            'name' => 'sports',
            'singular_name' => 'sport',
            'plural_name' => 'sports',
            'search_items' => 'rechercher des sports',
            'all_items' => 'tous les sports',
            'edit_item' => 'modifier le sport',
            'update_item' => 'mettre à jour le sport',
            'add_new_item' => 'ajouter un nouveau sport',
            'new_item_name' => 'nouveau nom de sport',
            'menu_name' => 'sports',
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
    ]);

    register_post_type('bien', [
        'label' => 'biens',
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-admin-home',
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
    ]);
}

add_action('init', 'monTheme_init');
add_action('after_setup_theme', 'monTheme_support');
add_action('wp_enqueue_scripts', 'montheme_enregister_assets');
add_filter('wp_title', 'montheme_title');
add_filter('nav_menu_css_class', 'monTheme_menu_class', 10, 3);
add_filter('nav_menu_link_attributes', 'nav_menu_link_class', 10, 3);

require_once('metaBoxes/sponsor.php');
SponsorMetaBox::register();
