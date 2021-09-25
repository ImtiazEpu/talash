<?php
/**
 * Main class for the frontend.
 *
 * @link       https://abmsourav.com/
 *
 * @package    talash
 * @author     sourav926 
 */
namespace Talash\View;

use Talash\View\Template_Api;
use Talash_Elementor_Widget_Register;


class Talash_Public {

	static function load_frontend() {
		self::load_dependencies();

		Assets_Manager::init();
		Template_Api::load_api();
		Talash_Elementor_Widget_Register::init();

		add_shortcode( 'talash-search', [ __CLASS__, 'shortcode_markup' ] );
	}

	static function load_dependencies() {
		require_once TALASH_DIR_PATH . 'public/classes/assets_meneger.php';
		require_once TALASH_DIR_PATH . 'public/classes/filter.php';
		require_once TALASH_DIR_PATH . 'public/classes/template-markup.php';
		require_once TALASH_DIR_PATH . 'public/classes/template-api.php';
		require_once TALASH_DIR_PATH . 'widgets/elementor_widget/RegisterExtension.php';

	}

	static function shortcode_markup() {
		ob_start();
			require_once TALASH_DIR_PATH . 'public/template.php';
		return ob_get_clean();
	}

}
