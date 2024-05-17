<?php
/*
Template Name: Contactanos
*/
?>

<?php get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/contactanos.css">
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
<section class="contactanos">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-1"></div>
            <div class="col-12 col-sm-12 col-lg-5 py-5 pr-5 form-contact">
                <h3 class="my-5">Deja tus datos</h3>
                <?php echo do_shortcode('[contact-form-7 id="96" title="Interna contactanos"]'); ?>
            </div>
            <div class="col-12 col-sm-12 col-lg-6 imagen-de-fondo pt-5">
                <div class="list-group">
                    <div class="list-group-item d-flex">
                        <span class="mr-2"><img class="img-tel" srcset="http://cooperativacoopesur.com/wp-content/themes/coopesur/img/ico-telefono.svg" src="http://cooperativacoopesur.com/wp-content/themes/coopesur/img/ico-telefono.png"><!--i class="fas fa-phone-volume"></i--></span>
                        <span><a href="#">418.03.45</a> - <a href="#">306.92.49</a></span>
                    </div>
                    <div class="list-group-item d-flex">
                        <span class="mr-2"><img class="img-email" srcset="http://cooperativacoopesur.com/wp-content/themes/coopesur/img/ico-correo.svg" src="http://cooperativacoopesur.com/wp-content/themes/coopesur/img/ico-correo.png"><!--i class="far fa-envelope mr"></i--></span> 
                        <span><a class="word-break-all" href="mailto:recursoshumanos@cooperativacoopesur.com">recursoshumanos@cooperativacoopesur.com</a></span>
                    </div>
                    <div class="list-group-item mb-2 d-flex">
                        <span class="mr-2"><!--i class="fas fa-map-marker-alt"></i--><img class="img-posicion" srcset="http://cooperativacoopesur.com/wp-content/themes/coopesur/img/ico-posicion.svg" src="http://cooperativacoopesur.com/wp-content/themes/coopesur/img/ico-posicion.png"></span> <span class="pr-5">Carrera 48 B Nº99 Sur 59, Bodega 12 San Bartolomé, La Estrella.</span>
                    </div>
                    <div class="list-group-item redes-sociales">
                        <a href="#"><i class="fab fa-facebook-f fa-2x"></i></i> </a>
                        <a href="#"><i class="fab fa-twitter fa-2x"></i> </a>
                        <a href="#"><i class="fab fa-youtube fa-2x"></i> </a>
                        <a href="#"><i class="fab fa-instagram fa-2x"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./container -->
</section>

<div class="col-12 text-center copy pt-2 pb-2">
    <span class="color-white" data-aos="fade-right" data-aos-once="true"  data-aos-offset="0"  data-aos-easing="ease-in-sine">Powered by: <img class="img-muva" srcset="<?php echo get_template_directory_uri(); ?>/img/Muva.svg" src="<?php echo get_template_directory_uri(); ?>/img/Muva.png"> | <img class="img-desarrollo" srcset="<?php echo get_template_directory_uri(); ?>/img/Ico-Desarrollo.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ico-Desarrollo.png"></span>
</div>