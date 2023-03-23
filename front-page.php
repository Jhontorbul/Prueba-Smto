<?php get_header(); ?>

<main class="contenedor seccion">
    <!-- Slider main container -->
    <div class="swiper-1">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="content-pais">
                    <p class="pais"><b>Lorem ipsum</b>, dolor sit amet consectetur.</p>
                </div>
                <div class="contenido-slider">
                    <p class="fecha">04 may 2023</p>
                    <p class="categoria">Accion, para mayores de edad</p>
                    <h1 class="titulo-pelicula">John Wick 3</h1>
                    <p class="descripcion">Lorem ipsum dolor temporibus dolorum labore beatae necessitatibus obcaecati! Corporis laudantium eveniet consequuntur ut explicabo natus minus, ea, praesentium, nostrum neque vitae dicta sequi odio.</p>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="content-pais">
                    <p class="pais"><b>Lorem ipsum</b>, dolor sit amet consectetur.</p>
                </div>
                <div class="contenido-slider">
                    <p class="fecha">04 may 2023</p>
                    <p class="categoria">Accion, para mayores de edad</p>
                    <h1 class="titulo-pelicula">John Wick 3</h1>
                    <p class="descripcion">Lorem ipsum dolor temporibus dolorum labore beatae necessitatibus obcaecati! Corporis laudantium eveniet consequuntur ut explicabo natus minus, ea, praesentium, nostrum neque vitae dicta sequi odio.</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="content-pais">
                    <p class="pais"><b>Lorem ipsum</b>, dolor sit amet consectetur.</p>
                </div>
                <div class="contenido-slider">
                    <p class="fecha">04 may 2023</p>
                    <p class="categoria">Accion, para mayores de edad</p>
                    <h1 class="titulo-pelicula">John Wick 3</h1>
                    <p class="descripcion">Lorem ipsum dolor temporibus dolorum labore beatae necessitatibus obcaecati! Corporis laudantium eveniet consequuntur ut explicabo natus minus, ea, praesentium, nostrum neque vitae dicta sequi odio.</p>
                </div>
            </div>

        </div>

    </div>
</main>


<div class="contenedor seccion">
<div class="filtro">
<select name="pets" id="pet-select">
    <option value="">Movie</option>
    <option value="dog">Opcion1</option>
    <option value="cat">Opcion2</option>
    <option value="hamster">Opcion3</option>
    <option value="parrot">Opcion4</option>
</select>
<select name="pets" id="pet-select">
    <option value="">Date</option>
    <option value="dog">Date1</option>
    <option value="cat">12</option>
    <option value="hamster">23</option>
    <option value="parrot">43</option>
    <option value="spider">55</option>
</select>
<select name="pets" id="pet-select">
    <option value="">Session</option>
    <option value="dog">opcion1</option>
</select>
<button class="boton-filttro">Buy</button>
</div>
</div>

<div class="contenedor seccion">
    <h2>Soon</h2>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
        <ul class="peliculas-grid">
        <!-- Hacemos la consulta a la BD para traer el Post type de Peliculas y mostrarlas -->
        <?php
        $args = array(
            'post_type' => 'pruebasm_peliculas',
            'posts_per_page' => 5
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
        </div>
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    </div>

 </div>


 <!-- Seccion 2 -->
 <div class="contenedor seccion">
<div class="filtro">
<select name="pets" id="pet-select">
    <option value="">Movie</option>
    <option value="dog">Opcion1</option>
    <option value="cat">Opcion2</option>
    <option value="hamster">Opcion3</option>
    <option value="parrot">Opcion4</option>
</select>
<select name="pets" id="pet-select">
    <option value="">Date</option>
    <option value="dog">Date1</option>
    <option value="cat">12</option>
    <option value="hamster">23</option>
    <option value="parrot">43</option>
    <option value="spider">55</option>
</select>
<select name="pets" id="pet-select">
    <option value="">Session</option>
    <option value="dog">opcion1</option>
</select>
<button class="boton-filttro">Buy</button>
</div>
</div>


<div class="contenedor seccion">
    <h2>Poster</h2>
        <ul class="peliculas-grid">
        <!-- Hacemos la consulta a la BD para traer el Post type de Peliculas y mostrarlas -->
        <?php
        $args = array(
            'post_type' => 'pruebasm_peliculas',
            'posts_per_page' => 10
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
        </div>
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    </div>

 </div>

<script>
   const swiper = new Swiper('.swiper-1', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  }

});
    const swiper2 = new Swiper(".mySwiper", {
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 20,
                spaceBetween: 50,
            },
        },
    });
</script>

<?php
get_footer();
?>