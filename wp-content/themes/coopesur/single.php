<?php get_header(); ?>

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
			<a href="/blog/">Blog</a>
		</li>
		<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
	</ul>

	<main role="main" class="main-interna">
		<div class="container-fluid pb-5">

			<div class="row">
				<section class="col-12" style="height: 40vh; background: #962328;"></section>
			</div>
			<div class="row rowContainer px-4 px-sm-5 px-md-5 px-lg-0">
				
				<!-- section -->
				<section class="col-12 col-md-8 px-4 pl-md-5 pr-md-3 px-lg-5 pb-5 single-container" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200"  data-aos-easing="ease-in-sine">

					<?php 
           	if (have_posts()): while (have_posts()) : the_post();
            $content = get_the_content(); 
            $DiaNro = get_the_date('d');
            $Mes = get_the_date('F');
          ?>

					<article class="row px-2 px-sm-5" style="background: #fff; margin-top: -25vh; box-shadow: 3px 3px 30px 1px #888888;">
						<figure class="col-12 imagen-destacada" style="margin-top: -10vh;">
							<img class="img-fluid" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
							<div class="date__figure">
								<p><?php echo $DiaNro; ?> <span><?php echo $Mes; ?></span></p>
							</div>
						</figure>
						<!-- <figure class="col-12 col-md-4">
							<img class="img-fluid" src="https://cloud.google.com/blog/big-data/2016/12/images/148114735559140/image-classification-1.png" alt="">
						</figure> -->
						<div class="col-12 px-4">
							<h2 class="single-title color-dark montserrat regular mt-3 d-flex align-items-center"><?php the_title(); ?></h2>
							<h3 class="color-dark montserrat regular mt-3 autor">By: <?php the_author(); ?></h3>
							<div class="color-dark montserrat light my-5">
								<?php the_content(); ?>
							</div>
						</div>

						<?php $post_tags = get_the_tags(); if ($post_tags) : ?>
						<div class="col-12 d-flex justify-content-start align-items-center list-tags py-3 my-5">
							<span class="px-2"><i class="fas fa-tag"></i></span>
							<nav class="d-flex flex-wrap">
								<?php 
									if ( $post_tags ) {
										$tagsList = array();
										foreach( $post_tags as $tag ) {
										$tagsList[] = $tag->term_id;
										echo '<a class="montserrat light btn-frambuesa m-1" href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>'; 
										}
									}
								?>
							</nav>
						</div>
						<?php endif; ?>
					</article>
					<?php endwhile; else: ?>
          <?php endif; ?>
					
				</section>
				<!-- /section -->

				<!-- sidebar -->
				<?php get_sidebar(); ?>
				<!-- /sidebar -->

			</div>
		</div>
		
		<?php if (!empty($tagsList)) : ?>
		<div class="my-5" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200"  data-aos-easing="ease-in-sine">
			<h2 class="title-sectionBlog d-flex align-items-center">Relacionados</h2>
		</div>

		<div class="container-fluid px-0 px-lg-5">
    <div class="row py-5 px-4 px-sm-5 px-md-5 px-lg-0">

      <!-- section -->
      <section class="col-12 col-md-8 px-4 pl-md-5 pr-md-3 px-lg-5 pb-5" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200"  data-aos-easing="ease-in-sine">

        <div class="wrapp-post">
					<?php 
            $args = array( 
							'post_type' => 'post', 
							'posts_per_page' => 3, 
							'tax_query' => array(
								array(
									'taxonomy' => 'post_tag',
									'field'    => 'term_id',
									'terms'    => $tagsList,
								),
							),
						); 
						$posts = new WP_Query($args);
            if ($posts->have_posts()): while ($posts->have_posts()) : $posts->the_post(); 
            $content = get_the_content(); 
            $DiaNro = get_the_date('d');
            $Mes = get_the_date('F');
          ?>
          <article class="row p-3 article-blogPost">
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
          <button class="montserrat light btn-frambuesa load-morePost" data-section="single" data-search="<?php $tags = implode(",", $tagsList); echo $tags; ?>">Ver más</button>
        </div>

      </section>
      <!-- section -->

    </div>
  </div>
	<?php endif; ?>

	</main>

<?php get_footer(); ?>


<?php
/*
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

			<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
	*/
	?>
