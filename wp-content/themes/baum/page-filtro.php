<?php get_header(  ); ?>

<div class="container">
    <h2>Filtrar por evento</h2>
    <select id="lista_eventos_filtro">
        <option value="">Seleccione un evento</option>
        <?php
            $args = array(
                'post_type'     => 'eventos',
                'post_per_page' => -1
            );
            $eventos = new WP_Query( $args );
            if ( $eventos->have_posts() ) : 
                while ( $eventos->have_posts() ) : $eventos->the_post();    ?>
                    <option value="<?php echo get_the_ID(); ?>">
                        <?php the_title(  ); ?>
                    </option>
                    <?php   endwhile; 
            endif;
        ?>
    </select>
    <h1 id="titulo_filtro">Todos nuestros artistas</h1>
    <ul id="lista_artistas_filtro">
        <?php
            $artistas = get_terms( 'artistas' );
            foreach( $artistas as $artista ) {  ?>
                <li><?php echo $artista->name ?></li>
            <?php   }
        ?>
    </ul>

</div>

<?php get_footer(  ); ?>