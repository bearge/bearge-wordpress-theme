	</div><!-- End of #wrapper -->
	<div id="footer" style="
			<?php if ( get_theme_mod( 'bearge_footer_background_color' ) ){ 
				echo "background-color:", esc_attr(convertRGBHexAndTransparencyToRGBA(get_theme_mod( 'bearge_footer_background_color' ), get_theme_mod( 'bearge_footer_background_transparency' )) ), ";";
			} ?>
			<?php if ( get_theme_mod( 'bearge_footer_text_color' ) ){ 
				echo "color:", esc_attr( get_theme_mod( 'bearge_footer_text_color' ) ), ";"; 
			} ?>
			<?php if ( get_theme_mod( 'bearge_footer_height' ) ){ 
				echo "height:", esc_attr( get_theme_mod( 'bearge_footer_height' ) ), ";"; 
			} ?>
			<?php if ( get_theme_mod( 'bearge_footer_background' ) ){ 
				echo "background-image: url('", esc_attr( get_theme_mod( 'bearge_footer_background' ) ), "');"; } 
				?>			
			<?php if ( get_theme_mod( 'bearge_footer_background_size' ) ){ 
				echo "background-size:", esc_attr( get_theme_mod( 'bearge_footer_background_size' ) ), ";"; } 
				?>
			<?php if ( get_theme_mod( 'bearge_footer_background_repeat' ) ){ 
				echo "background-repeat:", esc_attr( get_theme_mod( 'bearge_footer_background_repeat' ) ), ";"; } 
				?>
			<?php if ( get_theme_mod( 'bearge_footer_background_position' ) ){ 
				echo "background-position:", esc_attr( get_theme_mod( 'bearge_footer_background_position' ) ), ";"; } 
				?>	
		">
		<div id="footer-wrapper">
			<table id="footer-content"><tr><td>
				
			</td></tr></table>
		</div>
	</div>
</div><!--  End of #page -->

<?php wp_footer(); ?>
</body>
</html>