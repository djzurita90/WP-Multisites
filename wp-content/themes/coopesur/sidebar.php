<!-- sidebar -->
<aside class="sidebar col-12 col-md-4 px-md-4 px-lg-4" role="complementary" data-aos="fade-left" data-aos-once="true"  data-aos-offset="200"  data-aos-easing="ease-in-sine">
	<div class="wrapper-side">
		<div class="w-75 m-auto d-flex flex-column align-items-center justify-content-center py-4 line-bottom">
			<h3 class="montserrat semiBold">Síguenos</h3>
			<nav class="social_share d-flex justify-content-center">
				<a href="#"><i class="fab fa-facebook-f mx-2"></i></a>
				<a href="#"><i class="fab fa-twitter mx-2"></i></a>
				<a href="#"><i class="fab fa-youtube mx-2"></i></a>
				<a href="#"><i class="fab fa-instagram mx-2"></i></a>
			</nav>
		</div>
		<?php if(get_tags()) : ?>
		<div class="w-75 m-auto d-flex flex-column align-items-center justify-content-center py-4 line-bottom">
			<h3 class="montserrat semiBold">Temas</h3>
			<nav class="navigation-tags d-flex justify-content-center align-items-center flex-wrap">
				<?php
					$args = array('post_type' => 'post', 'orderby' => 'rand');
					$alltags = get_tags( $args );
						shuffle($alltags);
						$count = 0;
						if ($alltags) {
								foreach($alltags as $tag) {
										$count++;
										echo '<a class="montserrat light btn-frambuesa m-1" href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
						if( $count > 10 ) break;
						}
					}
				?>
			</nav>
		</div>
		<?php endif; ?>
		<h3 class="montserrat semiBold title-sidebar my-5 text-center py-2" data-aos="fade-left" data-aos-once="true"  data-aos-offset="200"  data-aos-easing="ease-in-sine">Ultimos Articulos</h3>
		<div class="w-75 m-auto d-flex justify-content-center article-sidebar px-2 px-lg-4">
			<div class="aside-wrapper-post" data-aos="fade-left" data-aos-once="true"  data-aos-offset="200"  data-aos-easing="ease-in-sine">
				<?php 
					$args = array( 'post_type' => 'post', 'posts_per_page' => 3 ); $posts = new WP_Query($args);
					if ($posts->have_posts()): while ($posts->have_posts()) : $posts->the_post(); 
					$content = get_the_content(); 
					$DiaNro = get_the_date('d');
					$Mes = get_the_date('F');
					$year = get_the_date('Y');
				?>
				<article class="post-item py-4">
					<div style="background: url(<?php the_post_thumbnail_url('full'); ?>)no-repeat center / cover;">
						<div class="date__figure">
							<p><i class="far fa-calendar-alt"></i><?php echo $DiaNro; ?> <span><?php echo $Mes; ?><span class="year">, <?php echo $year; ?></span></p>
						</div>
					</div>
					<div>
						<a href="<?php the_permalink(); ?>"><h3 class="title-post-sidebar color-dark montserrat regular mt-2"><?php the_title(); ?></h3></a>
						<hr>
						<p class="color-dark montserrat light"><?php echo wp_trim_words( $content , '10' );  ?></p>
					</div>
				</article>
				<?php endwhile; else: ?>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
</aside>
<!-- /sidebar -->

<?php
/*

	<?php get_template_part('searchform'); ?>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>
*/
?>
