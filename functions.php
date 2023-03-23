<?php 


function pruebasm_setup(){

    //Habilitar Imagenes destacadas
    add_theme_support('post-thumbnails');
    // Titulos seo que aparecen en la pestaña del navegador
    add_theme_support('title-tag');

}
add_action('after_setup_theme', 'pruebasm_setup');

// Registramos los Menu
function pruebasm_menus(){
    register_nav_menus( array(
        'menu-principal' => __('Menu Principal', 'pruebasm'),
        'redes-sociales' => __('Redes Sociales', 'pruebasm')
    ));
}

add_action('init', 'pruebasm_menus');


// Registramos los estilos, librerias y scripts que utilizamos en el sitio
function pruebasm_scripts_styles(){

    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1' );
    
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0' );

    wp_enqueue_style('swipercss', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), '9.1.1' );

    // Archivos JS
    wp_enqueue_script('swiperjs', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), '9.1.1');

}
add_action('wp_enqueue_scripts', 'pruebasm_scripts_styles');
