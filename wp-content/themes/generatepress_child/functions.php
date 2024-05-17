<?php


/**

 * Generate child theme functions and definitions

 *

 * @package Generate

 */

//=>> MAIN JS

add_action("wp_enqueue_scripts", "dcms_insertar_Mainjs");

function dcms_insertar_Mainjs(){
    
  wp_register_script('main', get_template_directory_uri(). '/js/main.js', array('jquery'), '1', true );
  wp_enqueue_script('main');

  wp_register_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js', array('jquery'), '1', true );
  wp_enqueue_script('slick');
    
}




//Campos personalizados para solcitud de cita en woocommerce pagina de pago

add_action('woocommerce_after_order_notes', 'my_custom_checkout_field');


add_action('woocommerce_checkout_process', 'validatePhone');
function validatePhone() {
$postalcode = filter_input(INPUT_POST, 'postalcode');

 if (strlen(trim(preg_replace('/^[6789]\d{9}$/', '', $postalcode))) > 0) {
    wc_add_notice(__('Codigo postal incorrecto.'), 'error');
 }
}


// Define una cantidad mínima por producto
add_action( 'woocommerce_check_cart_items', 'set_min_quantity_per_product' );
function set_min_quantity_per_product() {
    // Only run in the Cart or Checkout pages
    if( is_cart() || is_checkout() ) {  
        global $woocommerce;
        $i = 0;
 
        // Lista de ID de productos y su cantidad mínima correspondiente
        $product_min_qty = array( 
            array( 'id' => 12, 'min' => 10 ),
            array( 'id' => 7, 'min' => 5 )
        );
        
        // Array para guardar los productos del carrito que no cumplan la condición
        $bad_products = array();
 
 		// Comprobamos el número de productos del carrito
        foreach( $woocommerce->cart->cart_contents as $product_in_cart ) {

                    if( $product_in_cart['quantity'] == 1 ) {                     	

                                                               
                    }else{
                        $bad_products[$i]['id'] = $product_in_cart['product_id'];                                              	
                        $bad_products[$i]['in_cart'] = $product_in_cart['quantity'];                                              	
                        $bad_products[$i]['min_req'] = 1;   
                    }                                  
                                         
                   	
            $i++;         
        }                    

        // Crea el mensaje de error que se muestra cuando no se ha alcanzado el mínimo                  
        if( is_array( $bad_products) && count( $bad_products ) >= 1 ) {
        
            $message = 'Lo sentimos. Pero para finalizar su compra debe alcanzar un maximo de productos de 1.<br/>';
            foreach( $bad_products as $bad_product ) {

                $message .= 'El producto "'. get_the_title( $bad_product['id'] ) .'" requiere una cantidad  de '. $bad_product['min_req'] .' unidades'.'. Usted esta incluyendo '. $bad_product['in_cart'] .'.';
            }
            wc_add_notice( $message, 'error' );
        }
    }
}



function my_custom_checkout_field( $checkout ) {



    echo '<div id="my_custom_checkout_field"><h3>'.__('Asunto').'</h3>';



    woocommerce_form_field( 'asunto_mensaje', array(

        'type' => 'text',

        'class' => array('my-field-class form-row-wide'),

        'label' => __('Asunto de su mensaje'),

        'placeholder' => __('Escriba su texto aquí'),

        'required' => true

    ), $checkout->get_value( 'asunto_mensaje' ));



    woocommerce_form_field( 'descripcion_sintomas', array(

        'type' => 'textarea',

        'class' => array('my-field-class form-row-wide'),

        'label' => __('Describa sus sintomas'),

        'placeholder' => __('Escriba su texto aquí'),

        'required' => true

    ), $checkout->get_value( 'descripcion_sintomas' ));


	global $wpdb;
    $user_query = new WP_User_Query( array( 'role' => 'vendor' ) );
  
  $array = array();
        
        
        
        // User Loop
if ( ! empty( $user_query->get_results() ) ) {
	foreach ( $user_query->get_results() as $user ) {
	//	echo '<p>' . $user->display_name . '</p>';
	
		//$data[$user->ID]=$user->ID;
		$data[$user->ID]=$user->display_name;
	
		
		 $array[$user->ID] = $data[$user->ID];   
	}
} else {
	echo 'No users found.';
}
   
    
 woocommerce_form_field( 'psicologos', array(
    'type' => 'select',
    'class' => array( 'wps-drop' ),
    'label' => __( 'Seleccione el Psicologo de su preferencia' ),
    'options' =>  $array
    ),
    $checkout->get_value( 'criteriosustitucion' ));



    echo '</div>';

}





add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');



// Restricciones

function my_custom_checkout_field_process() {

    global $woocommerce;



// Comprobar si el campo ha sido completado, en caso contrario agregar un error.

if(is_numeric($_POST['billing_postcode'])){
    
}else{
     wc_add_notice(__('Codigo postal incorrecto.'), 'error');
}



    if (!$_POST['asunto_mensaje'] || !$_POST['descripcion_sintomas'] || !$_POST['psicologos'])

        wc_add_notice( sprintf( __( 'Por favor debe rellenar todos los campos.' ) ) ,'error' );
        // $woocommerce->add_error( sprintf(__('Por favor debe Rellenar todos los Campos.') ));

    // if (!$_POST['descripcion_sintomas'])

    //     wc_add_notice( sprintf( __( 'Por favor debe Rellenar todos los Campos.' ) ) ,'error' );
    //     // $woocommerce->add_error( sprintf(__('Por favor introduce tu información.') ));

}








// Administración desde el panel wp admin del pedido



add_action('woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta');



function my_custom_checkout_field_update_order_meta( $order_id ) {

    if ($_POST['asunto_mensaje']) update_post_meta( $order_id, 'Asunto', esc_attr($_POST['asunto_mensaje']));

    if ($_POST['descripcion_sintomas']) update_post_meta( $order_id, 'Descripción de Sintomas', esc_attr($_POST['descripcion_sintomas']));



}



// Agregar campos personalizados al momento de enviar el correo electronico



add_filter('woocommerce_email_order_meta_keys', 'my_custom_checkout_field_order_meta_keys');



function my_custom_checkout_field_order_meta_keys( $keys ) {

    $keys[] = array('asunto_mensaje','descripcion_sintomas');



    return $keys;

}



add_action('woocommerce_checkout_process', 'producto_id');

function producto_id($order_id){

    global $wpdb;

    $table = $wpdb->prefix . 'woocommerce_order_itemmeta';



    $query = "select meta_value as id from $table WHERE order_item_id='$order_id' and meta_key='_product_id' ";

    $data = $wpdb->get_results($query, ARRAY_A);



    if (!$data) {

        return array();

    }

    return $data;

}



add_action('woocommerce_checkout_process', 'InsertarTicketConOrdenPedido');



function InsertarTicketConOrdenPedido($order_id) {

    /* global $wpdb;

    global $woocommerce;

    $table = $wpdb->prefix . 'wsdesk_ticketsmeta';

    $producto_id=producto_id($order_id);

    //$order = wc_get_order($order_id);//

    $vendedor=$producto_id;

 //  $vendedor = WCV_Vendors::get_vendor_from_product( $producto_id );

   $order = new WC_Order($order_id);

    $dues = WCV_Vendors::get_vendor_dues_from_order( $order );

    foreach ($dues as $vendor_id => $details) {

        foreach ($details as $detail) {

            $vendedor=$vendor_id;

            $product_id2 = $detail['product_id'];

        }

    }





    // $vendedor=0;

    foreach ( $dues as $due ) {

      $vendedor=$due['vendor_id'];

    }



    //$user = get_user_by("email", $_POST['email']);

    $child = array(

        'ticket_author' => (is_user_logged_in()) ? get_current_user_id() : 0,

        'ticket_email' => $_POST['billing_email'],

        'ticket_title' => $_POST['descripcion_sintomas'],

        'ticket_content' => str_replace("\n", '<br/>', $_POST['descripcion_sintomas']),

        'ticket_category' => 'raiser_reply'

       // 'ticket_parent' => ,

        //'ticket_vendor' => $parent[0]['ticket_vendor']

    );

    $id_ticket=eh_crm_insert_ticket($child);

    $key="ticket_assignee";



    $value="a:1:{i:0;s:2:".'"'."$vendedor".'"'.";}";

    $wpdb->insert($table, array(

        'ticket_id' => (int) $id_ticket,

        'meta_key' => $key,

        'meta_value' => $value

    ));



    $key="trigger_changes";

    $value="ticket_assignee";

    $wpdb->insert($table, array(

        'ticket_id' => (int) $id_ticket,

        'meta_key' => $key,

        'meta_value' => $value

    ));



    $key="ticket_tags";

    $value="a:0:{}";

    $wpdb->insert($table, array(

        'ticket_id' => (int) $id_ticket,

        'meta_key' => $key,

        'meta_value' => $value

    ));



    $key="ticket_cc";

    $value="a:0:{}";

    $wpdb->insert($table, array(

        'ticket_id' => (int) $id_ticket,

        'meta_key' => $key,

        'meta_value' => $value

    ));



*/



}





//Fin Campos personalizados para solcitud de cita en woocommerce pagina de pago





            /* Modificacion de my-count para agregar el link de historico de tickets

             * pagina de historial del atencion y detalle de mensajes

			 * Programador: Deivis Millán

			 * Fecha: 23/11/2017

			 * contacto: deivisjose.d@gmail.com

			 * Empresa: OpperWeb

			 * */

function custom_wc_end_point() {

    if(class_exists('WooCommerce')){

        add_rewrite_endpoint( 'tickets', EP_ROOT | EP_PAGES );

}

}

add_action( 'init', 'custom_wc_end_point' );

function custom_endpoint_query_vars( $vars ) {

    $vars[] = 'consultastickets';

 return $vars;

}

add_filter( 'query_vars', 'custom_endpoint_query_vars', 0 );

function ac_custom_flush_rewrite_rules() {

    flush_rewrite_rules();

}

add_action( 'after_switch_theme', 'ac_custom_flush_rewrite_rules' );

function custom_endpoint_acct_menu_item( $items ) {



    $logout = $items['customer-logout'];

    unset( $items['customer-logout'] );

    $items['consultastickets'] = __( 'Mis Consultas de Asistencia', 'woocommerce' );

    $items['customer-logout'] = $logout;

    return $items;

}

add_filter( 'woocommerce_account_menu_items', 'custom_endpoint_acct_menu_item' );

function fetch_content_custom_endpoint() {

    global $post;

    $id = '1709';

 ob_start();

 $output = apply_filters('the_content', get_post_field('post_content', $id));

 $output .= ob_get_contents();

 ob_end_clean();

 echo $output;

}

add_action( 'woocommerce_account_slug_endpoint', 'fetch_content_custom_endpoint' );

//Tickets con contador, cuenta atras


// NOTIFICACION SERV. 24 HORAS FUNCTIONS ::
//---------------------------------------------

// function notificaciones(){

//     GLOBAL $wpdb;
//     GLOBAL $post;

//     //COMPROBAR USUARIO LOGUEADO ::
//     if (is_user_logged_in()){

//         //OBTENER INFORMACION DE USUARIO ACTIVO ::
//         $usuario = wp_get_current_user();
//         $autor_ticket = $usuario->ID;

//         $ticket_principal = $wpdb->get_results("SELECT * FROM wp_wsdesk_tickets as tickets , wp_wsdesk_vendors_orders  as ticketcontrol where ticketcontrol.id_tickets=tickets.ticket_id and ticketcontrol.categoria='94' and ticketcontrol.estado_control='0' and tickets.ticket_parent = 0 and tickets.ticket_author='$autor_ticket' ", ARRAY_A);
//         //var_dump($ticket_principal);

//         if($ticket_principal){
            
//             if(is_home()){
                
//                 // echo '
//                 // <article class="notification">
//                 //     <div>
//                 //         <a href="'.get_site_url().'/consultastickets/"><h2><span>!</span> Consulte sus Productos Activos</h2></a>
//                 //         <a href="#" class="closeNotification">X</a>
//                 //     </div>
//                 // </article>
//                 // ';
//             }
            
//         }
//     }

// }
// add_action( 'init', 'notificaciones' );


//  CONTADOR FUNCTIONS ::
//----------------------------------

function tickets_cuentatras(){

    GLOBAL $wpdb;

    //tickets con la categoria para habilitar el cuenta atras (solicitud)
    //--------------------------------

    if (is_user_logged_in() && isset($_POST['ticket_id'])){

        $idTicket = $_POST['ticket_id'];
        $usuario = wp_get_current_user();
        $autor_ticket = $usuario->ID;

        
        $ticket_principal = $wpdb->get_results("SELECT * FROM wp_wsdesk_tickets as tickets , wp_wsdesk_vendors_orders  as ticketcontrol where tickets.ticket_id=$idTicket and ticketcontrol.categoria='94' and tickets.ticket_parent = 
        0 and tickets.ticket_author='$autor_ticket' GROUP BY tickets.ticket_updated", ARRAY_A);
        
       /* echo "SELECT * FROM wp_wsdesk_tickets as tickets , wp_wsdesk_vendors_orders  as ticketcontrol where tickets.ticket_id=$idTicket and ticketcontrol.categoria='94' and tickets.ticket_parent = 
        0 and tickets.ticket_author='$autor_ticket' LIMIT 1";*/
        //$ticket_principal = $wpdb->get_results("SELECT * FROM wp_wsdesk_tickets as tickets , wp_wsdesk_vendors_orders  as ticketcontrol where ticketcontrol.id_tickets=tickets.ticket_id and ticketcontrol.categoria='94' and ticketcontrol.estado_control='0' and tickets.ticket_parent = 0 and tickets.ticket_author='$autor_ticket'", ARRAY_A);
       // print_r($ticket_principal);
        foreach ($ticket_principal as $data) {

            //=> Variables
            $ticket = $data['id_tickets'];
            //echo $asignado[0];
            //$ticket_fecha = $data['ticket_updated'];
            $fecha = $data['ticket_date'];
            $ticket_fecha = date("Y-m-d H:i:s", strtotime($fecha)); 
            //=> calcula las fechas
            $fechaIni = $ticket_fecha;

            // $nuevafecha = date("d-m-Y",strtotime($ticket_fecha)); 
            // echo 'hola' .  $nuevafecha; 
            $fechaFin = date("Y-m-d H:i:s");

            // separo las partes de cada fecha
            list($iniDia, $iniHora) =  explode(" ", $fechaIni);
            list($anyo, $mes, $dia) =  explode("-", $iniDia);
            list($hora, $min, $seg) =  explode(":", $iniHora);
            $tiempoIni = mktime($hora + 0, $min + 0, $seg + 0, $mes + 0, $dia + 0, $anyo);

            // hago lo mismo para obtener el $tiempoFin
            list($finDia, $finHora) =  explode(" ", $fechaFin);
            list($anyo, $mes, $dia) =  explode("-", $finDia);
            list($hora, $min, $seg) =  explode(":", $finHora);
            $tiempoFin = mktime($hora + 0, $min + 0, $seg + 0, $mes + 0, $dia + 0, $anyo);


            // al restar los valores, obtenemos los SEGUNDOS de diferencia
            $diferencia = $tiempoFin - $tiempoIni;
            $minutosdif = $diferencia / 60;
            $horasdif = $minutosdif / 60;

            if($horasdif <= 24){
            //fecha en la que debe terminar el ticket
            // $fechafinal_ticket = date($fechaIni, (strtotime ("+24 Hours")));
            // $fechafinal_ticket = date("F j, Y, H:i"); 
            $fechafinal_ticket = date ('F j, Y, H:i', strtotime ('+ 1 day - 4 hours', strtotime($fechaIni)));
            //$fechafinal_ticket = date('H:s:i', $fechaIni);

            // $fechafinal_ticket = date('H:s:i', strtotime($fechaIni.'+ 24 hours + 0 minutes'));
            // $fechafinal_ticket = date("F j, Y, ".$fechafinal_ticket); 

            $arrayFecha = explode(",", $fechafinal_ticket);
            $contador = $arrayFecha[0]. ', ' . $arrayFecha[1]. ' ' . $arrayFecha[2] . ':0';
            print_r($contador); 

            //echo $fechafinal_ticket;
            
            //print_r($arrayFecha);
            //fecha actual
            
            $fechaFin = date("Y-m-d H:i:s");

            }else{
                //Cambiamos el estado 
                $query = $wpdb->update("wp_wsdesk_vendors_orders", array('estado_control' => "1"), array('id_tickets' => "$ticket"));

            }

        }   
		
    }

}

add_action('wp_ajax_nopriv_tickets_cuentatras', 'tickets_cuentatras');
add_action('wp_ajax_tickets_cuentatras', 'tickets_cuentatras');


// ASIGNACION FUNCTION ::
//----------------------------------

function asignacion(){

    global $wpdb;

    //tickets principales (solicitud)
    //--------------------------------
    
    $ticket_principal = $wpdb->get_results("SELECT * FROM wp_wsdesk_tickets as tickets , wp_wsdesk_ticketsmeta  as meta where meta.ticket_id=tickets.ticket_id and meta.meta_key='ticket_assignee' and tickets.ticket_parent = 0", ARRAY_A);
    
    foreach ($ticket_principal as $data) {

        //=> Variables
        $ticket = $data['ticket_id'];
        //$asignado = $data['meta_value'];
        $asignado = unserialize($data['meta_value']);
        if ($asignado){
             $asignadoListo = $asignado[0];
           //  echo $asignado[0];
    
                                            }else{
                                               // echo "No se encontraron datos"; 
                                                
                                            }

       
    //  echo $asignado[0];
        $ticket_fecha = $data['ticket_updated'];
        $respuesta = 0;

        //=> verificar si los tickets tienen respuesta de agentes 
        
       // echo "SELECT * FROM wp_wsdesk_tickets where ticket_parent='$ticket' and ticket_category='agent_reply'";
        $ticket_respuestas = $wpdb->get_results("SELECT * FROM wp_wsdesk_tickets where ticket_parent='$ticket' and ticket_category='agent_reply'", ARRAY_A);
        
        foreach ($ticket_respuestas as $dataTwo){
            $respuesta = 1;
        }
        

        //=> Si no tiene respuesta calcula las fechas
        if( $respuesta == 0 ){

            
            //=> Variables
            $fechaIni = $ticket_fecha;
	        $fechaFin = date("Y-m-d H:i:s");

            // separo las partes de cada fecha
            list($iniDia, $iniHora) =  explode(" ", $fechaIni);
            list($anyo, $mes, $dia) =  explode("-", $iniDia);
            list($hora, $min, $seg) =  explode(":", $iniHora);
            $tiempoIni = mktime($hora + 0, $min + 0, $seg + 0, $mes + 0, $dia + 0, $anyo);

            // hago lo mismo para obtener el $tiempoFin
            list($finDia, $finHora) =  explode(" ", $fechaFin);
            list($anyo, $mes, $dia) =  explode("-", $finDia);
            list($hora, $min, $seg) =  explode(":", $finHora);
            $tiempoFin = mktime($hora + 0, $min + 0, $seg + 0, $mes + 0, $dia + 0, $anyo);


            // al restar los valores, obtenemos los SEGUNDOS de diferencia
            $diferencia = $tiempoFin - $tiempoIni;
            $minutosdif = $diferencia / 60;
            $horasdif = $minutosdif / 60;

            if($horasdif >= 24){
		
                //se restan 2 dias a la fecha actual de calculo paracumplir con el requisito de 3 dias por atencon de tickes de manera que tenga esa restriccion
                $nuevafecha_fin = strtotime ( '-2 day' , strtotime ( $fechaFin ) ) ;
                $nuevafecha_fin = date ( 'Y-m-d H:i:s' , $nuevafecha_fin );	

                //query de busqueda de disponibilidad de psicologo
                // busca los mensajes enviados por los agentes le ordena por fechas a la mas actual
                //se compara con el id del meta mas el id parent que es el id del ticket usado en las respuestas
                // ademas que no tome en consideracion para asignar alque esta asignado en el ticket en cuestion
                // se toman 5 registro y elultimo sera el psicologo asignado
                // echo $asignado[0];
                $psicologo_disponible = $wpdb->get_results("SELECT * FROM wp_wsdesk_tickets as tickets , wp_wsdesk_ticketsmeta  as meta where meta.ticket_id=tickets.ticket_parent and meta.meta_key='ticket_assignee' and meta.meta_value!='$asignadoListo'  and tickets.ticket_category='agent_reply' and tickets.ticket_updated<'$nuevafecha_fin'  GROUP BY meta.meta_value  ORDER BY `tickets`.`ticket_updated` DESC LIMIT 5", ARRAY_A);
                //var_dump($psicologo_disponible);
                //echo $psicologo_disponible."<br>";
                // $disponible_psicologo = mysql_query($psicologo_disponible);
                $control = 0;
                
                foreach($psicologo_disponible as $disposicologo)
                {
                    $psicologo_asignado = unserialize($disposicologo["meta_value"]);
                    $vendor = (int)$psicologo_asignado[0];
                    $control = 1;
                    $psicologo_nuevo=$disposicologo["meta_value"];
                }
                
                //Si hay registros toma el ultimo
                if($control == 1){
                //=> Asignacion::
                
                $orden = $wpdb->get_results("SELECT * FROM wp_wsdesk_vendors_orders as orden where orden.id_tickets = $ticket", ARRAY_A);

                foreach($orden as $ordenData)
                {
                    $id_orden = $ordenData["id_orden"];
                }
                if(isset($id_orden)){

                $query = $wpdb->update("wp_pv_commission", array('vendor_id' => "$vendor"), array('order_id' => "$id_orden"));

                //var_dump($orden);
                //actualizamos la asignación del ticket de soporte y se asigna el ultimo
                $query = $wpdb->update("wp_wsdesk_ticketsmeta", array('meta_value' => "$psicologo_nuevo"), array('ticket_id' => "$ticket"));
                //se actualiza el control de orden y tickets
                 $query = $wpdb->update("wp_wsdesk_vendors_orders", array('id_vendors_psicologo' => "$vendor"), array('id_tickets' => "$ticket"));
                
                //actualizamos la asignación del ticket de soporte y se asigna el ultimo cambiando el vendedor segun el plugin 
                $query = $wpdb->update("wp_wsdesk_tickets", array('ticket_vendor' => "$vendor"), array('ticket_id' => "$ticket"));

                //$result = mysql_query($query);
            	//con el id vendedor ($vendor) ubicar  el correo del usuario

                 //envio de correo

                }else{  $control = 0; }

                }else{
                    $control = 0;
                }

			}
        }else{

	        //Si tiene respuesta reinicia la variable de control
            $respuesta = 0;
            
		}   
    }
    
    //var_dump($psicologo_disponible);
}

add_action( 'init', 'asignacion' );




function tickets_cuentatras_cierre(){

    GLOBAL $wpdb;

    //tickets con la categoria para habilitar el cuenta atras (solicitud)
    //--------------------------------

    if (is_user_logged_in()){

      
        $usuario = wp_get_current_user();
        $autor_ticket = $usuario->ID;

        
       /* $ticket_principal = $wpdb->get_results("SELECT * FROM wp_wsdesk_tickets as tickets , wp_wsdesk_vendors_orders  as ticketcontrol where tickets.ticket_id=$idTicket and ticketcontrol.categoria='94' and tickets.ticket_parent = 
        0 and tickets.ticket_author='$autor_ticket' LIMIT 1", ARRAY_A);*/
        
       
        $ticket_principal = $wpdb->get_results("SELECT * FROM wp_wsdesk_tickets as tickets , wp_wsdesk_vendors_orders  as ticketcontrol where ticketcontrol.id_tickets=tickets.ticket_id and ticketcontrol.categoria='94' and ticketcontrol.estado_control='0' and tickets.ticket_parent = 0 ", ARRAY_A);
       // print_r($ticket_principal);
        foreach ($ticket_principal as $data) {

            //=> Variables
            $ticket = $data['id_tickets'];
            //echo $asignado[0];
            //$ticket_fecha = $data['ticket_updated'];
            $ticket_fecha = $data['ticket_updated'];
            //=> calcula las fechas
            $fechaIni = $ticket_fecha;
            $fechaFin = date("Y-m-d H:i:s");

            // separo las partes de cada fecha
            list($iniDia, $iniHora) =  explode(" ", $fechaIni);
            list($anyo, $mes, $dia) =  explode("-", $iniDia);
            list($hora, $min, $seg) =  explode(":", $iniHora);
            $tiempoIni = mktime($hora + 0, $min + 0, $seg + 0, $mes + 0, $dia + 0, $anyo);

            // hago lo mismo para obtener el $tiempoFin
            list($finDia, $finHora) =  explode(" ", $fechaFin);
            list($anyo, $mes, $dia) =  explode("-", $finDia);
            list($hora, $min, $seg) =  explode(":", $finHora);
            $tiempoFin = mktime($hora + 0, $min + 0, $seg + 0, $mes + 0, $dia + 0, $anyo);


            // al restar los valores, obtenemos los SEGUNDOS de diferencia
            $diferencia = $tiempoFin - $tiempoIni;
            $minutosdif = $diferencia / 60;
            $horasdif = $minutosdif / 60;

            if($horasdif <= 24){
            //fecha en la que debe terminar el ticket
            // $fechafinal_ticket = date($fechaIni, (strtotime ("+24 Hours")));
            // $fechafinal_ticket = date("F j, Y, H:i"); 
            $fechafinal_ticket = date ('F j, Y, H:i', strtotime ('+ 1 day - 4 hours', strtotime($fechaIni)));
            //$fechafinal_ticket = date('H:s:i', $fechaIni);

            // $fechafinal_ticket = date('H:s:i', strtotime($fechaIni.'+ 24 hours + 0 minutes'));
            // $fechafinal_ticket = date("F j, Y, ".$fechafinal_ticket); 

            $arrayFecha = explode(",", $fechafinal_ticket);
            $contador = $arrayFecha[0]. ', ' . $arrayFecha[1]. ' ' . $arrayFecha[2] . ':0';
            //echo $contador;

            //echo $fechafinal_ticket;
            
            //print_r($arrayFecha);
            //fecha actual
            
            $fechaFin = date("Y-m-d H:i:s");

            }else{
                //Cambiamos el estado 
                $query = $wpdb->update("wp_wsdesk_vendors_orders", array('estado_control' => "1"), array('id_tickets' => "$ticket"));

            }

        }   
		
    }

}
add_action( 'init', 'tickets_cuentatras_cierre' );



//
// ==> SHORTCODE - CAROUSEL PRODUCTOS
//-------------------------------------

function carouselProducts() {

    $args = array( 'post_type' => 'product');
    $loop = new WP_Query( $args );
    $content = '';
    
    if ( $loop->have_posts() ) {
        $content .= '<div class="slick-products wrapper-carousel-products">';
        while ( $loop->have_posts() ) : $loop->the_post();
            $content .= '
                <article class="carousel-item">
                    <div class="item-header">
                        <figure>
                            <img src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'"/>
                        </figure>
                        <h2>'.get_the_title().'</h2>
                    </div>
                    <div class="item-content">
                        <p>'.substr(get_the_excerpt(), 0, 160).' [...]</p>
                    </div>
                    <div class="item-footer">
                        <a href="">Más Información</a>
                        <a href="'.get_permalink().'">Ordenar ahora</a>
                    </div>
                </article>
            ';
        endwhile;
        $content .= '</div>';
    } else {
        return 'No hay Productos Disponibles';
    }
    wp_reset_postdata();

    return $content;
}

add_shortcode('casousel_products', 'carouselProducts');


//
// ==> CUSTOM POST TYPE - BLOG ::
//-------------------------------------

add_action( 'init', 'customBlog' );

function customBlog() {
    $labels = array(
        'name' => _x( 'Blog', 'post type general name' ),
        'singular_name' => _x( 'blog', 'post type singular name' ),
        'add_new' => _x( 'Añadir nueva', 'Entrada' ),
        'add_new_item' => __( 'Añadir nueva Entrada' ),
        'edit_item' => __( 'Editar Entrada' ),
        'new_item' => __( 'Nueva Entrada' ),
        'view_item' => __( 'Ver Entrada' ),
        'search_items' => __( 'Buscar Entradas' ),
        'not_found' =>  __( 'No se han encontrado Entradas' ),
        'not_found_in_trash' => __( 'No se han encontrado Entradas en la papelera' ),
        'parent_item_colon' => '',
    );

    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_icon' => 'dashicons-admin-post',
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'blog', $args );
}


//
// ==> CUSTOM TAXONOMY - BLOG ::
//-------------------------------------

add_action( 'init', 'blog_taxonomies', 0 );

function blog_taxonomies() {
    $labels = array(
        'name' => _x( 'Categorias', 'taxonomy general name' ),
        'singular_name' => _x( 'Categoria', 'taxonomy singular name' ),
        'search_items' =>  __( 'Buscar por Categoria' ),
        'all_items' => __( 'Todas las Categorias' ),
        'parent_item' => __( 'Categoria padre' ),
        'parent_item_colon' => __( 'Categoria padre:' ),
        'edit_item' => __( 'Editar Categoria' ),
        'update_item' => __( 'Actualizar Categoria' ),
        'add_new_item' => __( 'Añadir nueva Categoria' ),
        'new_item_name' => __( 'Nombre de la nueva Categoria' ),
    );
    register_taxonomy( 'blog_categories', array( 'blog' ), array(
        'hierarchical' => true,
        'labels' => $labels, /* Aquí es donde se utiliza la variable $labels que hemos creado arriba*/
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'blog_categories' ),
    ));
}


//
// ==> LOOP CATEGORIES - BLOG ::
//-------------------------------------

function loop_categories(){
    
    $content;
    $taxonomies = get_object_taxonomies(array( 'post_type' => 'blog', 'orderby' => 'rand'));

    $content .= '<div class="blogCategories">';
    foreach ($taxonomies as $taxonomy) :
        $terms = get_terms($taxonomy);
        foreach ($terms as $term) :
            $content .= '<a class="'.$term->slug.'" href="'.get_term_link( $term ).'"><h2>'.$term->name.'</h2></a>';
        endforeach;
    endforeach;
    $content .= '</div>';

    return $content;
}

add_shortcode('blog_terms', 'loop_categories');

//
// ==> LOOP SECTION - BLOG ::
//-------------------------------------

function loop_blog() {
    
    $content;

    $args = array( 'post_type' => 'blog');
    $blog = new WP_Query($args);

    if ( $blog->have_posts() ) :
        while($blog->have_posts()) : $blog->the_post();
            $content .= '
                <article class="post-blog-item">
                    <div class="blog-header">
                        <p><span>'.get_the_date('F j, Y').'</span> <span>by: '.get_the_author().'</span></p>
                        <h2>'.get_the_title().'</h2>
                    </div>
                    <div class="blog-body">
                        <figure>
                            <img src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'">
                        </figure>
                        <div class="content-post">
                            <p>'.substr(get_the_excerpt(), 0, 160).' <span><a href="'.get_permalink().'">Leer Más</a></span></p>
                            <div>
                                
                            </div>
                        </div>
                    </div>    
                </article>
            ';
        endwhile;
    endif;


    // $taxonomies = get_object_taxonomies(array( 'post_type' => 'blog'));
    // foreach($taxonomies as $taxonomy){
    //     $terms = get_terms($taxonomy);
    //     foreach($terms as $term){
    //         $args = array(
    //             'post_type' => 'blog',
    //             'posts_per_page' => -1,
    //             'tax_query' => array(
    //             array(
    //                 'taxonomy' => $taxonomy,
    //                 'field' => 'slug',
    //                 'terms' => $term->slug,
    //             )
    //           )
    //         );

    //         $blog = new WP_Query($args);

    //         if ( $blog->have_posts() ) :
    //             while($blog->have_posts()) : $blog->the_post();
    //                 $content .= the_title();
    //             endwhile;
    //         endif;
    //     }
    // }
        
    //       $content .= $term->name;
    //       foreach($terms as $term) :
    //         $args = array(
    //           'post_type' => 'custom_blog',
    //           'posts_per_page' => -1,
    //           'tax_query' => array(
    //             array(
    //               'taxonomy' => $taxonomy,
    //               'field' => 'slug',
    //               'terms' => $term->slug,
    //             )
    //           )
    //         );
    //         $posts = new WP_Query($args);
    //         if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post();
    //         $titulo = get_the_title(); $test = get_the_content(); $content = json_decode($test);
    //         $queryTracks = new WP_Query(array('post_type' => 'track', 'order' => 'DESC', 'post__in' => $content));
    //         if( $queryTracks->have_posts() ): while ($queryTracks->have_posts()) : $queryTracks->the_post();
    //         endwhile; endif;
    //         endwhile; endif;
    //       endforeach;

    return $content;
}

add_shortcode('loop-posts', 'loop_blog');




add_filter('gettext',  'translate_text');
add_filter('ngettext',  'translate_text');
 
function translate_text($translated) {
     $translated = str_ireplace('¿Postularse para vendedor?',  '¿Postularse para terapeuta o psicólogo?',  $translated);
      $translated = str_ireplace('Tienda',  'Tienda de Servicios',  $translated);
      $translated = str_ireplace('Vendido por Por',  'Servicio ofrecido Por:',  $translated);
       $translated = str_ireplace('Requester',  'Solicitante',  $translated);
     return $translated;
}


add_filter('gettext',  'translate_text2');
add_filter('ngettext',  'translate_text2');
 
function translate_text2($translated) {
      $translated = str_ireplace('Vendido por:','Servicio ofrecido Por:',  $translated);
     return $translated;
}



function my_text_strings( $translated_text, $text, $domain ) {
 switch ( $translated_text ) {
 case 'ir a la tienda' :
 $translated_text = __( 'Conocer Servicios', 'woocommerce' );
 break;
 case 'No se ha hecho ningún pedido todavía.' :
 $translated_text = __( 'No se ha hecho ninguna Consulta todavía.', 'woocommerce' );
 break;
 case 'Volver a la tienda' :
 $translated_text = __( 'Conocer Servicios', 'woocommerce' );
 break;
 case 'Productos relacionados' :
 $translated_text = __( 'Servicios Relacionados', 'woocommerce' );
 break;
 case 'Producto' :
 $translated_text = __( 'Servicios', 'woocommerce' );
 break;
 case 'Tienda' :
 $translated_text = __( 'Sección de Servicios', 'woocommerce' );
 break;
 case 'Pedidos' :
 $translated_text = __( 'Solicitar Consulta', 'woocommerce' );
 break;
 case 'Vendido por:' :
 $translated_text = __( 'Servicio ofrecido Por:', 'woocommerce' );
 break;
  case 'Tu pedido' :
 $translated_text = __( 'Tu Servicio:', 'woocommerce' );
 break;
   case 'Información adicional' :
 $translated_text = __( 'Información adicional para su solicitud:', 'woocommerce' );
 break;
   case 'Notas del pedido' :
 $translated_text = __( 'Notas de la solicitud:', 'woocommerce' );
 break;
   case 'Notas sobre tu pedido, por ejemplo, notas especiales para la entrega.' :
 $translated_text = __( 'Notas sobre tus síntomas , por ejemplo, notas especiales para determinar tu atención.:', 'woocommerce' );
 break;
 
 
 }
 return $translated_text;
}
add_filter( 'gettext', 'my_text_strings', 20, 8 );


/*Fin de adecuación de codigo

*Proceso: Modificacion de my-count para agregar el link de historico de ticket

*Empresa: OpperWeb

* */