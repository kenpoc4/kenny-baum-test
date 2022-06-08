<?php

// Registrar Custom Post Type de eventos
function baumTest_eventos_post_type(  ) {

	$labels = array(
		'name'                  => _x( 'Eventos', 'baumTest' ),
		'singular_name'         => _x( 'Eventos','baumTest' ),
		'menu_name'             => __( 'Eventos', 'baumTest' ),
		'name_admin_bar'        => __( 'Eventos', 'baumTest' ),
		'archives'              => __( 'Archivo', 'baumTest' ),
		'attributes'            => __( 'Atributos', 'baumTest' ),
		'parent_item_colon'     => __( 'Evento Padre', 'baumTest' ),
		'all_items'             => __( 'Todos Los Eventos', 'baumTest' ),
		'add_new_item'          => __( 'Agregar Evento', 'baumTest' ),
		'add_new'               => __( 'Agregar Evento', 'baumTest' ),
		'new_item'              => __( 'Nuevo Evento', 'baumTest' ),
		'edit_item'             => __( 'Editar Evento', 'baumTest' ),
		'update_item'           => __( 'Actualizar Evento', 'baumTest' ),
		'view_item'             => __( 'Ver Evento', 'baumTest' ),
		'view_items'            => __( 'Ver Eventos', 'baumTest' ),
		'search_items'          => __( 'Buscar Evento', 'baumTest' ),
		'not_found'             => __( 'No Encontrado', 'baumTest' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'baumTest' ),
		'featured_image'        => __( 'Imagen Destacada', 'baumTest' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'baumTest' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'baumTest' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'baumTest' ),
		'insert_into_item'      => __( 'Insertar en Evento', 'baumTest' ),
		'uploaded_to_this_item' => __( 'Agregado en Evento', 'baumTest' ),
		'items_list'            => __( 'Lista de Eventos', 'baumTest' ),
		'items_list_navigation' => __( 'Navegación de Eventos', 'baumTest' ),
		'filter_items_list'     => __( 'Filtrar Eventos', 'baumTest' ),
	);
	$args = array(
		'label'                 => __( 'Eventos', 'baumTest' ),
		'description'           => __( 'Eventos para el Sitio Web', 'baumTest' ),
		'labels'                => $labels,
		'supports'              => array( 'title','author', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-tickets',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite'               => true,
		'show_in_rest'          => true,
		'rest_base'				=> 'eventos-api'
	);
	register_post_type( 'eventos', $args );

}
add_action( 'init', 'baumTest_eventos_post_type', 0 );

// Taxonomia para el post-type artistas
function baumTest_taxonomy_artistas() {

	$labels = array(
		'name'              => _x( 'Artistas', 'taxonomy general name', 'baumTest' ),
		'singular_name'     => _x( 'Artistas', 'taxonomy singular name', 'baumTest' ),
		'search_items'      => __( 'Buscar Artista', 'baumTest' ),
		'all_items'         => __( 'Todos los Artistas', 'baumTest' ),
		'parent_item'       => __( 'Artista Padre', 'baumTest' ),
		'parent_item_colon' => __( 'Artista:', 'baumTest' ),
		'edit_item'         => __( 'Editar Artista', 'baumTest' ),
		'update_item'       => __( 'Actualizar Artista', 'baumTest' ),
		'add_new_item'      => __( 'Agregar Artista', 'baumTest' ),
		'new_item_name'     => __( 'Nuevo Artistas ', 'baumTest' ),
		'menu_name'         => __( 'Artistas', 'baumTest' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'artistas' ),
		'show_in_rest'      => true,
		'rest_base'	  		=> 'artistas-api'
	);

	register_taxonomy( 'artistas', array( 'eventos' ), $args );
}
add_action( 'init', 'baumTest_taxonomy_artistas', 0 );