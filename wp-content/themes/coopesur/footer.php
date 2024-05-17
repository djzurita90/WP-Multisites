			<!-- footer -->
			<footer  class="text-center fondo-footer">
		    	<div class="col-lg-10 fondo-footer text-md-center text-sm-center text-lg-left text-center pt-5 pb-5 d-inline-block">
		    		<div class=" ml-auto mr-auto col-lg-10 mt-3 bart-left-m bart-right-m position-relative" data-aos="fade-right" data-aos-once="true"  data-aos-offset="100"  data-aos-easing="ease-in-sine">
		 				<h3 class="montserrat semiBold subTittles text-center color-white">Contáctanos</h3>
		 			</div>
		    		<div class="mt-5 col-lg-5 container float-lg-left">
		    			<?php echo do_shortcode('[contact-form-7 id="89" title="Contact form 1"]'); ?>
		    		</div>
		    		<div class="col-lg-2 container float-lg-left border-div position-relative text-center no-view-991" data-aos="fade-right" data-aos-once="true"  data-aos-offset="100"  data-aos-easing="ease-in-sine">
		    			
		    		</div>
		    		<div class="mt-5 mb-md-5 mb-sm-5 mb-lg-0 mb-5 d-sm-inline-block d-md-inline-block col-lg-5 container float-lg-left d-inline-block d-lg-inline contact">
		    			<span class="comunicacion montserrat light color-white tittle-contacto float-left col-lg-12 mt-3" data-aos="fade-right" data-aos-once="true"  data-aos-offset="100"  data-aos-easing="ease-in-sine"><img class="img-tel" srcset="<?php echo get_template_directory_uri(); ?>/img/ico-telefono.svg" src="<?php echo get_template_directory_uri(); ?>/img/ico-telefono.png"><a href="tel:4180345" title="call" class="montserrat light color-white tittle-contacto" data-aos="fade-right" data-aos-once="true"  data-aos-offset="100"  data-aos-easing="ease-in-sine"> 418.03.45</a> - <a href="tel:3069249" title="call" class="montserrat light color-white tittle-contacto">306.92.49</a></span>
		    			<p class="comunicacion montserrat light color-white tittle-contacto float-left col-lg-12 mt-3" data-aos="fade-right" data-aos-once="true"  data-aos-offset="100"  data-aos-easing="ease-in-sine"><img class="img-email" srcset="<?php echo get_template_directory_uri(); ?>/img/ico-correo.svg" src="<?php echo get_template_directory_uri(); ?>/img/ico-correo.png"><a href="mailto:recursoshumanos@cooperativacoopesur.com?subject=Información" "email me"  class="montserrat light color-white tittle-contacto contact-email">recursoshumanos@cooperativacoopesur.com</a></p>
		    			<span class="comunicacion montserrat light color-white tittle-contacto float-left col-lg-12 mt-3" data-aos="fade-right" data-aos-once="true"  data-aos-offset="100"  data-aos-easing="ease-in-sine"><img class="img-posicion" srcset="<?php echo get_template_directory_uri(); ?>/img/ico-posicion.svg" src="<?php echo get_template_directory_uri(); ?>/img/ico-posicion.png">Carrera 48 B Nº99 Sur 59, Bodega 12<br>San Bartolomé, La Estrella.</span>
		    		</div>
		    		<div class="float-left col-lg-12 text-center mt-5 pt-4">
		    			<a href="#" title="facebook" class="color-white ml-2 mr-2 icon-rrss" data-aos="fade-right" data-aos-once="true"  data-aos-offset="100"  data-aos-easing="ease-in-sine"><i class="fab fa-facebook-f"></i></a>
		    			<a href="#" title="twitter" class="color-white ml-2 mr-2 icon-rrss" data-aos="fade-right" data-aos-once="true"  data-aos-offset="100"  data-aos-easing="ease-in-sine"><i class="fab fa-twitter"></i></a>
		    			<a href="#" title="youtube" class="color-white ml-2 mr-2 icon-rrss" data-aos="fade-right" data-aos-once="true"  data-aos-offset="100"  data-aos-easing="ease-in-sine"><i class="fab fa-youtube"></i></a>
		    			<a href="#" title="instagram" class="color-white ml-2 mr-2 icon-rrss" data-aos="fade-right" data-aos-once="true"  data-aos-offset="100"  data-aos-easing="ease-in-sine"><i class="fab fa-instagram"></i></a>
		    		</div>
		    	</div>
		    	<div class="col-12 back-frambuesa bar-footer">
		    	</div>
		    	<div class="col-12 text-center copy pt-2 pb-2">
		    		<span class="color-white" data-aos="fade-right" data-aos-once="true"  data-aos-offset="0"  data-aos-easing="ease-in-sine">Powered by: <a href="http://www.muva.com.co/" target="_blanck"><img class="img-muva" srcset="<?php echo get_template_directory_uri(); ?>/img/Muva.svg" src="<?php echo get_template_directory_uri(); ?>/img/Muva.png"></a> | <a href="http://www.info-factor.com.co/es/" target="_blanck"><img class="img-desarrollo" srcset="<?php echo get_template_directory_uri(); ?>/img/Ico-Desarrollo.svg" src="<?php echo get_template_directory_uri(); ?>/img/Ico-Desarrollo.png"></a></span>
		    	</div>
		    </footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		jQuery(document).ready(function($){
			//Espejo
			var precios = $('.bar-precio li.widget_text p').text();
			console.log(precios);
			$('span.next-line').text(precios);
		});
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
