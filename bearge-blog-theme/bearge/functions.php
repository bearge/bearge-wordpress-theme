<?php

/**
 * Register our sidebars and widgetized areas.
 *
 */
function bearge_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div class="sidebar-widget"> ',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="sidebar-widget-title">',
		'after_title'   => '</span>'
	) );
}
add_action( 'widgets_init', 'bearge_widgets_init' );
add_theme_support( 'custom-background' );
	
function bearge_theme_customizer( $wp_customize ) {



	// TODO: i18n texts

	// ----------------------------------------------------------------------------------------- //
	// Custom logo section
	$wp_customize->add_section( 'bearge_logo_section' , array(
	    'title'       => __( 'Logo', 'section_logo' ),
	    'priority'    => 1,
	    'description' => 'Upload a logo to replace the default site name and description in the header',
	) );

	$wp_customize->add_setting( 'bearge_logo' );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_control', array(
	    'label'    => __( 'Logo', 'bearge_logo' ),
	    'section'  => 'bearge_logo_section',
	    'settings' => 'bearge_logo',
		'priority' => 1,
	) ) );
	
	// Logo image position
	$wp_customize->add_setting( 'bearge_logo_position', array(
			'default'  		 => 'left',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'logo_position_control', array(
			'label'    => __( 'Logo position', 'bearge_logo_position' ),
			'section'  => 'bearge_logo_section',
			'settings' => 'bearge_logo_position',
			'priority' => 2,
			'type'           => 'radio',
			'choices'        => array(
					'left'   => __( 'Left' ),
					'center'  => __( 'Center' ),
					'right'  => __( 'Right' ),
			),
	) ) );
	// ----------------------------------------------------------------------------------------- //
	
	// ----------------------------------------------------------------------------------------- //
	//  Color Section
	$wp_customize->add_section( 'bearge_general_section' , array(
	    'title'       => __( 'General', 'section_general' ),
	    'priority'    => 2,
	    'description' => 'Customize general settings',
	) );
	

	
	// Background color
	$wp_customize->add_setting( 'bearge_background_color' );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color_control', array(
	    'label'    => __( 'Background Color', 'bearge_background_color' ),
	    'section'  => 'bearge_general_section',
	    'settings' => 'bearge_background_color',
		'priority' => 1,
	) ) );
	
	
	// Text color
	$wp_customize->add_setting( 'bearge_text_color' );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color_control', array(
	    'label'    => __( 'Text Color', 'bearge_text_color' ),
	    'section'  => 'bearge_general_section',
	    'settings' => 'bearge_text_color',
		'priority' => 2,
	) ) );

	// Link color
	$wp_customize->add_setting( 'bearge_link_color' );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color_control', array(
	    'label'    => __( 'Link Color (link, visited, active)', 'bearge_link_color' ),
	    'section'  => 'bearge_general_section',
	    'settings' => 'bearge_link_color',
		'priority' => 3,
	) ) );
	
	
	// Link hover color
	$wp_customize->add_setting( 'bearge_link_hover_color' );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover_color_control', array(
	    'label'    => __( 'Link Color (hover, focus)', 'bearge_link_hover_color' ),
	    'section'  => 'bearge_general_section',
	    'settings' => 'bearge_link_hover_color',
		'priority' => 4,
	) ) );
	
	
	// Decoration border color
	$wp_customize->add_setting( 'bearge_decoration_border_color' );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'decoration_border_color_control', array(
		'label'    => __( 'Decoration Border Color', 'bearge_decoration_border_color' ),
		'section'  => 'bearge_color_section',
		'settings' => 'bearge_decoration_border_color',
		'priority' => 5,
	) ) );
	
	// Enable decoration border color 
	$wp_customize->add_setting( 'bearge_decoration_border_color_enabled', array(
			'default'        => '1',
	) );
	
	$wp_customize->add_control( 'bearge_decoration_border_color_enabled', array(
			'label'   => __(  'Enable Decoration Border Color', 'bearge_decoration_border_color_enabled'),
			'section' => 'bearge_color_section',
			'type'    => 'checkbox',
			'priority' => 6,
	) );
	// ----------------------------------------------------------------------------------------- //


	// ----------------------------------------------------------------------------------------- //
	// Header Section
	$wp_customize->add_section( 'bearge_header_section' , array(
			'title'       => __( 'Header', 'section_header' ),
			'priority'    => 3,
			'description' => 'Customize header',
	) );
	
	// Header background color
	$wp_customize->add_setting( 'bearge_header_background_color' );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_color_control', array(
			'label'    => __( 'Header Color', 'bearge_header_background_color' ),
			'section'  => 'bearge_header_section',
			'settings' => 'bearge_header_background_color',
			'priority' => 1,
	) ) );
	
	// Header background transparency
	$wp_customize->add_setting( 'bearge_header_background_transparency', array(
			'default'  		 => '1',
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_background_transparency_control', array(
			'label'    => __( 'Header background color transparency (value between 0 and 1)', 'bearge_header_background_transparency' ),
			'section'  => 'bearge_header_section',
			'settings' => 'bearge_header_background_transparency',
			'priority' => 2,
	) ) );
	
	// Header text color
	$wp_customize->add_setting( 'bearge_header_text_color' );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_text_color_control', array(
			'label'    => __( 'Header text color', 'bearge_header_text_color' ),
			'section'  => 'bearge_header_section',
			'settings' => 'bearge_header_text_color',
			'priority' => 3,
	) ) );

	// Heaeder height
	$wp_customize->add_setting( 'bearge_header_height' );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'heaeder_height_control', array(
			'label'    => __( 'Header height', 'bearge_header_height' ),
			'section'  => 'bearge_header_section',
			'settings' => 'bearge_header_height',
			'priority' => 4,
	) ) );
	
	
	// Heaeder background image
	$wp_customize->add_setting( 'bearge_header_background' );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_background_control', array(
			'label'    => __( 'Header background image', 'bearge_header_background' ),
			'section'  => 'bearge_header_section',
			'settings' => 'bearge_header_background',
			'priority' => 5,
	) ) );
	
	// Heaeder background image size
	$wp_customize->add_setting( 'bearge_header_background_size' , array(
			'default'  		 => 'cover',
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_background_size_control', array(
			'label'    => __( 'Header background size', 'bearge_header_background_size' ),
			'section'  => 'bearge_header_section',
			'settings' => 'bearge_header_background_size',
			'priority' => 6,
			'type'           => 'radio',
			'choices'        => array(
					'length'   => __( 'Length' ),
					'percentage'  => __( 'Percentage' ),
					'cover'  => __( 'Cover' ),
					'contain'  => __( 'Contain' ),
			)
	) ) );
	
	// Heaeder background image repeat
	$wp_customize->add_setting( 'bearge_header_background_repeat', array(
			'default'  		 => 'no-repeat',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_background_repeat_control', array(
			'label'    => __( 'Header background repeat', 'bearge_header_background_repeat' ),
			'section'  => 'bearge_header_section',
			'settings' => 'bearge_header_background_repeat',
			'priority' => 7,
			'type'           => 'radio',
			'choices'        => array(
					'no-repeat'   => __( 'No Repeat' ),
					'repeat'  => __( 'Tile' ),
					'repeat-x'  => __( 'Tile vertically' ),
					'repeat-y'  => __( 'Tile horizontally' ),
			),
	) ) );
	
	// Heaeder background image position
	$wp_customize->add_setting( 'bearge_header_background_position', array(
			'default'  		 => 'center',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_background_position_control', array(
			'label'    => __( 'Header background position', 'bearge_header_background_position' ),
			'section'  => 'bearge_header_section',
			'settings' => 'bearge_header_background_position',
			'priority' => 8,
			'type'           => 'radio',
			'choices'        => array(
					'left'   => __( 'Left' ),
					'center'  => __( 'Center' ),
					'right'  => __( 'Right' ),
			),
	) ) );
	
	
	// ----------------------------------------------------------------------------------------- //
	
	// ----------------------------------------------------------------------------------------- //
	
	// Sticky Header Section
	$wp_customize->add_section( 'bearge_sticky_header_section' , array(
			'title'       => __( 'Sticky header', 'section_sticky_header' ),
			'priority'    => 4,
			'description' => 'Customize sticky header',
	) );
	
	// Enable sticky header
	$wp_customize->add_setting( 'bearge_sticky_header_enabled', array(
			'default'        => '1',
	) );
	
	$wp_customize->add_control( 'bearge_sticky_header_enabled', array(
			'label'   => __(  'Sticky header enabled', 'bearge_sticky_header_enabled'),
			'section' => 'bearge_sticky_header_section',
			'type'    => 'checkbox',
			'priority' => 1,
	) );
	
	// Sticky header logo 	
	$wp_customize->add_setting( 'bearge_sticky_header_logo' );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sticky_header_control', array(
			'label'    => __( 'Logo', 'bearge_sticky_header_logo' ),
			'section'  => 'bearge_sticky_header_section',
			'settings' => 'bearge_sticky_header_logo',
			'priority' => 2,
	) ) );
	
	// Sticky Header background color
	$wp_customize->add_setting( 'bearge_sticky_header_background_color' );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sticky_header_color_control', array(
			'label'    => __( 'Sticky header Color', 'bearge_sticky_header_background_color' ),
			'section'  => 'bearge_sticky_header_section',
			'settings' => 'bearge_sticky_header_background_color',
			'priority' => 3,
	) ) );
	
	// Sticky Header background transparency
	$wp_customize->add_setting( 'bearge_sticky_header_background_transparency', array(
			'default'  		 => '1',
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sticky_header_background_transparency_control', array(
			'label'    => __( 'Sticky header background color transparency (value between 0 and 1)', 'bearge_sticky_header_background_transparency' ),
			'section'  => 'bearge_sticky_header_section',
			'settings' => 'bearge_sticky_header_background_transparency',
			'priority' => 4,
	) ) );
	
	// Sticky Header text color
	$wp_customize->add_setting( 'bearge_sticky_header_text_color' );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sticky_header_text_color_control', array(
			'label'    => __( 'Sticky header text color', 'bearge_sticky_header_text_color' ),
			'section'  => 'bearge_sticky_header_section',
			'settings' => 'bearge_sticky_header_text_color',
			'priority' => 5,
	) ) );
	
	// Sticky Heaeder height
	$wp_customize->add_setting( 'bearge_sticky_header_height' );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sticky_heaeder_height_control', array(
			'label'    => __( 'Sticky header height', 'bearge_sticky_header_height' ),
			'section'  => 'bearge_sticky_header_section',
			'settings' => 'bearge_sticky_header_height',
			'priority' => 6,
	) ) );
	
	
	// Sticky Heaeder background image
	$wp_customize->add_setting( 'bearge_sticky_header_background' );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sticky_header_background_control', array(
			'label'    => __( 'Sticky header background image', 'bearge_sticky_header_background' ),
			'section'  => 'bearge_sticky_header_section',
			'settings' => 'bearge_sticky_header_background',
			'priority' => 7,
	) ) );
	
	// Sticky Heaeder background image size
	$wp_customize->add_setting( 'bearge_sticky_header_background_size' , array(
			'default'  		 => 'cover',
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sticky_header_background_size_control', array(
			'label'    => __( 'Sticky header background size', 'bearge_sticky_header_background_size' ),
			'section'  => 'bearge_sticky_header_section',
			'settings' => 'bearge_sticky_header_background_size',
			'priority' => 8,
			'type'           => 'radio',
			'choices'        => array(
					'length'   => __( 'Length' ),
					'percentage'  => __( 'Percentage' ),
					'cover'  => __( 'Cover' ),
					'contain'  => __( 'Contain' ),
			)
	) ) );
	
	// Sticky Heaeder background image repeat
	$wp_customize->add_setting( 'bearge_sticky_header_background_repeat', array(
			'default'  		 => 'no-repeat',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sticky_header_background_repeat_control', array(
			'label'    => __( 'Sticky header background repeat', 'bearge_sticky_header_background_repeat' ),
			'section'  => 'bearge_sticky_header_section',
			'settings' => 'bearge_sticky_header_background_repeat',
			'priority' => 9,
			'type'           => 'radio',
			'choices'        => array(
					'no-repeat'   => __( 'No Repeat' ),
					'repeat'  => __( 'Tile' ),
					'repeat-x'  => __( 'Tile vertically' ),
					'repeat-y'  => __( 'Tile horizontally' ),
			),
	) ) );
	
	// Sticky Heaeder background image position
	$wp_customize->add_setting( 'bearge_sticky_header_background_position', array(
			'default'  		 => 'center',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sticky_header_background_position_control', array(
			'label'    => __( 'Sticky header background position', 'bearge_sticky_header_background_position' ),
			'section'  => 'bearge_sticky_header_section',
			'settings' => 'bearge_sticky_header_background_position',
			'priority' => 10,
			'type'           => 'radio',
			'choices'        => array(
					'left'   => __( 'Left' ),
					'center'  => __( 'Center' ),
					'right'  => __( 'Right' ),
			),
	) ) );
	// ----------------------------------------------------------------------------------------- //
	
	// ----------------------------------------------------------------------------------------- //
	// Footer Section
	$wp_customize->add_section( 'bearge_footer_section' , array(
			'title'       => __( 'Footer', 'section_footer' ),
			'priority'    => 5,
			'description' => 'Customize footer',
	) );
	
	// Footer background color
	$wp_customize->add_setting( 'bearge_footer_background_color' );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_color_control', array(
			'label'    => __( 'Footer color', 'bearge_footer_background_color' ),
			'section'  => 'bearge_footer_section',
			'settings' => 'bearge_footer_background_color',
			'priority' => 8,
	) ) );
	
	// Footer background transparency
	$wp_customize->add_setting( 'bearge_footer_background_transparency', array(
			'default'  		 => '1',
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_background_transparency_control', array(
			'label'    => __( 'Footer background color transparency (value between 0 and 1)', 'bearge_footer_background_transparency' ),
			'section'  => 'bearge_footer_section',
			'settings' => 'bearge_footer_background_transparency',
			'priority' => 9,
	) ) );
	
	// Footer text color
	$wp_customize->add_setting( 'bearge_footer_text_color' );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text_color_control', array(
			'label'    => __( 'Footer text color', 'bearge_footer_text_color' ),
			'section'  => 'bearge_footer_section',
			'settings' => 'bearge_footer_text_color',
			'priority' => 10,
	) ) );

	// Footer height
	$wp_customize->add_setting( 'bearge_footer_height');
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_height_control', array(
	    'label'    => __( 'Footer height', 'bearge_footer_height' ),
	    'section'  => 'bearge_footer_section',
	    'settings' => 'bearge_footer_height',
	) ) );

	// Footer background image
	$wp_customize->add_setting( 'bearge_footer_background' );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_background_control', array(
			'label'    => __( 'Footer background image', 'bearge_footer_background' ),
			'section'  => 'bearge_footer_section',
			'settings' => 'bearge_footer_background',
			'priority' => 5,
	) ) );
	
	// Footer background image size
	$wp_customize->add_setting( 'bearge_footer_background_size' , array(
			'default'  		 => 'cover',
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_background_size_control', array(
			'label'    => __( 'Footer background size', 'bearge_footer_background_size' ),
			'section'  => 'bearge_footer_section',
			'settings' => 'bearge_footer_background_size',
			'priority' => 6,
			'type'           => 'radio',
			'choices'        => array(
					'length'   => __( 'Length' ),
					'percentage'  => __( 'Percentage' ),
					'cover'  => __( 'Cover' ),
					'contain'  => __( 'Contain' ),
			)
	) ) );
	
	// Footer background image repeat
	$wp_customize->add_setting( 'bearge_footer_background_repeat', array(
			'default'  		 => 'no-repeat',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_background_repeat_control', array(
			'label'    => __( 'Footer background repeat', 'bearge_footer_background_repeat' ),
			'section'  => 'bearge_footer_section',
			'settings' => 'bearge_footer_background_repeat',
			'priority' => 7,
			'type'           => 'radio',
			'choices'        => array(
					'no-repeat'   => __( 'No Repeat' ),
					'repeat'  => __( 'Tile' ),
					'repeat-x'  => __( 'Tile vertically' ),
					'repeat-y'  => __( 'Tile horizontally' ),
			),
	) ) );
	
	// Footer background image position
	$wp_customize->add_setting( 'bearge_footer_background_position', array(
			'default'  		 => 'center',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_background_position_control', array(
			'label'    => __( 'Footer background position', 'bearge_footer_background_position' ),
			'section'  => 'bearge_footer_section',
			'settings' => 'bearge_footer_background_position',
			'priority' => 8,
			'type'           => 'radio',
			'choices'        => array(
					'left'   => __( 'Left' ),
					'center'  => __( 'Center' ),
					'right'  => __( 'Right' ),
			),
	) ) );
	// ----------------------------------------------------------------------------------------- //

	
	// ----------------------------------------------------------------------------------------- //
	// Post Section
	$wp_customize->add_section( 'bearge_post_section' , array(
			'title'       => __( 'Post', 'section_post' ),
			'priority'    => 6,
			'description' => 'Customize header',
	) );
	
	// Post background color
	$wp_customize->add_setting( 'bearge_post_background_color', array(
			'default'  		 => '#000000',
	));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_background_color_control', array(
			'label'    => __( 'Post Background Color', 'bearge_post_background_color' ),
			'section'  => 'bearge_post_section',
			'settings' => 'bearge_post_background_color',
			'priority' => 1,
	) ) );
	
	// Post background transparency
	$wp_customize->add_setting( 'bearge_post_background_transparency', array(
			'default'  		 => '0.5',
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_background_transparency_control', array(
			'label'    => __( 'Post Background Transparency (value between 0 and 1)', 'bearge_post_background_transparency' ),
			'section'  => 'bearge_post_section',
			'settings' => 'bearge_post_background_transparency',
			'priority' => 2,
	) ) );
	
	// ----------------------------------------------------------------------------------------- //
}
add_action('customize_register', 'bearge_theme_customizer');


function get_post_background_style() {
	echo '<style type="text/css">';
	echo getBackgroundColorCSSForClass('post', convertRGBHexAndTransparencyToRGBA(get_theme_mod( 'bearge_post_background_color' ), get_theme_mod( 'bearge_post_background_transparency' )));
	echo getBackgroundColorCSSForClass('page-navigation', convertRGBHexAndTransparencyToRGBA(get_theme_mod( 'bearge_post_background_color' ), get_theme_mod( 'bearge_post_background_transparency' )));
	echo getBackgroundColorCSSForClass('comment-form', convertRGBHexAndTransparencyToRGBA(get_theme_mod( 'bearge_post_background_color' ), get_theme_mod( 'bearge_post_background_transparency' )));
	echo getBackgroundColorCSSForClass('comments', convertRGBHexAndTransparencyToRGBA(get_theme_mod( 'bearge_post_background_color' ), get_theme_mod( 'bearge_post_background_transparency' )));
	echo getBackgroundColorCSSForId('sidebar', convertRGBHexAndTransparencyToRGBA(get_theme_mod( 'bearge_post_background_color' ), get_theme_mod( 'bearge_post_background_transparency' )));
	if(get_theme_mod( 'bearge_decoration_border_color_enabled' )){
		echo getBorderLeftColorCSSForClass('sidebar-widget', get_theme_mod( 'bearge_decoration_border_color' ));
	}
	echo '</style>';
}

function get_page_navigation() {
	?>	
	
	<div class="page-navigation" role="navigation">
			<div class="page-navigation-next">
				<?php if ( get_previous_posts_link() ) : ?>
					<?php previous_posts_link( __( '&larr; Newer posts' )  ); ?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>
			</div>
			<div class="page-navigation-prev">
				<?php if ( get_next_posts_link() ) : ?>
					<?php next_posts_link( __( 'Older posts &rarr; ' ) ); ?>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>
			</div>
	</div>
	<?php
}


function get_comments_link_for_post() {
	$num_comments = get_comments_number();
	
	if ( comments_open() ) {
		if ( $num_comments == 0 ) {
			$comments = __('No Comments');
		} elseif ( $num_comments > 1 ) {
			$comments = $num_comments . __(' Comments');
		} else {
			$comments = __('1 Comment');
		}
		$write_comments = '<a href="' . get_comments_link() .'">'. $comments.'</a>';
	} else {
		$write_comments =  __('Comments are off for this post.');
	}
	
	echo $write_comments;
}

function convertRGBHexAndTransparencyToRGBA($RGBHex, $transparency){

	$redHex = substr($RGBHex,1,2);
	$greenHex = substr($RGBHex,3,2);
	$blueHex = substr($RGBHex,5,2);
	
	$redDec = hexdec ($redHex);
	$greenDec = hexdec ($greenHex);
	$blueDec = hexdec ($blueHex);
	
	return 'rgba('. $redDec . ',' . $greenDec . ',' . $blueDec . ',' . $transparency . ')';
}

function getBackgroundColorCSSForClass($class, $backgroundColor){
	return '.' . $class . '{ background-color: ' . $backgroundColor . '; }';
}

function getBackgroundColorCSSForId($id, $backgroundColor){
	return '#' . $id . '{ background-color: ' . $backgroundColor . '; }';
}

function getBorderLeftColorCSSForClass($class, $borderLeftColor){
	return '.' . $class . '{ border-left: solid ' . $borderLeftColor . '; }';
}


?>

