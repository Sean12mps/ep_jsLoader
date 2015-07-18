<?php 

if ( isset( $_GET['cmd'] ) ) {

        if ( $_GET['cmd'] == 'get_cdn_list' ) {

                $response = array(
                	'clockworks'=>'clockclock',
                	'clockworks2'=>'clockclock2'
                );
        endif;
        }

        echo $_GET['callback']."(".json_encode( $response ).")";

} else {
        echo "Kindly leave this page.";
}