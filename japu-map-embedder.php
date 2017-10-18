<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.japuapp.com.br/
 * @since             1.0.0
 * @package           Japu_Map_Embedder
 *
 * @wordpress-plugin
 * Plugin Name:       Japu Map Embedder
 * Plugin URI:        https://www.japuapp.com.br/plugins/japu-map-embedder/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Celso Bessa
 * Author URI:        https://www.japuapp.com.br/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       japu-map-embedder
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-japu-map-embedder-activator.php
 */
function activate_japu_map_embedder() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-japu-map-embedder-activator.php';
	Japu_Map_Embedder_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-japu-map-embedder-deactivator.php
 */
function deactivate_japu_map_embedder() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-japu-map-embedder-deactivator.php';
	Japu_Map_Embedder_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_japu_map_embedder' );
register_deactivation_hook( __FILE__, 'deactivate_japu_map_embedder' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-japu-map-embedder.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_japu_map_embedder() {

	$plugin = new Japu_Map_Embedder();
	$plugin->run();

}
run_japu_map_embedder();
