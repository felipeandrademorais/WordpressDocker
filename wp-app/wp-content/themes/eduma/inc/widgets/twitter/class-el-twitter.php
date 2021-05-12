<?php
/**
 * Thim_Builder Elementor Twitter widget
 *
 * @version     1.0.0
 * @author      ThimPress
 * @package     Thim_Builder/Classes
 * @category    Classes
 * @author      Thimpress, tuanta
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Thim_Builder_El_Twitter' ) ) {
	/**
	 * Class Thim_Builder_El_Twitter
	 */
	class Thim_Builder_El_Twitter extends Thim_Builder_El_Widget {

		/**
		 * @var string
		 */
		protected $config_class = 'Thim_Builder_Config_Twitter';

		/**
		 * Register controls.
		 */
		protected function _register_controls() {
			$this->start_controls_section(
				'el-twitter', [ 'label' => esc_html__( 'Thim: Twitter', 'eduma' )]
			);

			$controls = \Thim_Builder_El_Mapping::mapping( $this->options() );

			foreach ( $controls as $key => $control ) {
				$this->add_control( $key, $control );
			}

			$this->end_controls_section();
		}
	}
}