<?php
/**
 * Template Name: post
 *
 * @package WordPress
 * @subpackage desain kas
 * @since desain kas
 */
?>
<?php
get_header();
?>
<div class="container">
     <div class="row">
       <div class="col-sm-12 col-xs-12 body-article">	      
	       <div class="static_page">
	        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
					  the_content(); // displays whatever you wrote in the wordpress editor
					  endwhile; endif; //ends the loop
				 ?>

			</div>
	      </div> 
      </div>
    
   </div>

<?php get_footer(); ?>