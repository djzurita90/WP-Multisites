<?php
/*
Template Name: Inicio
*/
?>

<?php get_header(); ?>
<style>
	.menu-desktop{
		position:relative;
	}
</style>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<div class="back-carr w-100">
	<div id="carouselExampleIndicators" class="no-view-768 carousel slide" data-ride="carousel" data-interval="10000">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		    <div class="carousel-item active">
		 	   <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/portada.jpg" alt="First slide">				 	   
	 	    </div>
	  		<div class="carousel-item">
	    		<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slider2.jpg" alt="Second slide">
	    	</div>
	    	<div class="carousel-item">
	    		<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/slider3.jpg" alt="Third slide">
	    	</div>
	    	<div class="carousel-caption d-block">
		    	<div class="position-relative d-inline-block tituloPrin">				    		
		    		<h1 class="montserrat bold line-b">COOPESUR</h1>
		    	</div>	
		    	<h2 class="quentin tittle-coo">La Cooperativa de Todos</h2>
		    	<a onclick="doalert('#topSection');" class="pointer"><img id="mouseScroll" class="position-absolute b-20" src="<?php echo get_template_directory_uri(); ?>/img/mouse.png" alt=""></a>
			</div>
	  	</div>
	</div>		   
</div>

<section id="topSection" class="container-fluid side-collapse-container pb-5 mb-5">
	<section class="row w-75 ml-auto mr-auto mt-mb-5 pb-5"> 
		<div class="col-lg-12 ml-auto mr-auto mt-6 pl-5 pr-5 bart-left bart-right position-relative" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
			<h3 class="montserrat semiBold subTittles text-center">Conócenos</h3> 
		</div>
		<div class="text-sm-center box-coop-img text-md-center text-lg-center text-center col-lg-6 position-relative mb-5 pb-5" >
		  	<img class="w-lg-50 w-md-50 w-sm-100" src="<?php echo get_template_directory_uri(); ?>/img/pic_conocenos.jpg" alt="" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
		  	<div class="boxRec position-absolute no-view-991" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine"></div>
		</div>
		<div class="col-lg-6 box-coop" >
		  	<h1 class="quentin subTT color-dark mb-0" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">Coopesur</h1>
		  	<p class="montserrat light color-dark" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">viene liderando en diferentes escenarios un proceso de compra de café que se diferencia ampliamente de los procesos de compra convencionales y que hacen parte de la historia del agro en Colombia.</p>
		  	<div class="col-lg-12 box-btn p-0 mt-5" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">	   
		  		<a href="/conocenos" title="Conocenos" class="montserrat light btn-frambuesa mt-5">Ver más</a> 
		  	</div>  	         	
		</div>
	</section>
	<section class="row"> 
	<div class="col-lg-12 fondo-valor">
		<div class="col-lg-9 mr-auto ml-auto pl-5 pr-5 bart-left-cadena bart-right-cadena position-relative" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
			<h3 class="tittles-block montserrat semiBold subTittles text-center color-white">Nuestra Cadena de valor</h3>
		</div>
		<p class="col-lg-10 pl-5 mr-auto ml-auto montserrat light text-block color-white" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">Con cada saco de café<br>apoyamos a <span class="bold">nuestras familias cafeteras</span></p> 
		<div class="col-lg-10 pl-5 mr-auto ml-auto mt-4" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
	  		<a href="nuestra-cadena" title="Valor" class="montserrat light btn-white mt-2">Ver más</a>  
	  	</div>
	</div>	    
	</section>  
	<section id="seccionCont" class="row  pt-5 pb-5 back-frambuesa"> 
		<div class="col-lg-10 m-auto">
		  	<div class="text-center col-lg-3 col-md-6 float-left" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
		  		<span class="col-12 color-white light montserrat subTittles2 counter" data-count="6">0</span>
					<br>
					<br>
		  		<span class="col-12 color-white light subTittles2 montserrat">Años de experiencia</span>
		  	</div>
		  	<div class="text-center col-lg-3 col-md-6 float-left" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
		  		<span class="col-12 color-white light montserrat subTittles2 counter" data-count="15016">0</span>
					<br>
					<br>
		  		<span class="col-12 color-white light subTittles2 montserrat">Clientes sonrientes</span>
		  	</div>
		  	<div class="text-center col-lg-3 col-md-6 float-left" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
		  		<span class="col-12 color-white light montserrat subTittles2 counter" data-count="3">0</span>
					<br>
					<br>
		  		<span class="col-12 color-white light subTittles2 montserrat">Certificados</span>
		  	</div>
		  	<div class="text-center col-lg-3 col-md-6 float-left" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
		  		<span class="col-12 color-white light montserrat subTittles2 counter" data-count="42">0</span>
					<br>
					<br>
		  		<span class="col-12 color-white light subTittles2 montserrat">Empleados felices</span>
		  	</div>
		</div>	    
	</section>  
	<section class="nlsc row w-75 ml-auto mr-auto mt-6 mb-6"> 
	<div class="col-lg-12">
		<div class="ml-auto mr-auto col-lg-12 mt-5 pl-5 pr-5 bart-left-cadena bart-right-cadena position-relative border-bottom-red" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
			<h3 class="montserrat semiBold subTittles subTittlesM text-center color-dark">Nuestra labor social</h3>
		</div>	      
		<br>	
	  	<p class="montserrat light color-dark text-center mb-5" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">A lo largo de los seis años de historia que coopesur tiene en el mundo del café, ha impactado en diferentes oportunidades sectores de la sociedad de alta vulnerabilidad y escasos recursos como lo son las escuelas rurales, además de esto, estamos empoderados de la lucha por los derechos de los niños y niñas de familias campesinas y de diferentes municipios; aquí están los mejores momentos que hemos compartido con estas personas especiales.</p>       	
	</div>
	<div class="col-lg-12">
		<?php 
      $args = array( 'post_type' => 'labor-social', 'posts_per_page' => 3 ); $customPost = new WP_Query($args);
      if ($customPost->have_posts()): 
    ?> 
		<div class="row custom-posts-laborSocial">
      <!-- :: SE CONSTRUYE CADA UNO DE LOS POSTS :: -->
      <?php  while ($customPost->have_posts()) : $customPost->the_post(); $content = get_the_content(); $title = get_the_title();?>
      <article id="post-<?php the_ID(); ?>" class="col-sm-6 col-md-4 my-4" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
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
		<?php endif; ?>
		<div class="float-left col-lg-12 text-center mt-5" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
			<a class="montserrat light btn-frambuesa mt-5" href="/nuestra-labor-social/" title="Leer todos">Ver todos</a>   
		</div>
	</div>
	</section> 
	<section class="row"> 
	<div class="col-lg-12 fondo-certificacion d-inline-block text-center">	      	
			<div class="ml-auto mr-auto col-lg-9 mt-sm-5 mt-2 pl-5 pr-5 bart-left-cadena bart-right-cadena position-relative mb-5" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
				<h3 class="montserrat semiBold subTittles text-center color-white">Certificaciones</h3>
			</div>
			<div class="col-lg-10 ml-auto mr-auto d-inline-block mb-6 d-flex align-items-stretch cch">
				<div class="float-left col-lg-4 mt-sm-5 mt-1 col-md-4 col-sm-4 d-flex align-items-stretch">
		    		<figure class="text-center w-100 container d-flex align-items-center flex-column">
		    			<img class="certified-starbucks" src="<?php echo get_template_directory_uri(); ?>/img/pic_certificaciones-0.png" alt="" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
		    			<figcaption class="mt-auto">
		    				<h3 class="tittle-blog montserrat light color-white mt-4 mb-5" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">Café Practice</h3>			    				  
		    			</figcaption>
		    		</figure>
				</div>
		    	<div class="float-left col-lg-4 mt-sm-5 mt-1 col-md-4 col-sm-4 d-flex align-items-stretch cch">
		    		<figure class="text-center w-100 container d-flex align-items-center flex-column">
		    			<img class="certified-RainForest" src="<?php echo get_template_directory_uri(); ?>/img/pic_certificaciones-2.png" alt="" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
		    			<figcaption class="mt-auto">
		    				<h3 class="tittle-blog montserrat light color-white mt-4 mb-5" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">Café UTZ</h3> 
		    			</figcaption>
		    		</figure>
		    	</div>
		    	<div class="float-left col-lg-4 mt-sm-5 mt-1 col-md-4 col-sm-4 d-flex align-items-stretch cch">
		    		<figure class="text-center w-100 container d-flex align-items-center flex-column">
		    			<img class="certified-UTZ" src="<?php echo get_template_directory_uri(); ?>/img/pic_certificaciones-1.png" alt="" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
		    			<figcaption class="mt-auto">
		    				<h3 class="tittle-blog montserrat light color-white mt-4 mb-5" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">Rain Forest</h3>
		    			</figcaption>
		    		</figure>
		    	</div>
			</div>		    	
		<div class="float-left col-lg-12 text-center" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
			<a class="montserrat light btn-salmon color-white mt-5" href="/certificaciones/" title="Ver más">Ver más</a>   
		</div>
	</div>	    
	</section>    
	<section class="row w-75 mt-6 ml-auto mr-auto mb-5 container-bh"> 
	<div class="col-lg-12 pb-5 position-relative">
		<div  class="col-lg-12 mt-4 mb-5 pl-5 pr-5 bart-left bart-right position-relative" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
			<h3  class="montserrat semiBold subTittles text-center">Blog</h3>
		</div>
	  	<div class="col-lg-12 p-sm-3 pl-sm-5 pr-sm-5 art-blog mt-6 mb-5 ml-auto mr-auto">
	  		<?php
			$args = array( 'posts_per_page' => 3 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); $title = get_the_title(); $content = get_the_content(); $dia = get_the_date( 'j' ); $mes = get_the_date( 'F' );   	
			?>
	  		<figure class="text-md-center text-sm-center text-lg-left text-center col-lg-12 d-inline-block mt-4">
	  			<div class="hb-imagen-d position-relative col-lg-3 float-none float-lg-left w-md-50 w-sm-75 float-sm-none float-md-none p-0 m-auto" style="background: url(<?php the_post_thumbnail_url('full'); ?>)no-repeat center / cover;" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
	  				<span class="stick position-absolute" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine"><span class="number-stick"><?php echo $dia; ?></span><h3><?php echo $mes; ?></h3></span>	      				
	  			</div>
	  			<figcaption class="col-lg-9 float-left pl-lg-5 blog-tpb">
	  				<a href="<?php the_permalink(); ?>"><h1 class="mt-3 tittle-blog montserrat regular" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine"><?php echo wp_trim_words($title, '10'); ?></h1></a>
	  				<p class="color-dark montserrat light mb-4" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine"><?php echo wp_trim_words($content, '20'); ?></p>
	  				<a class="montserrat light btn-frambuesa mt-5" href="<?php the_permalink(); ?>" title="Leer más" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">Leer más</a>
	  			</figcaption>
	  		</figure>
	  		<?php
			endwhile;
			?>
	  	</div> 	 
	  	<div class="position-absolute box-big" >	      		
	  		<div class="w-100 position-absolute box-btn-blog" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
	  			<a class="position-relative montserrat light btn-frambuesa btn-blog" href="/blog/" title="Ver más">Ver más</a> 
	  		</div>
	  	</div>     	         	
	</div>
	</section>
</section>

<?php get_footer(); ?>