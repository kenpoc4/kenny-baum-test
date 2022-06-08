<?php get_header(  ); ?>

<div class="container">
    <h1><?php the_title(  ); ?></h1>
    <?php
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();    ?>
                <p><b>Descripción:</b><br><?php the_field( 'descripcion' ); ?></p>
                <p><b>Ubicación:</b><br><?php the_field( 'ubicacion' ); ?></p>
                <p><b>Fecha:</b><br><?php the_field( 'fecha' ); ?></p>
                <br>
                <p><b>Lista de artistas</b><br></p>
                <?php echo get_the_term_list( $post->ID, 'artistas', '<ul class="lista"><li>', ' - ', '</li></ul>' ); ?>
            <?php   endwhile; 
        endif;
    ?>
    <div class="container-hook"></div>
</div>

<?php get_footer(  ); ?>