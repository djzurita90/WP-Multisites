<?php 
/* Template Name: Blog */
get_header();

?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/blog.css">

<script src="<?php echo get_template_directory_uri(); ?>/js/header-y-portada.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/blog.js"></script>


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

<main role="main" class="main-interna">

  <div class="container-fluid px-0 px-lg-5">
    <div class="row rowContainer px-4 px-sm-5 px-md-5 px-lg-0">

      <!-- section -->
      <section class="col-12 col-md-8 px-4 pl-md-5 pr-md-3 px-lg-5 pb-5" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200"  data-aos-easing="ease-in-sine">

        <div class="wrapp-post">

          <?php 
            $args = array( 'post_type' => 'post', 'posts_per_page' => 3); $posts = new WP_Query($args);
            if ($posts->have_posts()): while ($posts->have_posts()) : $posts->the_post(); 
            $content = get_the_content(); 
            $DiaNro = get_the_date('d');
            $Mes = get_the_date('F');
          ?>
          <article class="row article-blogPost">
            <div class="col-12 col-md-4 p-0 d-flex" style="background: url(<?php the_post_thumbnail_url('full'); ?>)no-repeat center / cover;">
              <div class="date__figure d-flex align-items-center justify-content-center">
                <p><?php echo $DiaNro; ?> <span><?php echo $Mes; ?></span></p>
              </div>
            </div>
            <div class="text-articulo col-12 col-md-8 p-4">
              <h2 class="color-dark montserrat regular mt-3"><?php the_title(); ?></h2>
              <p class="color-dark montserrat light"><?php echo wp_trim_words( $content , '20' );  ?></p>
              <a class="montserrat light btn-frambuesa" href="<?php the_permalink(); ?>">Leer más</a>
            </div>
          </article>
          <?php endwhile; else: ?>
          <?php endif; ?>

        </div>

        <div class="bnt-and-notifications text-center mb-5">
          <button class="montserrat light btn-frambuesa load-morePost">Ver más</button>
        </div>

      </section>
      <!-- section -->

      <!-- /sidebar -->
      <?php get_sidebar(); ?>
      <!-- /sidebar -->

    </div>
  </div>
</main>

<?php /*
<?php 
  $args = array( 'post_type' => 'post', 'posts_per_page' => 3 ); $posts = new WP_Query($args);
  if ($posts->have_posts()): while ($posts->have_posts()) : $posts->the_post(); 
?>
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
		<!-- /post details -->

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

		<?php edit_post_link(); ?>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
*/?>
<?php get_footer(); ?>