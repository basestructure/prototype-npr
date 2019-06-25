<?php
/* SETUP | /CONFIG | 2911_SETUP | BLOCK-EDITOR-SETTINGS.PHP - 2019-04-02 */
/**
 * Block Editor settings specific to Genesis Sample.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

$genesis_sample_link_color            = get_theme_mod( 'genesis_sample_link_color', genesis_sample_customizer_get_default_link_color() );
$genesis_sample_link_color_contrast   = genesis_sample_color_contrast( $genesis_sample_link_color );
$genesis_sample_link_color_brightness = genesis_sample_color_brightness( $genesis_sample_link_color, 35 );

return array(
	'admin-fonts-url'              => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700',
	'content-width'                => 1024,
	'default-button-bg'            => $genesis_sample_link_color,
	'default-button-color'         => $genesis_sample_link_color_contrast,
	'default-button-outline-hover' => $genesis_sample_link_color_brightness,
	'default-link-color'           => $genesis_sample_link_color,
	'editor-color-palette'         => array(
		array(
			'name'  => __( 'Custom color', 'genesis-sample' ), // Called “Link Color” in the Customizer options. Renamed because “Link Color” implies it can only be used for links.
			'slug'  => 'theme-primary',
			'color' => get_theme_mod( 'genesis_sample_link_color', genesis_sample_customizer_get_default_link_color() ),
		),
		array(
			'name'  => __( 'Accent color', 'genesis-sample' ),
			'slug'  => 'theme-secondary',
			'color' => get_theme_mod( 'genesis_sample_accent_color', genesis_sample_customizer_get_default_accent_color() ),
		),
		array(
			'name'  => __( 'White', 'setup-2801' ),
			'slug'  => 'white',
			'color' => '#ffffff',
		),
		array(
			'name'  => __( 'Light gray', 'setup-2801' ),
			'slug'  => 'light-gray',
			'color' => '#f5f5f5',
		),
		array(
			'name'  => __( 'Medium gray', 'setup-2801' ),
			'slug'  => 'medium-gray',
			'color' => '#999',
		),
		array(
			'name'  => __( 'Dark gray', 'setup-2801' ),
			'slug'  => 'dark-gray',
			'color' => '#333',
		),
		array(
			'name'  => __( 'Black', 'setup-2801' ),
			'slug'  => 'black',
			'color' => '#000000',
		),
		array(
			'name'  => __( 'Red', 'setup-2801' ),
			'slug'  => 'red',
			'color' => '#cc0000',
		),
		array(
			'name'  => __( 'Orange', 'setup-2801' ),
			'slug'  => 'orange',
			'color' => '#ff7b00',
		),
		array(
			'name'  => __( 'Yellow', 'setup-2801' ),
			'slug'  => 'yellow',
			'color' => '#ffbb00',
		),
		array(
			'name'  => __( 'Green', 'setup-2801' ),
			'slug'  => 'green',
			'color' => '#66cc00',
		),
		array(
			'name'  => __( 'Violet', 'setup-2801' ),
			'slug'  => 'violet',
			'color' => '#b882ee',
		),
		array(
			'name'  => __( 'Blue', 'setup-2801' ),
			'slug'  => 'blue',
			'color' => '#0066cc',
		),
	),
	'editor-font-sizes'            => array(
		array(
			'name'      => __( 'Tiny', 'setup-2801' ),
			'size'      => 12,
			'slug'      => 'tiny',
		),
		array(
			'name'      => __( 'XXXSmall', 'setup-2801' ),
			'size'      => 14,
			'slug'      => 'xxxsmall',
		),
		array(
			'name'      => __( 'XXSmall', 'setup-2801' ),
			'size'      => 16,
			'slug'      => 'xxsmall',
		),
		array(
			'name'      => __( 'XSmall', 'setup-2801' ),
			'size'      => 20,
			'slug'      => 'xsmall',
		),
		array(
			'name'      => __( 'Small', 'setup-2801' ),
			'size'      => 24,
			'slug'      => 'small',
		),
		array(
			'name'      => __( 'Medium', 'setup-2801' ),
			'size'      => 34,
			'slug'      => 'medium',
		),
		array(
			'name'      => __( 'Large', 'setup-2801' ),
			'size'      => 48,
			'slug'      => 'large',
		),
		array(
			'name'      => __( 'XLarge', 'setup-2801' ),
			'size'      => 64,
			'slug'      => 'xlarge',
		),
	),
);
