<?php

function eventosAPI(  ) {
    register_rest_route(
        'baum',
        '/eventos-api/(?P<evento_id>\d+)',
        array(
            'methods'   => 'GET',
            'callback'  => 'pedidoEventos'
        )
    );
}
add_action( 'rest_api_init', 'eventosAPI' );

function pedidoEventos( $data ) {
    $args = array(
        'post_type'     => 'eventos',
        'page_id'       => $data[ 'evento_id' ],
    );

    $eventos = new WP_Query( $args );
    if ( $eventos->have_posts() ) : 
        $return = array(  );
        while ( $eventos->have_posts() ) : $eventos->the_post();
            $artistar_crudo = get_the_terms( get_the_ID(), 'artistas' );
            $artistas_array = [];
            foreach( $artistar_crudo as $artista ) {
                array_push( $artistas_array, $artista->name );
            }
        endwhile; 
        return $artistas_array;
    endif;
}