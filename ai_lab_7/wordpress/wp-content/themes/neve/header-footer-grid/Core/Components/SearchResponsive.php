<?php
/**
 * Button Component class for Header Footer Grid.
 *
 * Name:    Header Footer Grid
 * Author:  Bogdan Preda <bogdan.preda@themeisle.com>
 *
 * @version 1.0.0
 * @package HFG
 */

namespace HFG\Core\Components;

use HFG\Core\Settings\Manager as SettingsManager;
use HFG\Main;
use WP_Customize_Manager;

/**
 * Class SearchResponsive
 *
 * @package HFG\Core\Components
 */
class SearchResponsive extends Abstract_Component {

	const COMPONENT_ID   = 'header_search_responsive';
	const PLACEHOLDER_ID = 'placeholder';

	/**
	 * Button constructor.
	 *
	 * @since   1.0.0
	 * @access  public
	 */
	public function init() {
		$this->set_property( 'label', __( 'Search Icon', 'neve' ) );
		$this->set_property( 'id', self::COMPONENT_ID );
		$this->set_property( 'width', 1 );
		$this->set_property( 'icon', 'search' );
		$this->set_property( 'is_auto_width', true );
		$this->set_property(
			'default_padding_value',
			array(
				'mobile'       => array(
					'top'    => 0,
					'right'  => 10,
					'bottom' => 0,
					'left'   => 10,
				),
				'tablet'       => array(
					'top'    => 0,
					'right'  => 10,
					'bottom' => 0,
					'left'   => 10,
				),
				'desktop'      => array(
					'top'    => 0,
					'right'  => 10,
					'bottom' => 0,
					'left'   => 10,
				),
				'mobile-unit'  => 'px',
				'tablet-unit'  => 'px',
				'desktop-unit' => 'px',
			) 
		);
	}

	/**
	 * Called to register component controls.
	 *
	 * @since   1.0.0
	 * @access  public
	 */
	public function add_settings() {

		SettingsManager::get_instance()->add(
			[
				'id'                => self::PLACEHOLDER_ID,
				'group'             => self::COMPONENT_ID,
				'tab'               => SettingsManager::TAB_GENERAL,
				'transport'         => 'post' . self::COMPONENT_ID,
				'sanitize_callback' => 'wp_filter_nohtml_kses',
				'default'           => __( 'Search for...', 'neve' ),
				'label'             => __( 'Placeholder', 'neve' ),
				'type'              => 'text',
				'section'           => $this->section,
			]
		);

	}

	/**
	 * The render method for the component.
	 *
	 * @since   1.0.0
	 * @access  public
	 */
	public function render_component() {
		add_filter( 'get_search_form', [ $this, 'change_placeholder' ] );
		Main::get_instance()->load( 'components/component-search-responsive' );
		remove_filter( 'get_search_form', [ $this, 'change_placeholder' ] );
	}

	/**
	 * Change the form placeholder.
	 *
	 * @param string $form form markup.
	 *
	 * @return string
	 */
	public function change_placeholder( $form ) {
		$form        = '';
		$placeholder = get_theme_mod( $this->id . '_placeholder', __( 'Search for...', 'neve' ) );

		$form .= '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">';
		$form .= '<label>';
		$form .= '<span class="screen-reader-text">' . __( 'Search for...', 'neve' ) . '</span>';
		$form .= '<input type="search" class="search-field" placeholder="' . esc_html( $placeholder ) . '" value="" name="s">';
		$form .= '</label>';
		$form .= '<input type="submit" class="search-submit" value="Search">';
		$form .= '</form>';

		return $form;
	}
}