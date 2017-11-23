<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
	<div class="not_found">
		<div class="container">
			<div class="row">
				 
				<div class="col-sm-12  col-xs-12 blog-main">
					<div class="text-center">
					<h1 class="page-title"><?php _e( 'Not Found', 'twentythirteen' ); ?></h1>
					<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'twentythirteen' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location.', 'twentythirteen' ); ?></p>
					<img src="<?php echo get_template_directory_uri();?>/img/404.png"  class="img-responsive"/>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>