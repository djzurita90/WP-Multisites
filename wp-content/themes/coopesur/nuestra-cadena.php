<?php
/*
Template Name: Nuestra-cadena
*/
?>

<?php get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/nuestra-cadena.css">
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

<section  class="nuestra-cadena-de-valor">
    <div class="container">
    	<div class="row titulo mb-5 pt-5">
    		<div class="col-12 col-sm-12 col-lg-6 mt-5">
    			<div class="texto-valor d-flex">
    				<hr>
    				<h3 class="">
    					Nuestra cadena de valor
    				</h3>
    			</div>
    			<h4 class="mt-5">Coopesur</h4>
    			<p>
    				siendo la cooperativa de todos, impacta directamente en el bienestar de las familias cafeteras, el crecimiento social y educativo
    			</p>
    		</div>
    	</div>
        <div class="row pilar pt-4">
            <div class="col-12">
                <div class="row uno">
                	<div class="col-12 col-sm-12 col-lg-4 text-right text" data-aos="fade-right">
                		<p>
                			Buscamos brindar el equilibrio en el proceso de compra de café en nuestras agencias para que los caficultores así reciban un pago justo por su materia prima, haciendo de este un proceso transparente y seguro.
                		</p>
                	</div>
                	<div class="col-12 col-sm-12 col-lg-2 text-center icon" data-aos="fade-down">
                		<img src="<?php echo get_template_directory_uri(); ?>/img/Imagen-1@3x.png" alt="">
                	</div>
                </div>
                <div class="row dos">
                	<div class="col-6 col-sm-6 col-lg-6"></div>
                	<div class="col-12 col-sm-12 col-lg-2 icon" data-aos="fade-down">
                		<img src="<?php echo get_template_directory_uri(); ?>/img/Imagen-2@3x.png" alt="" style="width: 50px;">
                	</div>
                	<div class="col-12 col-sm-12 col-lg-4 text" data-aos="fade-left">
                		<p>
                			Tenemos la consolidación de cadenas de productores certificados en sellos de sostenibilidad como RFA, UTZ y PRACTICES, esto se logra con el trabajo articulado de técnicos que visitan a nuestros productores,
                		</p>
                	</div>
                </div>
                <div class="row tres">
                	<div class="col-12 col-sm-12 col-lg-4 text-right text" data-aos="fade-right">
                		<p>
                			Generamos un sobreprecio para cafés certificados además de hacer la transmisión de la prima que el tostador emite a cada uno de los productores.
                		</p>
                	</div>
                	<div class="col-12 col-sm-12 col-lg-2 text-center icon" data-aos="fade-down">
                		<img src="<?php echo get_template_directory_uri(); ?>/img/Imagen-3@3x.png" alt="">
                	</div>
                	<div class="col-6 col-sm-6 col-lg-6 col-de-6"></div>
                </div>
                <div class="row cuatro">
                	<div class="col-6 col-sm-6 col-lg-6"></div>
                	<div class="col-12 col-sm-12 col-lg-1 icon" data-aos="fade-down">
                		<img src="<?php echo get_template_directory_uri(); ?>/img/Imagen-4@3x.png" alt="">
                	</div>
                	<div class="col-12 col-sm-12 col-lg-5 pt-lg-3 text" data-aos="fade-left">
                		<p class="pt-lg-5">
                			Además de nuestra labor social por cumplimiento, generamos diferentes beneficios a las comunidades en las que hace presencia, estos beneficios se representan en actividades como: entrega de abonos o herramientas a productores, celebración de días festivos y lúdicos dirigido a los niños de estas comunidades, beneficios en precio de compra en las temporadas post cosecha, capacitación y formación a agenciastas y a los colaboradores en agencias, formalización de las relaciones contractuales en los putos de compra
                		</p>
                	</div>
                </div>
                <div class="row cinco">
                	<div class="col-12 col-sm-12 col-lg-4 text-right text" data-aos="fade-right">
                		<p>
                			Estamos altamente comprometido con el cuidado del medio ambiente y con la seguridad y salud de todos sus colaboradores.    
                		</p>
                	</div>
                	<div class="col-12 col-sm-12 col-lg-1 text-center icon" data-aos="fade-down">
                		<img src="<?php echo get_template_directory_uri(); ?>/img/Imagen-5@3x.png" alt="">
                	</div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- ./nuestra-cadena-de-valor -->

<section class="cobertura" data-aos="zoom-in">
	<div class="container">
		<div class="row">
			<div class="col-12">
			<div class="mapa-cobertura p-4">
				<img srcset="<?php echo get_template_directory_uri(); ?>/img/Mapa.svg" src="<?php echo get_template_directory_uri(); ?>/img/Mapa@4x.png" alt="Mapa de cobertura">
			</div>
			<div class="texto-cobertura d-flex">
				<h1 class="text-right">Nuestra cobertura</h1>
				<hr>
			</div>
			</div>
		</div>
	</div>
</section>   <!-- ./cobertura -->
<section class="distribucion" data-aos="zoom-in">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12  d-flex">
				<hr><h3>Antioquia</h3><hr>
			</div>
		</div>
		<div class="row antioquia">
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Altamira</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Sonsón</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Angostura</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Armenia Mantequilla</span>
			</div>
		</div> <!-- ./antioquia -->
		<div class="row antioquia">
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Andes</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Urrao</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Florencia</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>San Andrés de Cuerquia</span>
			</div>
		</div> <!-- ./antioquia -->
		<div class="row antioquia">
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Pueblo Rico</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Anzá</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Betania</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Jericó</span>
			</div>
		</div> <!-- ./antioquia -->
		<div class="row antioquia">
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Nariño</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Vegachí</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Yolombó</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Abejorral</span>
			</div>
		</div> <!-- ./antioquia -->
		<div class="row antioquia">
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Concordia</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Salgar </span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Yalí</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Betania</span>
			</div>
		</div> <!-- ./antioquia -->
		<div class="row antioquia">
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Fredonia</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Santa Barbara</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Argelia</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Támesis</span>
			</div>
		</div> <!-- ./antioquia -->
		<div class="row antioquia">
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Betulia</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Ebéjico</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>San Jerónimo</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Caicedo</span>
			</div>
		</div> <!-- ./antioquia -->
		<div class="row antioquia">
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Liborina</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Amalfi</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Toledo</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Concordia</span>
			</div>
		</div> <!-- ./antioquia -->
		<div class="row antioquia">
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Sabana Larga</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Briceño</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Sabana Larga</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
			</div>
		</div> <!-- ./antioquia -->

		<div class="row my-5">
			<div class="col-12  d-flex text-fuera">
				<hr class="fuera"><h3>Fuera de Antioquia</h3><hr class="fuera">
			</div>
		</div>
		<div class="row fuera-de-antioquia pb-5">
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src=<?php echo get_template_directory_uri(); ?>/"img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Chaparral</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Neiva</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
				<span><img srcset="<?php echo get_template_directory_uri(); ?>/img/Ckeck.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ckeck.png" alt="Ckeck icono"></span>
				<span>Ibague</span>
			</div>
			<div class="col-6 col-sm-6 col-lg-3 p-3">
			</div>
		</div> <!-- ./fuera-de-antioquia -->
	</div>
</section> <!-- ./distribucion -->

<section class="modelo-exportacion">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-lg-6 col-izq">
				<div class="titulo-col-izq d-flex" data-aos="zoom-in">
					<hr>
					<h3>Nuestro modelo de exportación</h3>
				</div>
				<p data-aos="zoom-in">
					Nuestro modelo de exportación tiene la trazabilidad que se puede realizar al producto desde su origen y demostrando todo el manejo que paso a paso se da para la conservacion y debido manejo de el café certificado y convencional que   proveemos a clientes en el exterior
				</p>

				<a class="btn btn-danger mt-5" href="#" role="button" data-toggle="modal" data-target=".bd-example-modal-lg" data-aos="zoom-in">Exporta con nosotros</a>
                <!-- Large modal -->

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                      <div class="modal-content fondo">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row mb-3">
                                    <div class="col-12 col-lg-12 titulo-header text-center">
                                        <img class="img-cubo" srcset="<?php echo get_template_directory_uri(); ?>/img/Cuadro-3d.svg" src="<?php echo get_template_directory_uri(); ?>/img/Cuadro-3d@3x.png" alt="">
                                        <h2 class="title">Exporta con nosotros</h2>
                                    </div>
                                </div>
                                <?php echo do_shortcode('[contact-form-7 id="95" title="Modal"]'); ?>
                            </div>
                            <!-- ./container-fluid -->
                        </div>
                        <!-- ./modal-body -->
                    </div>
                  </div>
                </div>
			</div> <!-- ./col-izq -->
			<div class="col-12 col-sm-12 col-lg-6 col-der">
				<div class="text-center col-der-image position-relative">
					<img src="<?php echo get_template_directory_uri(); ?>/img/Granos-de-cafe.png" alt="Granos de café imagen" class="img-fluid">
				</div>
			</div> <!-- ./col-der -->
		</div> <!-- ./row -->
	</div>
</section> <!-- ./modelo-exportacion -->

<?php get_footer(); ?>