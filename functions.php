<?php 

function init_template(){
    
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

add_action('after_setup_theme','init_template');

//Bootstrap
function assets(){
    wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css','','4.5.0','all');
//Google Fonts
    wp_register_style('montserrat','https://fonts.googleapis.com/css2?family=Montserrat:display=swap');
    wp_enqueue_style('estilos', get_stylesheet_uri(), array('bootstrap', 'montserrat'), '1.0','all');

    wp_register_style('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', '', '1.16.0', true);
    
    wp_enqueue_script('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery', 'popper'), '4.4.1', true);

}
add_action('wp_enqueue_scripts','assets');

