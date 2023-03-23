<!-- Creamos un Template para la pagina de peliculas -->
<?php
/* 
* Template Name: Lista de Peliculas
*/
get_header();
?>

<main class="contenedor seccion">
    <?php
    get_template_part('template-parts/pagina');
    ?>
    <ul class="peliculas-grid">
        <!-- Hacemos la consulta a la BD para traer el Post type de Peliculas y mostrarlas -->
        <?php
        $args = array(
            'post_type' => 'pruebasm_peliculas'
        );

        $peliculas = new WP_Query($args);
        // Iteramos la consulta
        while ($peliculas->have_posts()) {
            $peliculas->the_post();
        ?>
            <!-- se muestra el contenido -->
            <li class="card">
                <?php the_post_thumbnail(); ?>
                <div class="contenido">
                    <div class="info-pelicula">
                        <span class="categoria-peliculas"><?php the_category(); ?></span>
                        <?php if (get_field('edades_peliculas')) : ?>
                            <p class="edad-peliculas">+<?php the_field('edades_peliculas'); ?></p>
                        <?php endif; ?>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                </div>
            </li>
        <?php }
        //Reiniciamos la consulta
        wp_reset_postdata();
        ?>
    </ul>

</main>
<?php
get_footer();
?>