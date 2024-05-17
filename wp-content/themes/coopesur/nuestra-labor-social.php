<?php

/*
  Template Name: Nuestra Labor Social
*/

get_header();
$title = explode(' ', get_the_title());
?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/labor-social.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/portada-y-breadcrumbs.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/header-y-portada.js"></script>

<div class="portada-container pagina-<?php the_ID(); ?>">
  <h1 class="portada-titulo"><?php the_title(); ?></h1>
</div>
<ul class="breadcrumbs-container d-flex align-items-center">
  <li>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a>
  </li>
  <li>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </li>
</ul>

<main role="main" class="labor__social py-5">

  <section class="container">
   
    <!-- :: TITULO DE LA PAGINA :: -->
    <div>
      <h1 class="montserrat regular page-title">
        <?php echo $title[0]; ?>
        <span><?php echo $title[1] . ' ' . $title[2] ?></span>
      </h1>
    </div>

    <!-- :: POSTS LABOR SOCIAL :: -->
    <?php 
      $args = array( 'post_type' => 'labor-social', 'posts_per_page' => 6 ); $customPost = new WP_Query($args);
      if ($customPost->have_posts()): //=> :: VERIFICA SI EXISTEN POST LABOR SOCIAL ::
    ?> 
    <!-- :: SI EXISTEN POST LABOR SOCIAL, SE CREA ESTE CONTENEDOR :: -->
    <div class="row custom-posts-laborSocial">
      
      <!-- :: SE CONSTRUYE CADA UNO DE LOS POSTS :: -->
      <?php  while ($customPost->have_posts()) : $customPost->the_post(); $content = get_the_content(); ?>
      <article id="post-<?php the_ID(); ?>" class="col-sm-6 col-md-4 my-4" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
        <div class="card-post">
          <?php if ( has_post_thumbnail()) : ?>
          <div style="height: 250px; background: url(<?php the_post_thumbnail_url('full'); ?>)no-repeat center / cover;"></div>
          <?php endif; ?>
          <div class="card-body">
            <a href="<?php the_permalink(); ?>"><h2 class="card-title color-dark montserrat regular"><?php the_title(); ?></h2></a>
            <p class="card-text color-dark montserrat light"><?php echo wp_trim_words( $content , '20' );  ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-post">Leer más</a>
          </div>
        </div>
      </article>
      <?php endwhile; ?>
    </div>

    <!-- :: NOTIFICACIONES, LOADER, BTN VER MÁS :: -->
    <div class="bnt-and-notifications text-center">
      <button class="load-more btn btn-post">Ver más</button>
    </div>

    <!-- :: DE NO EXISTIR POST LABOR SOCIAL, MUESTRA MENSAJE DE AVISO POR DEFECTO :: -->
    <?php else: ?>
    <div class="false-posts">
      <h2 class="display-4"><?php _e( 'Lo sentimos, no hay labores sociales para mostrar', 'html5blank' ); ?></h2>
    </div>

    <?php endif; ?>

  </section>

  <!-- section -->
  <section>

</main>


<?php get_footer(); ?>