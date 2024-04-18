<?php
/**
 * Radio Button Field.
 *
 * @package     TravelpayoutsSettingsFramework/Fields
 * @author      Dovy Paukstys & Kevin Provance (kprovance)
 * @version     4.0.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux_Travelpayouts_Radio', false ) ) {

	/**
	 * Class Redux_Travelpayouts_Radio
	 */
	class Redux_Travelpayouts_Radio extends Redux_Travelpayouts_Field {

		/**
		 * Field Render Function.
		 * Takes the vars and outputs the HTML for the field in the settings
		 *
		 * @since TravelpayoutsSettingsFramework 1.0.0
		 */
		public function render() {
			if ( ! empty( $this->field['data'] ) && empty( $this->field['options'] ) ) {
				if ( empty( $this->field['args'] ) ) {
					$this->field['args'] = array();
				}

				if ( is_array( $this->field['data'] ) ) {
					$this->field['options'] = $this->field['data'];
				} else {
					$this->field['options'] = $this->parent->get_wordpress_data( $this->field['data'], $this->field['args'], $this->value );
				}
			}

			$this->field['data_class'] = ( isset( $this->field['multi_layout'] ) ) ? 'data-' . $this->field['multi_layout'] : 'data-full';

			if ( ! empty( $this->field['options'] ) ) {
				echo '<ul class="' . esc_attr( $this->field['data_class'] ) . '">';

				foreach ( $this->field['options'] as $k => $v ) {
					echo '<li>';
					echo '<label class="tp-radio-wrapper" for="' . esc_attr( $this->field['id'] . '_' . array_search( $k, array_keys( $this->field['options'] ), true ) ) . '">';
					echo '<input 
							type="radio" 
							class="radio  tp-input tp-radio ' . esc_attr( $this->field['class'] ) . '" 
							id="' . esc_attr( $this->field['id'] . '_' . array_search( $k, array_keys( $this->field['options'] ), true ) ) . '" 
							name="' . esc_attr( $this->field['name'] . $this->field['name_suffix'] ) . '" 
							value="' . esc_attr( $k ) . '" ' . checked( $this->value, $k, false ) . '/>';

					echo ' <span class="tp-radio-label">' . $v . '</span>';
					echo '</label>';
					echo '</li>';
				}

				echo '</ul>';
			}
		}
	}
}

class_alias( 'Redux_Travelpayouts_Radio', 'TravelpayoutsSettingsFramework_Radio' );