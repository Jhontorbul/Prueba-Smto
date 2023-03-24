<?php
/*
    Plugin Name: Peliculas - Post Types
    Plugin URI: 
    Description: Añade Post Types al sitio Prueba SM
    Version: 1.0.0
    Author: Jhon torres bula
    Author URI: 
    Text Domain: pruebasm
*/

if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function pruebasm_peliculas_post_type() {

	$labels = array(
		'name'                  => _x( 'Peliculas', 'Post Type General Name', 'pruebasm' ),
		'singular_name'         => _x( 'Pelicula', 'Post Type Singular Name', 'pruebasm' ),
		'menu_name'             => __( 'Peliculas', 'pruebasm' ),
		'name_admin_bar'        => __( 'Pelicula', 'pruebasm' ),
		'archives'              => __( 'Archivo', 'pruebasm' ),
		'attributes'            => __( 'Atributos', 'pruebasm' ),
		'parent_item_colon'     => __( 'Pelicula Padre', 'pruebasm' ),
		'all_items'             => __( 'Todas Las Peliculas', 'pruebasm' ),
		'add_new_item'          => __( 'Agregar Pelicula', 'pruebasm' ),
		'add_new'               => __( 'Agregar Pelicula', 'pruebasm' ),
		'new_item'              => __( 'Nueva Pelicula', 'pruebasm' ),
		'edit_item'             => __( 'Editar Pelicula', 'pruebasm' ),
		'update_item'           => __( 'Actualizar Pelicula', 'pruebasm' ),
		'view_item'             => __( 'Ver Pelicula', 'pruebasm' ),
		'view_items'            => __( 'Ver Peliculas', 'pruebasm' ),
		'search_items'          => __( 'Buscar Pelicula', 'pruebasm' ),
		'not_found'             => __( 'No Encontrado', 'pruebasm' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'pruebasm' ),
		'featured_image'        => __( 'Imagen Destacada', 'pruebasm' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'pruebasm' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'pruebasm' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'pruebasm' ),
		'insert_into_item'      => __( 'Insertar en Pelicula', 'pruebasm' ),
		'uploaded_to_this_item' => __( 'Agregado en Pelicula', 'pruebasm' ),
		'items_list'            => __( 'Lista de Peliculas', 'pruebasm' ),
		'items_list_navigation' => __( 'Navegación de Peliculas', 'pruebasm' ),
		'filter_items_list'     => __( 'Filtrar Peliculas', 'pruebasm' ),
	);
	$args = array(
		'label'                 => __( 'Pelicula', 'pruebasm' ),
		'description'           => __( 'Peliculas para el Sitio Web', 'pruebasm' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-format-video',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		 'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'pruebasm_peliculas', $args );

}
add_action( 'init', 'pruebasm_peliculas_post_type', 0 );