<?php /* Template Name: GuidePage */ ?>
<?php get_header(); ?>
    <div class="container">
          <div class="page_guide">
                 <div class="row">
                     <div class="col-sm-3 headline_product" >
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
                    <div class="col-sm-9  col-xs-12 blog-main">

                      <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                      <div class="blog-post">
                       
                        <?php the_content(); ?>
                      </div><!-- /.blog-post -->
                      <?php endwhile; ?>
                    <?php else : ?>
                      <p><?php __('No Page Found'); ?></p>
                    <?php endif; ?>

                    </div><!-- /.blog-main -->

                </div>
          </div>
         
    </div>
<?php get_footer(); ?>
