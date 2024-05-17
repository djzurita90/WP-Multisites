<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' -'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<div id="burguer" class="position-absolute d-inline-block d-none">  
        <ul class="sidebar-nav mb-0">
        	<?php html5blank_nav(); ?>
        </ul>
    </div>
    <nav class="w-100 nav-menu fixed-menu hidden">      	
  		<ul class="no-list d-inline-flex p-0 col-lg-12 center-section menu color-white">
  			<a href="/">
	  			<div class="float-left col-6 col-sm-3">
	  				<a href="<?php echo home_url(); ?>"><img class="logo-nav" src="<?php echo get_template_directory_uri(); ?>/img/CoopeSur-logo-2.png" srcset="<?php echo get_template_directory_uri(); ?>/img/CoopeSur-logo-2.svg" alt="logo"></a>
	  			</div>
  			</a>
  			<nav class="float-right col-6 col-sm-9 items">
  				<?php html5blank_nav(); ?>		      							      				
  			</nav>
  			<div class="float-right col-6 col-sm-9 box-burguer position-relative">
  				<a href="#menu-toggle" id="menu-toggle" class="burguer float-right position-absolute" onclick="hiddenMenu()"><i class="fas fa-bars"></i></a>
  			</div>  
  		</ul>				      		
	</nav>
    <header class="navbar container-fluid">
    	<div class="float-left back-salmon bar-contacto col-lg-12 text-right quickSand">
    		    <a href="mailto:contacto@coopesur.com" title="contacto" class="quickSand" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">contacto@coopesur.com</a>
    		    <a href="tel:#" title="Telefóno" class="quickSand" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">3113933962</a>
    		    <span data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
	    		    <a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a>
	    			  <a href="#" title="youtube"><i class="fab fa-youtube"></i></a>
	    			  <a href="#" title="instagram"><i class="fab fa-instagram"></i></a>
	    		  </span>
	    </div>

	    <?php 	
    			if (is_front_page()){
	    			echo '<div class="float-left back-frambuesa bar-precio col-lg-12 text-right">
	    				<p class="m-0 montserrat" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">Precio del café que indica para 	hoy<span class="next-line">US$1.2260'; if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Precios del cafe')) :  endif; echo '</span></p></div>';
					
					
	    		}
	    ?>	
    	   	
		<nav class="w-100 menu-desktop">      	
      		<ul class="no-list d-inline-flex p-0 col-lg-12 center-section menu color-white">
      			<div class="float-left col-6 col-sm-2 pl-0">
						<a href="<?php echo home_url(); ?>">
      					<img class="logo-nav" src="<?php echo get_template_directory_uri(); ?>/img/CoopeSur-logo.png" srcset="<?php echo get_template_directory_uri(); ?>/img/CoopeSur-logo.svg" alt="logo">
      				</a>
      			</div>
      			<div class="float-right col-6 col-sm-10 items">
      				<?php html5blank_nav(); ?>
      			</div>
      			<div class="float-right col-6 col-sm-10 box-burguer position-relative">
      				<a href="#menu-toggle" id="menu-toggle" class="burguer float-right position-absolute" onclick="hiddenMenu()"><i class="fas fa-bars"></i></a>
      			</div>  
      		</ul>				      		
    	</nav>  
    </header>
			<!-- /header -->
