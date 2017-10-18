<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.japuapp.com.br/
 * @since      1.0.0
 *
 * @package    Japu_Map_Embedder
 * @subpackage Japu_Map_Embedder/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Japu_Map_Embedder
 * @subpackage Japu_Map_Embedder/includes
 * @author     Celso Bessa <devteam@japuapp.com.br>
 */
class Japu_Map_Embedder_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'japu-map-embedder',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
