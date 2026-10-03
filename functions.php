<?php
function tkjftth_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array('primary'=>'Menu Utama'));
}
add_action('after_setup_theme','tkjftth_setup');

function tkjftth_assets(){
    wp_enqueue_style('tkjftth-style',get_stylesheet_uri(),array(), '1.0');
}
add_action('wp_enqueue_scripts','tkjftth_assets');

function tkjftth_widgets(){
    register_sidebar(array(
        'name'=>'Sidebar',
        'id'=>'sidebar-1',
        'before_widget'=>'<div class="widget">',
        'after_widget'=>'</div>',
        'before_title'=>'<h3>',
        'after_title'=>'</h3>'
    ));
}
add_action('widgets_init','tkjftth_widgets');
?>
