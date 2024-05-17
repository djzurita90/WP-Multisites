<?php
/*
Template Name: Conocenos
*/
?>

<?php get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/conocenos.css">
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

<div class="container-fluid pagina-conocenos">

    <div class="marco ">
        <div class="row ">
            <div class="col-md-12 col-lg-6">
                <div class="fondo-imagen" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="titulo-ppal" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
                    <span class="titulo">Nuestra</span>
                    <span class="titulo">Filosofía</span>
                </div>
                <div class="fondo-texto " style="">
                    <h3 data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">Somos</h3>
                    <p data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">La cooperativa de caficultores del suroeste de Antioquia coopesur viene liderando en diferentes escenarios un proceso de compra de café que se diferencia ampliamente de los procesos de compra convencionales y que hacen parte de la historia del agro en Colombia.
                    </p>
                    <p data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">Un contacto directo con el caficultor y con los agenciastas que alrededor del departamento y el país tienen puntos de compra, hace que coopesur sea reconocido en cada uno de los municipios donde tiene presencia; la fidelidad de los productores y la excelente materia prima que proveen a nuestra Cooperativa ha hecho que en estos momentos tengamos un producto de alta calidad para ofrecer a Colombia y al mundo.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="marco separador2 "  >
        <div class="row pos-rel" >
            <div class="col-md-12 col-lg-6 ">
                  <div class="estilo-imagen" >
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/cafe.png" alt="" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
                  </div>
                <div class="fondo-texto1 " >
                    <p data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">Nuestros principios como cooperativa contemplan la responsabilidad social como un pilar fundamental para el crecimiento y el avance de las comunidades que impactamos de manera positiva constantemente; para ello tenemos un equipo altamente comprometido con el desempeño de sus funciones para lograr la optimización de este fin que es el corazón de nuestra cooperativa. 
                    </p>
                    <p data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">El trabajo con diferentes comunidades ha sido para coopesur la razón de su funcionamiento, buscamos asegurar a nuestros asociados que van a tener un precio competitivo en el mercado a la hora de comprar el café en cada una de las agencias en el territorio nacional, para que así se asegure el desarrollo y las oportunidades a nuestros caficultores; además de esto, desde el año 2016 coopesur incursiono en el mercado del café certificado obteniendo a lo largo de estos años 3 certificaciones que posicionan a coopesur como una cooperativa que maneja altos estándares de calidad en sus procesos y que cumple así con las diferentes normas que el mercado internacional impone para el manejo de cafés sostenibles, sumado a esto nos vinculamos ampliamente con el cuidado del entorno y medio ambiente desde cada uno de nuestros puntos de acción.
                    </p>
                    <p data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
                    De esta manera queremos compartir con ustedes lo que hacemos dentro de una cooperativa responsable y transparente que está enfocada a servir a todos sus asociados, a las comunidades en general y a quienes hacen posible que estemos aquí, nuestros productores, bienvenidos a este sitio web donde podrán ver de cerca quienes somos, la cooperativa de todos
                    </p>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="fondo-imagen2 posicion" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
                </div>                    
            </div>
        </div>
    </div>


   <section >
        <div class="row separador3" >
            <div class="col-lg-6 separador3-1" >
                <img class="img-fluid separador3-2 img-costal" src="<?php echo get_template_directory_uri(); ?>/img/costal.jpg" alt="" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center pl-0 saco-de-cafe-texto" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
                <h4 class="efecto-borde"><span class="oracion1">Con cada <strong>saco de café apoyamos</strong> </span><span class="oracion2">a nuestras familias cafeteras</span></h4>
            </div>
        </div>
   </section>
   
    <section class="mt-5 separa-prod" >
        <div class="row">
            <div class="col d-flex align-items-center ">
                <div class="flex-grow-1 ancho2" ></div>
                <div class="puntos  " data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
                    <span class="punto4">Productores</span>
                    <div class="punto3"><span>
                              Productores
                                </span>
                    </div>
                </div>
                <div class="estilo2" >
                </div>
            </div>
        </div>
    </section>


    <section class="py-4 mt-4 productores-contenedor">
        <div class="row color-fondo" >
            <div class="col-lg-6 texto margen1 pr-5">
                <p class="productores-parrafo" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">Coopesur siendo la cooperativa de todos, impacta directamente en el bienestar de las familias cafeteras, la sociedad y el medio ambiente, por esto nos preocupamos por la constante tecnificación de los procesos de nuestros productores, las certificaciones que velan por las buenas prácticas agrícolas en las fincas, el crecimiento social y educativo de nuestros niños en el campo, las oportunidades en la compra y venta de café con precios competitivos en el mercado y con el impacto positivo en todas las comunidades; además de esto tenemos puertas abiertas a la inclusión, el desarrollo y el progreso, para ello día a día generamos un trabajo transparente y responsable que beneficia a toda las personas que hacen parte de nuestro proceso.</p>
            </div>
            <div class="col-lg-6" >
               <div class="margen-inf" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
                    <img class="img-fluid cerro " srcset="" src="<?php echo get_template_directory_uri(); ?>/img/recurso3.jpg">
               </div>
            </div>
        </div>
    </section>

    <section class="mt-3">
        <div class="row">
            <div class="col d-flex align-items-center ">
                <div class="estilo" >
                </div>
                <div class="puntos" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
                    <span class="punto1">Puntos de compra</span>
                    <div class="punto2"><span>
                              Puntos de compra
                                </span>
                    </div>
                </div>
                <div class="flex-grow-1 ancho" ></div>
            </div>
        </div>
    </section>
    <section class="mt-5 puntos-de-compra-container">
        <div class="row color-fondo" >
            <div class="col-lg-6 margen-inf2 pl-0" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">
                <img class="img-fluid coopera" srcset="" src="<?php echo get_template_directory_uri(); ?>/img/recurso1.jpg">
            </div>
            <div class="col-lg-6 texto margen2 ">
                <p class="margen2 text-puntos-de-compra" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">Ofrecemos a nuestros colaboradores la oportunidad de ser mas competitivos en el mercado, estabilizamos los precios del café para garantizar una compra efectiva y transparente, generamos recursos para pago inmediato a los productores, brindamos a nuestras agencias acompañamiento y capacitación para garantizar un manejo responsable y adecuado del café bajo los diferentes estándares de calidad, promovemos un impacto positivo en la economía de los diferentes municipios en los que tenemos presencia, como valor agregado generamos alianzas estratégicas las cuales hemos logrado posicionar de manera positiva reflejado en el pago de primas o sobre precios por el café certificado de nuestros productores.</p>
            </div>
        </div>
    </section>
    <section class="separacion">
        <div class="row">
            <div class="col text-center">
                <a class="btn btn-danger" href="#" role="button" data-toggle="modal" data-target=".bd-example-modal-lg" data-aos="fade-right" data-aos-once="true"  data-aos-offset="300"  data-aos-easing="ease-in-sine">Exporta con nosotros</a>
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
                                    <!-- ./row -->
                            </div>
                            <!-- ./container-fluid -->
                        </div>
                        <!-- ./modal-body -->
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>