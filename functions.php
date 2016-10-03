<?php
/**This file is part of Vertical-Ascent wordpress theme

Vertical-Ascent is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Vertical-Ascent is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Vertical-Ascent. If not, see <http://www.gnu.org/licenses/>.
**/

add_theme_support( 'post-thumbnails' );

//para habilitar que se pueda elegir la imagen de fondo de la cabecera
//add_theme_support( 'custom-header' );
global $wp_version;
if ( version_compare( $wp_version, '3.4', '>=' ) ) {
	$args = array(
		'flex-width'    => true,
		'width'         => 1920,
		'flex-height'    => true,
		'height'        => 1080,
		'default-image' => get_template_directory_uri() . '/images/header.jpg',			
	);
	add_theme_support( 'custom-header', $args );
} else
	add_custom_image_header( $wp_head_callback, $admin_head_callback );

//load the specific javascript's file of the theme
wp_enqueue_script( 'my-ascending-themecustomize', get_template_directory_uri().'/js/theme-customize.js', array('jquery'), '', true);

/**
 * @author bisabel
 * @param unknown $page_id
 * @return string
 */
function get_article_html($page_id){
	$header_html = "<article  class=\"fondo_imagen\" >";
	if ( get_page_template_slug($page_id) ){
		$header_html = "<article  class=\"fondo_imagen\" style=\"background-image: url(";
		if (has_post_thumbnail( $page_id ))
			$header_html .=  wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'single-post-thumbnail' )[0];
		else $header_html .= 'https://source.unsplash.com/category/buildings';
			$header_html .= "\" >";
	}
	return $header_html;
}

add_action( 'customize_register' , 'vertical_ascent_options' );

function vertical_ascent_options( $wp_customize ) {
	$wp_customize->add_section(
		'vertical_ascent_footer_options',
		array(
			'title'       => __( 'Footer Settings', 'vertical_ascent' ),
			'priority'    => 100,
			'capability'  => 'edit_theme_options',
			'description' => __('Change footer options here.', 'vertical_ascent'),
		)
	);
	$wp_customize->add_setting( 'footer_textarea', array() );
	$wp_customize->add_setting( 'footer_text', array() );
	$wp_customize->add_setting( 'footer_textarea2', array() );
	$wp_customize->add_setting( 'footer_text2', array() );
	$wp_customize->add_setting( 'footer_textarea3', array() );
	$wp_customize->add_setting( 'footer_text3', array() );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'footer_text_control',
		array(
			'label'          => __( 'Titulo del primer apartado', 'vertical_ascent' ),
			'section'        => 'vertical_ascent_footer_options',
			'settings'       => 'footer_text',
			'type'           => 'text'
		)
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'footer_textarea_control',
		array(
			'label'          => __( 'Texto del primer apartado', 'vertical_ascent' ),
			'section'        => 'vertical_ascent_footer_options',
			'settings'       => 'footer_textarea',
			'type'           => 'textarea'
		)
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'footer_text_control2',
		array(
				'label'          => __( 'Titulo del segundo apartado', 'vertical_ascent' ),
				'section'        => 'vertical_ascent_footer_options',
				'settings'       => 'footer_text2',
				'type'           => 'text'
		)
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'footer_textarea_control2',
		array(
				'label'          => __( 'Texto del segundo apartado', 'vertical_ascent' ),
				'section'        => 'vertical_ascent_footer_options',
				'settings'       => 'footer_textarea2',
				'type'           => 'textarea'
		)
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'footer_text_control3',
		array(
				'label'          => __( 'Titulo del tercer apartado', 'vertical_ascent' ),
				'section'        => 'vertical_ascent_footer_options',
				'settings'       => 'footer_text3',
				'type'           => 'text'
		)
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'footer_textarea_control3',
		array(
				'label'          => __( 'Texto del tercer apartado', 'vertical_ascent' ),
				'section'        => 'vertical_ascent_footer_options',
				'settings'       => 'footer_textarea3',
				'type'           => 'textarea'
		)
		)
	);
}
