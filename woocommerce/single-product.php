<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( ); ?>
<div class="container">
	<div class="woocommerce detail_product">
    <div class="row">
      <div class="col-sm-3 headline_product hidden-xs" >
        <?php  $product_categories = get_terms( 'product_cat', $args );?>
         <?php if(isset($product_categories) && count($product_categories)>0){ ?>
            <ul class="menu_product hidden-xs">
              <?php foreach ($product_categories as $obj) { ?>  
                <?php
                   $thumbnail_id = get_woocommerce_term_meta( $obj->term_id, 'thumbnail_id', true ); 
                   $image = wp_get_attachment_url( $thumbnail_id ); 
                ?>
                <li> 
                  <a href="<?php echo get_site_url().'/?product_cat='.$obj->slug;?>">
                    <span class="product_icon">
                        <?php if(isset($image) && $image != ''){ ?>
                            <img src="<?php echo $image;?>">
                        <?php } ?>
                     </span> 
                     <?php echo isset($obj->name)?$obj->name:'';?>
                   </a>
                 </li>
              
              <?php } ?>
            </ul>
        <?php } ?>
      </div>
    <div class="col-md-9 subpage subpage-left col-xs-12">
		
	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
    	</div>
    	
    </div>
   
</div>
</div>
<?php get_footer(  ); ?>

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
