<?php

add_theme_support('post-thumbnails', array('post'));          // Posts only
add_theme_support('post-thumbnails', array('page'));
add_theme_support('menus');


// remove default editer on pages
function reset_editor()
{
    global $_wp_post_type_features;

    $post_type = "page";
    $feature = "editor";
    if (!isset($_wp_post_type_features[$post_type])) {
    } elseif (isset($_wp_post_type_features[$post_type][$feature]))
        unset($_wp_post_type_features[$post_type][$feature]);
}

add_action("init", "reset_editor");

function reset_editor_sub_pages()
{
    global $_wp_post_type_features;

    $post_type = "post";
    $feature = "editor";
    if (!isset($_wp_post_type_features[$post_type])) {
    } elseif (isset($_wp_post_type_features[$post_type][$feature]))
        unset($_wp_post_type_features[$post_type][$feature]);
}

add_action("init", "reset_editor_sub_pages");

// Change Post Menue Name to anything else
add_action('init', 'cp_change_post_object');
// Change dashboard Posts to Sub Page	
function cp_change_post_object()
{
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
    $labels->name = 'Product';
    $labels->singular_name = 'Product';
    $labels->add_new = 'Add New Product';
    $labels->add_new_item = 'Add New Product';
    $labels->edit_item = 'Edit Product';
    $labels->new_item = 'New Product';
    $labels->view_item = 'View Product';
    $labels->search_items = 'Search Products';
    $labels->not_found = 'No Product Found';
    $labels->not_found_in_trash = 'No Product found in Trash';
    $labels->all_items = 'All Products';
    $labels->menu_name = 'Products';
    $labels->name_admin_bar = 'Products';
}


add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{

    // Check function exists.
    if (function_exists('acf_add_options_page')) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Header Settings'),
            'menu_title'  => __('Header'),
            'redirect'    => false,
        ));

        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Footer Settings'),
            'menu_title'  => __('Footer'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}

function pietergoosen_theme_setup()
{
    register_nav_menus(array(
        'header' => 'Header menu',
        'footer' => 'Footer menu'
    ));
}

add_action('after_setup_theme', 'pietergoosen_theme_setup');