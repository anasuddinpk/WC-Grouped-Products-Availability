<?php
/**
 * Main Loader.
 *
 * @package products-availability
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'WGPA_Loader' ) ) {
	/**
	 * Class WGPA_Loader
	 */
	class WGPA_Loader {

		/**
		 *  Constructor.
		 */
		public function __construct() {
			$this->includes();
		}

		/**
		 * Includes files depend on platform
		 */
		public function includes() {
            
		}

	}

    //Instantiating.
    new WGPA_Loader();
}
