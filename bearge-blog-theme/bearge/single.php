<?php get_header(); ?>

		<div id="main">
			<?php while (have_posts()) : the_post(); ?>
			<div class="post">
				<div class="post-title">
	         		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="post-meta">
	         		<div class="post-time"><img src="<?php bloginfo('template_directory'); ?>/images/clock.png"/><a href="<?php the_permalink() ?>"><?php the_date('d-m-Y'); ?> <?php the_time('G:i'); ?></a></div>
					<?php if(get_the_category_list(', ')) { ?><div class="post-category"><img src="<?php bloginfo('template_directory'); ?>/images/category.png"/><?php echo get_the_category_list(', '); ?></div><?php } ?>
 					<?php if(get_the_tag_list('', ', ')) { ?><div class="post-tags"><img src="<?php bloginfo('template_directory'); ?>/images/tag.png"/><?php echo get_the_tag_list('', ', '); ?></div><?php } ?>
				</div>
				<div class="post-body">
	         		<?php the_content(''); ?>
				</div>
	            <div class="post-footer">
	            	<?php  if ( current_user_can( 'edit_posts' ) ) { ?>
	            		<div class="post-footer-edit-link"><?php edit_post_link(); ?></div>
	            	<?php } ?>
	            	
				</div>
			</div>
	 		<div class="comments">
	 			<?php comments_template(); ?>
	 		</div>
	      	<?php endwhile; ?>

			<!-- TODO: Comments, Related links, etc... -->

		</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>