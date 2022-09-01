<?php
/**
 * Adding MOQ Tab Setting Fields.
 *
 * @package products-availability
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'WGPA_Change_Availability_Notice' ) ) {

	/**
	 * Class WGPA_Change_Availability_Notice.
	 */
	class WGPA_Change_Availability_Notice{

		/**
		 *  Constructor.
		 */
		public function __construct() {
			add_filter( 'woocommerce_bundle_front_end_params', array( $this, 'sw_pb_hide_bundle_sells_description'), 99 );
	    }
        
        /**
         *  Customizing the 
         */
        function sw_pb_hide_bundle_sells_description( $params ) {
            $params = array(
                /* translators: %1$s: Stock status*/
                'i18n_insufficient_stock_list'   => sprintf( _x( '<p class="stock out-of-stock insufficient-stock">%1$s</p>', 'insufficiently stocked items template', 'products-availability' ), $insufficient_stock_string )
            );
            return $params;
        }

    }

    //Instantiating.
    new WGPA_Change_Availability_Notice();
}