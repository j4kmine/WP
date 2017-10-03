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
				<div class="col-sm-9 col-xs-12">
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