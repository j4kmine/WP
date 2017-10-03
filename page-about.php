<?php /* Template Name: AboutPage */ ?>
 
<?php get_header(); ?>
    <style>
    .parallax { 
        /* The image used */
        background-image: url("<?php echo get_theme_mod('about_bg')?get_theme_mod('about_bg'):get_bloginfo('url').'/wp-content/themes/rancakmall/background/about_bg.jpg' ;?>");

        /* Set a specific height */
        height: 300px; 

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
    <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                      
                        
   
    <div class="container">
          <div class="page-about">
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
                    <div class="col-sm-9  col-xs-12 blog-main">
                       <div class="parallax"><h2 class="about-post-title">
                            <?php the_title(); ?>
                        </h2></div>
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
