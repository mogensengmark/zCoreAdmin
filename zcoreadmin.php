<?php
/*
Plugin Name: zCoreAdmin
Plugin URI: http://www.zcore.dk
Description: Administration interface for zCore Administration System
Version: 0.1
Author: Mogens Engmark
Author URI: http://www.zcore.dk
License: No Licence.
*/

if(!class_exists(zCoreAdmin)) {
	class zCoreAdmin
	
	{
		// Internal variables
		private $_modulePath;
		private $_moduleUrl;
		private $_registrationFormModule;

		function __construct()
		{
			// Define internal variables
			$this->zCoreVariables();

			// Register module stylesheets
			$this->zCoreStylesheets();

			// Defining actions
			$this->zCoreActions();

			// Define shorttags
			$this->zCoreShortCodes();

		}

		/**
		 * Defining internal variables
		 **/
		private function zCoreVariables()
		{
			// Modules base path
			$this->_modulePath = dirname(__FILE__) . "/modules";
			// Modules url
			$this->_moduleUrl = plugin_dir_url(__FILE__) . "/modules";

			// registrationForm-module
			$this->_registrationFormModule = $this->_modulePath . "/registrationForm";
		}

		/**
		 * Register stylesheets for later use
		 **/
		private function zCoreStylesheets()
		{
			// Registration Form Stylesheet
			wp_register_style( 'registrationForm', $this->_moduleUrl . "/registrationForm/css/registrationForm01.css" );
			
		}


		/**
		 * Defining actions
		 **/
		private function zCoreActions()
		{
			add_action('admin_menu', array( $this, 'zCoreAdminMenu') );
		}

		/**
		 * Defining shortcodes
		 **/
		private function zCoreShortCodes()
		{
			// Registration Form Shortcodes
			add_shortcode( 'zCoreRegistrationForm', array( $this, 'zCoreRegistrationForm') );
			add_shortcode( 'hest', array( $this, 'zCoreRegistrationForm') );
		}
		/**
		 * Menu structures
		 **/
		private function zCoreAdminMenu()
		{
			// Setting up menu elements
			// Add menu page makes a toplevel menu item.  
			// add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
			add_menu_page( 'zCoreAdmin', 'zCoreAdmin', 'manage_options', __FILE__, array( $this, 'zCoreAdminInterface'), '', '100' );
			//add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function);
			//add_submenu_page( __FILE__, 'zCoreAdmin Registration Form', 'Registration Form', 'manage_options', dirname(__FILE__) . '/modules/registrationForm/registraionForm.php', 'hest');

		}

		/**
		 * Admin interface
		 **/
		function zCoreAdminInterface()
		{
?>
		<div class="wrap">
			<h4>zCoreAdmin</h4>
			Dette er administrationspanelet til zCoreAdmin funktionaliteter.
			<?= dirname(__FILE__) ?>
		</div>
<?php
		}


		/**
		 *  Registration form module
		 **/
		function zCoreRegistrationForm ()
		{
			// Load css
			wp_enqueue_style( 'registrationForm' );
			// Load module
			require_once $this->_registrationFormModule . "/registrationForm.php";
		}


	}
}


/*




function zCoreAdminRegistrationForm_admin()
{
?>	
<?php



}

*/
$hest = new zCoreAdmin();

?>