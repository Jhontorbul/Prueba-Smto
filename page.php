<?php get_header(); ?>

<main class="contenedor seccion">
    <!-- Llamamos la pagina con la funcion get template que tiene el Loop del contenido para cada pagina -->
    <?php
    get_template_part('template-parts/pagina');
    ?>
</main>
<?php 
    get_footer();
?>