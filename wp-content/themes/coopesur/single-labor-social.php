<?php get_header(); ?>

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
    <a href="/nuestra-labor-social/">Nuestra Labor Social</a>
  </li>
  <li>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </li>
</ul>

<main class="labor__social py-5">

  <section class="container-fluid px-3 px-sm-5 px-md-0 content-post" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
    
    <?php if (have_posts()): ?>

    <article id="post-<?php the_ID(); ?>" class="row article__post">

    <!-- :: CONTENIDO POST LABOR SOCIAL :: -->
      <?php while (have_posts()) : the_post(); ?>
      <div class="col-12 col-md-4 d-flex flex-column justify-content-center text-justify details">
        <div class="ml-5 mt-5 post-content">
          <!-- :: TITULO :: -->
          <h1 class="my-5 py-4 pl-2 post-title text-left"><?php the_title(); ?></h1>

          <!-- :: DETALLES DEL POST :: -->
          <div class="p-3 p-md-3 p-lg-5 post-text">
            <?php the_content(); ?>
          </div>
        </div>
      </div>

      <!-- :: IMAGEN DESTACADA :: -->
      <div class="col-12 col-md-8 d-flex flex-column align-items-sm-center align-items-md-end align-items-lg-center">
        <?php if ( has_post_thumbnail()) : ?>
        <div class="content__img">
          <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
        </div>
        <?php endif; ?>
        <?php if(get_field('texto_adicional')): ?>
        <div class="col-12 col-md-10 text-center my-5">
          <div class="msg__adicional">
            <?php the_field('texto_adicional'); ?>
            <span class="texto-cursivo"><?php the_field('texto_cursivo'); ?></span>
          </div>
        </div>
        <?php endif;?>
      </div>
    <?php endwhile; ?>

    </article>

    <?php else: ?>
    <div>
      <h2 class="display-4"><?php _e( 'Lo sentimos no hay información para mostrar', 'html5blank' ); ?></h2>
    </div>
	  <?php endif; ?>
  </section>

  <?php if( have_rows('galeria') ): ?>
  <section class="container-fluid section-modal">
    <div class="modal fade" id="modalGallery" tabindex="-1" role="dialog" aria-labelledby="modalGalleryTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">x</span>
            </button>
            <div class="row slider-for">
            <?php while( have_rows('galeria') ): the_row(); $image = get_sub_field('imagen'); ?>
              <div>
                <figure class="col-12">
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                </figure>
              </div>
            <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container py-5 galeria-laborSocial" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
    <div class="test" style="display: none !important;">
      <div class="row slider-for">
      <?php while( have_rows('galeria') ): the_row(); $image = get_sub_field('imagen'); ?>
        <figure class="col-12">
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
        </figure>
      <?php endwhile; ?>
      </div>
    </div>

    <div class="test2">
      <div class="row slider-nav">
      <?php while( have_rows('galeria') ): the_row(); $image = get_sub_field('imagen'); ?>
        <div class="col-4 slide-item" style="height: 200px; background: url(<?php echo $image['url']; ?>)no-repeat center / cover;" data-toggle="modal" data-target="#modalGallery">

        </div>
        <!-- <figure class="col-4">
          <img src="" alt="<?php //echo $image['alt'] ?>" />
        </figure> -->
      <?php endwhile; ?>
        
      </div>
      <nav class="row justify-content-center my-4">
        <a href="#" class="mx-3 prev">&#10094;</a>
        <a href="#" class="mx-3 next">&#10095;</a>
      </nav>
    </div>

  </section>
  <?php endif; ?>

  <section class="container-fluid title-carousel d-flex justify-content-end align-items-center" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
    <div class="row justify-content-end">
      <h2>Otros proyectos sociales</h2>
    </div>
  </section>

  <section class="container py-5" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">

    <!-- :: POSTS LABOR SOCIAL :: -->
    <?php 
      $args = array( 'post_type' => 'labor-social', 'orderby' => 'rand'); $customPost = new WP_Query($args);
      if ($customPost->have_posts()): //=> :: VERIFICA SI EXISTEN POST LABOR SOCIAL ::
    ?> 
    <!-- :: SI EXISTEN POST LABOR SOCIAL, SE CREA ESTE CONTENEDOR :: -->
    <div class="row carousel-post-laborSocial">
      
      <!-- :: SE CONSTRUYE CADA UNO DE LOS POSTS :: -->
      <?php  while ($customPost->have_posts()) : $customPost->the_post(); $content = get_the_content();  ?>
      <article id="post-<?php the_ID(); ?>" class="col-sm-6 col-md-4 my-4">
        <div class="card-post">
          <?php if ( has_post_thumbnail()) : ?>
          <div style="height: 200px; background: url(<?php the_post_thumbnail_url('full'); ?>)no-repeat center / cover;"></div>
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

    <!-- :: DE NO EXISTIR POST LABOR SOCIAL, MUESTRA MENSAJE DE AVISO POR DEFECTO :: -->
    <?php else: ?>
    <div class="false-posts">
      <h2 class="display-4"><?php _e( 'Lo sentimos no hay labores sociales para mostrar', 'html5blank' ); ?></h2>
    </div>

    <?php endif; ?>

  </section>

</main>

<?php get_footer(); ?>
<?php //if ( has_post_thumbnail()) : ?>
<?php //the_post_thumbnail('full', array('class' => 'card-img-top img-fluid', 'alt' => get_the_title())); ?>
<?php //endif; ?>