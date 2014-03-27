<!DOCTYPE html>
<!-- Icons designed by brandspankingnew.net || http://www.brandspankingnew.net/archive/2006/12/hohoho.html || Icons licenced under Creative Commons Attribution-ShareAlike 2.5 -->
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	
	<script type="text/javascript">
		<?php if( get_theme_mod( 'bearge_sticky_header_enabled') == '1') {?>
		$(window).scroll(function() {
		    if ( $(window).scrollTop() >= $('#header').height() ) {
		        $('#sticky-header').show({
		        	  effect : 'drop',
		        	  easing : 'easeOutQuart',
		        	  direction : 'up',
		        	  duration : 300
		        	});
		    } else {
		        $('#sticky-header').hide({
		        	  effect : 'drop',
		        	  easing : 'easeOutQuart',
		        	  direction : 'up',
		        	  duration : 300
		        	});
		    }
		});
		<?php }?>
	</script>
	
	<style type="text/css">
		a:link, a:visited, a:active {
			color: <?php if ( get_theme_mod( 'bearge_link_color' ) ){ echo esc_attr( get_theme_mod( 'bearge_link_color' ) ); } ?>;
			text-decoration: none;
		}
		
		a:focus, a:hover {
			color: <?php if ( get_theme_mod( 'bearge_link_hover_color' ) ){ echo esc_attr( get_theme_mod( 'bearge_link_hover_color' ) ); } ?>;
			text-decoration: none;
		}
	</style>
	<?php wp_head(); ?>
	<?php get_post_background_style(); ?>
	
</head>
<body <?php body_class(); ?> style="
			<?php if ( get_theme_mod( 'bearge_background_color' ) ){ echo "background-color:", esc_attr( get_theme_mod( 'bearge_background_color' ) ), ";"; } ?>
			<?php if ( get_theme_mod( 'bearge_text_color' ) ){ echo "color:", esc_attr( get_theme_mod( 'bearge_text_color' ) ), ";"; } ?>
		">
	<div id="page">
		<div id="header" style="
			<?php if ( get_theme_mod( 'bearge_header_background_color' ) ){ 
				echo "background-color:", esc_attr(convertRGBHexAndTransparencyToRGBA(get_theme_mod( 'bearge_header_background_color' ), get_theme_mod( 'bearge_header_background_transparency' )) ), ";";
			} ?>
			<?php if ( get_theme_mod( 'bearge_header_color' ) ){ 
				echo "color:", esc_attr( get_theme_mod( 'bearge_header_color' ) ), ";"; } 
				?>
			<?php if ( get_theme_mod( 'bearge_header_height' ) ){ 
				echo "height:", esc_attr( get_theme_mod( 'bearge_header_height' ) ), ";"; } 
				?>
			<?php if ( get_theme_mod( 'bearge_header_background' ) ){ 
				echo "background-image: url('", esc_attr( get_theme_mod( 'bearge_header_background' ) ), "');"; } 
				?>			
			<?php if ( get_theme_mod( 'bearge_header_background_size' ) ){ 
				echo "background-size:", esc_attr( get_theme_mod( 'bearge_header_background_size' ) ), ";"; } 
				?>
			<?php if ( get_theme_mod( 'bearge_header_background_repeat' ) ){ 
				echo "background-repeat:", esc_attr( get_theme_mod( 'bearge_header_background_repeat' ) ), ";"; } 
				?>
			<?php if ( get_theme_mod( 'bearge_header_background_position' ) ){ 
				echo "background-position:", esc_attr( get_theme_mod( 'bearge_header_background_position' ) ), ";"; } 
				?>			
		">
			<div id="header-wrapper">
				<table id="header-content" style="
				<?php if ( get_theme_mod( 'bearge_logo_position' ) ){ 
				echo "text-align:", esc_attr( get_theme_mod( 'bearge_logo_position' ) ), ";"; } 
				?>		
				"><tr><td>
						<?php if ( get_theme_mod( 'bearge_logo' ) ) : ?>
						    <div id='header-logo'>
						        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'bearge_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
						    </div>
						<?php endif; ?>
					</td></tr></table>
			</div>
		</div>
		<!-- Sticky Header -->
		<div id="sticky-header" style="
			<?php if ( get_theme_mod( 'bearge_sticky_header_background_color' ) ){ 
				echo "background-color:", esc_attr(convertRGBHexAndTransparencyToRGBA(get_theme_mod( 'bearge_sticky_header_background_color' ), get_theme_mod( 'bearge_sticky_header_background_transparency' )) ), ";";
			} ?>
			<?php if ( get_theme_mod( 'bearge_sticky_header_color' ) ){ 
				echo "color:", esc_attr( get_theme_mod( 'bearge_sticky_header_color' ) ), ";"; } 
				?>
			<?php if ( get_theme_mod( 'bearge_sticky_header_height' ) ){ 
				echo "height:", esc_attr( get_theme_mod( 'bearge_sticky_header_height' ) ), ";"; } 
				?>
			<?php if ( get_theme_mod( 'bearge_sticky_header_background' ) ){ 
				echo "background-image: url('", esc_attr( get_theme_mod( 'bearge_sticky_header_background' ) ), "');"; } 
				?>			
			<?php if ( get_theme_mod( 'bearge_sticky_header_background_size' ) ){ 
				echo "background-size:", esc_attr( get_theme_mod( 'bearge_sticky_header_background_size' ) ), ";"; } 
				?>
			<?php if ( get_theme_mod( 'bearge_sticky_header_background_repeat' ) ){ 
				echo "background-repeat:", esc_attr( get_theme_mod( 'bearge_sticky_header_background_repeat' ) ), ";"; } 
				?>
			<?php if ( get_theme_mod( 'bearge_sticky_header_background_position' ) ){ 
				echo "background-position:", esc_attr( get_theme_mod( 'bearge_sticky_header_background_position' ) ), ";"; } 
				?>			
		">
		    <table id="sticky-header-content"><tr><td>
						<?php if ( get_theme_mod( 'bearge_sticky_header_logo' ) ) : ?>
						    <div id='header-logo'>
						        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'bearge_sticky_header_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
						    </div>
						<?php endif; ?>
					</td></tr></table>		    
		</div>

		<div id="wrapper">