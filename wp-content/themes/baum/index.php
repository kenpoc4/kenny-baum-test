<?php get_header(  ); ?>

<div class="container">
    <h1>Prueba técnica para Baum</h1>
    <ul class="lista">
        <li><a href="<?php echo esc_url( home_url( '/eventos' ) ); ?>">Archive para eventos</a></li>
        <li><a href="<?php echo esc_url( home_url( '/filtro' ) ); ?>">Filtro según artistas</a></li>
    </ul>
</div>

<?php get_footer(  ); ?>