<?php get_header(); ?>
    <div class="main-content">
      <div class="container">
          <div class="row">
            <div class="col-sm-3 nopadding-left nopadding-right hidden-xs">
              <ul class="list-inline cat-first">
                <li class="list-inline-item"><i class="fa fa-bars icon-bars" aria-hidden="true"></i>&nbsp;&nbsp;<span class="cat-prod">kategori</span></li>                
                <i class="fa fa-caret-up up_me" aria-hidden="true"></i>
              </ul>
            </div>
            <div class="col-sm-9 nopadding-left hidden-xs">
               <ul class="list-inline menu-first ">
                  <li class="list-inline-item"><a href="<?php echo get_site_url();?>">home</a></li> 
                  <li class="list-inline-item"><a href="<?php echo get_theme_mod('about_menu_url')?get_theme_mod('about_menu_url'):get_site_url();?>/tentang-rancakmall">tentang rancak mall</a></li> 
                  <li class="list-inline-item"><a href="<?php echo get_theme_mod('contact_menu_url')?get_theme_mod('contact_menu_url'):get_site_url();?>/hubungi-kami">hubungi kami</a></li>  
                 <li class="list-inline-item"><a href="<?php echo get_theme_mod('panduan')?get_theme_mod('panduan'):get_site_url()?>/panduan">panduan</a></li>  
                 <li class="list-inline-item">
                  <a href="http://bni.co.id/id-id/" target="_blank">
                    <img src="<?php echo get_template_directory_uri();?>/icon/bni_logo_top.png"  class="img-responsive"/>
                  </a>
                </li> 
                <?php global $woocommerce; ?>
                <li class="list-inline-item pull-right"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp; <a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo $woocommerce->cart->cart_contents_count;?> item - <?php echo $woocommerce->cart->get_cart_total(); ?></a></li>                
              </ul>
            </div>
           
          </div>
         
          
          <div class="headline_product">
             <div class="row">
              <div class="col-sm-3 side-menus">
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
              <div class="col-sm-6 col-xs-12 nopadding-left slides">
                    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:810px;overflow:hidden;visibility:hidden;">
                        <!-- Loading Screen -->
                        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?php echo get_template_directory_uri();?>/img/spin.svg" />
                        </div>
                        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:810px;overflow:hidden;">
                            <?php 
                                  $temp = $wp_query;
                                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                  $post_per_page = 100; // -1 shows all posts
                                  $args=array(
                                    'post_type' => 'slideshow',
                                    'orderby' => 'date',
                                    'order' => 'ASC',
                                   
                                    'posts_per_page' => $post_per_page
                                  );
                                    $wp_query = new WP_Query($args); 
                                   
                                    if( have_posts() ) : while ($wp_query->have_posts()) : $wp_query->the_post();
                                    $custom = get_post_custom($post->ID);
                                    $url = $custom["url"][0]; 
                                    $url_open = $custom["url_open"][0];
                                    $custom_title = "#".$post->ID;
                                    $post_title = $post->post_title;
                                    $excerpt = $post->post_excerpt;
                                    $post_thumbnail_id = get_post_thumbnail_id($post->ID);
                                    $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                               
                                 ?>
                                  <div>
                                      <img data-u="image" src="<?php echo isset($post_thumbnail_url)?$post_thumbnail_url:'';?>" />
                                      <div u="thumb"><a href="<?php echo isset($url)?$url:'';?>" style="text-decoration: none;
                                        color: #fff;"><?php echo isset($post_title)?$post_title:'';?> <span class="sum"><?php echo isset($excerpt)?$excerpt:'';?></span></a>

    
                                      </div>
                                  </div>
                              <?php endwhile; else: ?>
                             <?php endif; wp_reset_query(); $wp_query = $temp ?>
                            <a data-u="any" href="https://www.jssor.com" style="display:none">bootstrap slider</a>
                        </div>
                        <!-- Thumbnail Navigator -->
                        <div u="thumbnavigator" style="position:absolute;bottom:80px;left:0px;width:980px;height:191px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">
                            <div u="slides">
                                <div u="prototype" style="position:absolute;top:0;left:0;width:980px;height:191px;">
                                    <div u="thumbnailtemplate" style=" padding-left:100px;position:absolute;top:30px;left:0;width:100%;height:100%;font-family:verdana;font-weight:normal;line-height:50px;font-size:46px;padding-left:10px;box-sizing:border-box;"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Arrow Navigator -->
                        <div data-u="arrowleft" class="jssora061" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <path class="a" d="M11949,1919L5964.9,7771.7c-127.9,125.5-127.9,329.1,0,454.9L11949,14079"></path>
                            </svg>
                        </div>
                        <div data-u="arrowright" class="jssora061" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <path class="a" d="M5869,1919l5984.1,5852.7c127.9,125.5,127.9,329.1,0,454.9L5869,14079"></path>
                            </svg>
                        </div>
                    </div>
                   <script type="text/javascript">jssor_1_slider_init();</script>
                  <a href="<?php echo get_theme_mod('banner_slider_bottom_link')?get_theme_mod('banner_slider_bottom_link'):'http://bni.co.id/id-id/' ;?>" target="_blank">
                   <img src="<?php echo get_theme_mod('banner_slider_bottom')?get_theme_mod('banner_slider_bottom'):get_bloginfo('url').'/wp-content/themes/rancakmall/icon/logo_bni_below_slide.png' ;?>" class="img-responsive img-banner-below">
                 </a>
              </div>
              <div class="col-sm-3 col-xs-12 banner nopadding-left ">
                <a href="<?php echo get_theme_mod('banner_slider_sidebar_link')?get_theme_mod('banner_slider_sidebar_link'):'http://bni.co.id/id-id/' ;?>" target="_blank">
                  <img src="<?php echo get_theme_mod('banner_slider_sidebar')?get_theme_mod('banner_slider_sidebar'):get_bloginfo('url').'/wp-content/themes/rancakmall/icon/logo_bni_side.png' ;?>" class="img-responsive-sec">
                 
                 </a>
              </div>
          </div>
          </div>
         
          <div class="icon_below_headline">
             <div class="row">
                <div class="col-md-2 col-xs-12"> 
                      <img src="<?php echo get_theme_mod('icon_thumb')?get_theme_mod('icon_thumb'):get_bloginfo('url').'/wp-content/themes/rancakmall/icon/thumb.png' ;?>" class="icon_item_below">
                      <p><?php echo get_theme_mod('icon_thumb_text')?get_theme_mod('icon_thumb_text'):'Produk Berkualitas' ;?></p>
                </div>
                <div class="col-md-2 col-md-offset-1  col-xs-12">
                      <img src="<?php echo get_theme_mod('icon_phone')?get_theme_mod('icon_phone'):get_bloginfo('url').'/wp-content/themes/rancakmall/icon/phone.png' ;?>" class="icon_item_below">
                      <p><?php echo get_theme_mod('icon_phone_text')?get_theme_mod('icon_phone_text') :'Support Yang Terbaik' ;?></p>
                </div>
                <div class="col-md-2 col-xs-12"> 
                      <img src="<?php echo get_theme_mod('icon_delivery')?get_theme_mod('icon_delivery'):get_bloginfo('url').'/wp-content/themes/rancakmall/icon/delivery.png' ;?>" class="icon_item_below">
                      <p><?php echo get_theme_mod('icon_delivery_text')?get_theme_mod('icon_delivery_text'):'Pengiriman Yang Cepat' ;?></p>
                </div>
                <div class="col-md-2 col-xs-12"> 
                      <img src="<?php echo get_theme_mod('icon_return')?get_theme_mod('icon_return') :get_bloginfo('url').'/wp-content/themes/rancakmall/icon/return.png' ;?>" class="icon_item_below">
                      <p><?php echo get_theme_mod('icon_return_text')?get_theme_mod('icon_return_text'):'14 Hari Uang Kembali' ;?></p>
                </div>
                <div class="col-md-2 col-md-offset-1 col-xs-12"> 
                      <img src="<?php echo get_theme_mod('icon_lock')?get_theme_mod('icon_lock'):get_bloginfo('url').'/wp-content/themes/rancakmall/icon/lock.png' ;?>" class="icon_item_below lock">
                      <p><?php echo get_theme_mod('icon_lock_text')?get_theme_mod('icon_lock_text'):'Terjamin Kemanan Nya' ;?></p>
                </div>
            </div>
             
          </div>
            <?php $args ="";?>
            <?php $hitung =1;?>
           <?php  $product_categories = get_terms( 'product_cat', $args );?>
            
            <?php if(isset($product_categories) && count($product_categories)>0){ ?>
                <?php foreach ($product_categories as $obj) { ?> 
                <?php if($hitung <= 3){ ?>
               <div class="recent_product_header">
                  <div class="row">
                    <div class="col-md-6 col-xs-3">
                      <i class="fa fa-check-square-o" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-6 col-xs-9">
                        <h4 class="pull-right"><a href="<?php echo get_site_url().'/?product_cat='.$obj->slug;?>"><?php echo isset($obj->name)?$obj->name:'';?></a></h4>
                    </div>
                  </div>
              </div>

              <section class="regular slider">
              <?php 
                  $args = array( 'post_type' => 'product' ,'product_cat' => $obj->slug,'orderby' =>'date','order' => 'DESC', 'post_status'=> 'publish','posts_per_page'=>5);
                  $loop = new WP_Query( $args );
                  $count = 1;

              ?>

              <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;  ?>
                       <div class="col-md-3">
                        <?php $post_thumbnail_id = get_post_thumbnail_id( $post->ID ); ?>
                        <?php $full_size_image   = wp_get_attachment_image_src( $post_thumbnail_id ,'single-post-thumbnail'); ?>
                        <a href="<?php echo $post->guid;?>">
                           <?php if(isset($full_size_image[0]) && count($full_size_image[0])>0){ ?>
                                  <img src="<?php echo $full_size_image[0];?>" class="img-responsive">
                          <?php }else{ ?>
                                  <img src="<?php echo get_site_url();?>/wp-content/plugins/woocommerce/assets/images/placeholder.png" class="img-responsive">
                          <?php } ?>
                        </a>
                        <div class="price-slides">Rp.&nbsp;<?php echo number_format($product->get_price(),2,',','.');?></div>
                        <div class="name-slides"> <a href="<?php echo $post->guid;?>"><?php echo $loop->post->post_title;?></a></div>
                        <div class="summary-slides"><?php echo substr($loop->post->post_excerpt,0,35);?> </div>
                       
                        <span class="compare"><?php echo do_shortcode('[yith_compare_button]'); ;?></span>&nbsp;|&nbsp;<span class="wishlist"><?php echo do_shortcode('[yith_wcwl_add_to_wishlist]');  ?></span>
                        <div class="cart"><a href="javascript:void(0)" onclick="addtocart(<?php echo get_the_ID();?>)"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Add to Cart</a></div>
                    
                      </div>
                    <?php $count++;?>
                    <?php endwhile; wp_reset_query();
                      // Remember to reset ?>
                      </section>
                       <?php $hitung++;?>
            <?php } ?>
            <?php } ?>
           
          <?php } ?>

      </div>
    </div>
<?php get_footer(); ?>
