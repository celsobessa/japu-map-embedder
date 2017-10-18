<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.japuapp.com.br/
 * @since      0.1.0
 *
 * @package    Japu_Map_Embedder
 * @subpackage Japu_Map_Embedder/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Japu_Map_Embedder
 * @subpackage Japu_Map_Embedder/admin
 * @author     Celso Bessa <devteam@japuapp.com.br>
 */
class Japu_Map_Embedder_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    0.1.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Japu_Map_Embedder_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Japu_Map_Embedder_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/japu-map-embedder-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    0.1.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Japu_Map_Embedder_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Japu_Map_Embedder_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/japu-map-embedder-admin.js', array( 'jquery' ), $this->version, false );

	}
	/**
	 * Add settings customizer panels, sections and controls.
	 *
	 * @since    0.1.0
	 */



	/**
	 * @summary        adds Japu - Rota Das Vertentes app settings
	 *
	 * @description    adds Japu - Rota Das Vertentes app settings to the customizer
	 *
	 * @since     0.1.0
	 * @param     void
	 * @return    void
	 */

	public function add_customizer_options() {
		global $wp_customize;


		/* ## Japu App Section
		----------------------------------*/
		$wp_customize->add_section('japu_app_section', array(
			'title' => __('Japu App Integration', $this->plugin_name),
			'priority' => 120,
			'description' => __('integrate your website to Japu - Rota das Vertentes App ', $this->plugin_name),
			'capability' => 'edit_theme_options',
		));


		$wp_customize->add_setting('japu_partner_id', array(
			'default'    => get_option('japu_partner_id'),
			'capability' => 'edit_theme_options',
			'default'     => 0,
			'type'       => 'option',
			'sanitize_callback' => 'absint',
			'validate_callback' => array($this , 'sanitize_number_absint'),
		));
		$wp_customize->add_control('japu_partner_id', array(
			'label' => __('Your Japu Partner ID number', $this->plugin_name),
			'section' => 'japu_app_section',
			'type' => 'text',
		));

	}

	/**
	 * @summary        Validates Japu Partner ID
	 *
	 * @description    validates Japu - Rota Das Vertentes app Partner ID
	 *
	 * @since     0.1.0
	 * @param     object    $validity
	 * @param     mixed     $value      The value to be validated
	 * @return    object    $validity   The validated object
	 */
	function validate_japu_partner_id($validity, $value)
	{
		$value = intval($value);
		if (empty($value) || !is_numeric($value)) {
			$validity->add('required', __('You must supply a valid numeric ID.', $this->plugin_name));
		} elseif ($value < 1) {
			$validity->add('id_too_small', __('ID should be greater than zero.', $this->plugin_name));
		}
		return $validity;
	}

}
