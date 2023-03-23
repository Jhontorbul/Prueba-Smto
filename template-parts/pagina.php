<!-- Creamos el Loop que muestra el contenido en cada pagina como un Template part para no duplicar tanto codigo -->
<?php
    while (have_posts()) : the_post();

        // the_title('<h1 class="text-center">', '</h1>');
        // se valida Si existe la foto destacada de una Pagina muestrala
        if(has_post_thumbnail()){
        the_post_thumbnail('full', array('class' => 'imagen-destacada'));
        }
        // Se muestra el Contenido que se agrega en cada pagina en el editor
        the_content();
    endwhile;
