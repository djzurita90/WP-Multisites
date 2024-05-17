<?php 
get_header(); 
$tag = get_queried_object();
// global $query_string;
// query_posts ('posts_per_page=2');
$args = array(
		'post_type' => 'post',
		'posts_per_page' => 3,
		//'tag_id' => 3
		'tag' => single_tag_title('', false)
	);

	$loop = new WP_Query($args);
?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/blog.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/blog.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/header-y-portada.js"></script>

	<div class="portada-container pagina-<?php the_ID(); ?>">
		<h1 class="portada-titulo"><?php echo single_tag_title('', false); ?></h1>
	</div>
	<ul class="breadcrumbs-container d-flex align-items-center">
		<li>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a>
		</li>
		<li>
			<a href="/blog/">Blog</a>
		</li>
		<li>
			<a href="<?php the_permalink(); ?>"><?php echo single_tag_title('', false); ?></a>
		</li>
	</ul>

	<main role="main" style="background: #ffffff;">
		<div class="container-fluid px-0 px-lg-5">
			
			<div class="row rowContainer px-4 px-sm-5 px-md-5 px-lg-0">
				<!-- <div class="col-12 p-3">
					<h1><?php// _e( 'Tema: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>
				</div> -->
				<!-- section -->
				<section class="col-12 col-md-8 px-4 pl-md-5 pr-md-3 px-lg-5 pb-5" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200"  data-aos-easing="ease-in-sine">

					<div class="wrapp-post">

						<?php 
							if ($loop->have_posts()): while ($loop->have_posts()) : $loop->the_post(); 
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
						<button class="montserrat light btn-frambuesa load-morePost" data-section="tags" data-search="<?php echo $tag->term_id; ?>">Ver más</button>
					</div>

				</section>
				<!-- section -->

				<!-- /sidebar -->
				<?php get_sidebar(); ?>
				<!-- /sidebar -->

			</div>
		</div>
	</main>



<?php get_footer(); ?>

<?php //get_sidebar(); ?>

<?php //get_template_part('loop'); ?>

<?php //get_template_part('pagination'); ?>
