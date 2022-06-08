<?php get_header(  ); ?>

<div class="container">
    <h1>Listado de eventos</h1>
    <?php
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();    ?>
            <ul class="lista">
                <li>
                    <h2><a href="<?php the_permalink(  ); ?>"><?php the_title(  ); ?></a></h2>
                    <p><?php the_field( 'ubicacion' ); ?></p>
                    <p><?php the_field( 'fecha' ); ?></p>
                </li>
            </ul>
            <?php   endwhile; 
        endif;
    ?>
</div>

<?php get_footer(  ); ?>