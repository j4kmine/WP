<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 1,
                $Orientation: 2,
                $Align: 0,
                $NoDrag: true
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 580;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssora061 {display:block;position:absolute;cursor:pointer;}
        .jssora061 .a {fill:none;stroke:#fff;stroke-width:360;stroke-linecap:round;}
        .jssora061:hover {opacity:.8;}
        .jssora061.jssora061dn {opacity:.5;}
        .jssora061.jssora061ds {opacity:.3;pointer-events:none;}
    </style>
     <script type="text/javascript">
      function onsearchmobile(e){      
          var keyword =document.querySelector('[name="keywords"]').value;;       
         window.location = "<?php echo get_site_url()?>/?s="+keyword+"&post_type=product";
       }
    </script>
  </head>
  <body>
    <header>
      <div class="navbar navbar-inverse navbar-fixed-top navbar-mob visible-xs " role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> <img src="<?php echo get_template_directory_uri();?>/icon/logo_header_true.png" class="img-responsive  logo-store"></a>
            </div>
            <div class="collapse navbar-collapse">
              <form id="searchform" name="searchform" onsubmit=" event.preventDefault();  onsearchmobile();">
                  <div class="form-group">
                    <div class="inner-addon right-addon">
                      <i class="glyphicon glyphicon-search search-icon"></i>
                      <input type="search" class="form-control" id="keyword" name="keywords" placeholder="Enter Keywords Here..">
                    </div>
                  </div>
              </form>
                
                <ul class="nav navbar-nav">
                    <li class="active">
                      <a href="<?php echo get_site_url();?>" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse">Home</a>
                    </li>
                   <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produk <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <?php  $product_categories = get_terms( 'product_cat', $args );?>
                        <?php if(isset($product_categories) && count($product_categories)>0){ ?>
                          <?php foreach ($product_categories as $obj) { ?>
                              <li><a href="<?php echo get_site_url().'/?product_cat='.$obj->slug;?>">&nbsp;&nbsp;&nbsp;<?php echo isset($obj->name)?$obj->name:'';?></a></li>
                          <?php } ?>
                        <?php } ?>
                        </ul>
                    </li>
                  <li>
                     
                      <a href="<?php echo get_site_url()?>/tentang-rancakmall" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse">tentang rancak mall</a>
                    </li>
                  <li>
                    
                    <a href="<?php echo get_site_url()?>/hubungi-kami" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse">hubungi kami</a>
                  </li>
                   <li>
                    
                    <a href="<?php echo get_site_url()?>/panduan" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse">panduan</a>
                  </li>
                  
                  <?php global $woocommerce; ?>
                  <li><a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;<?php echo $woocommerce->cart->cart_contents_count;?> item - <?php echo $woocommerce->cart->get_cart_total(); ?></a></li>
                  <li><a href="<?php echo get_site_url();?>/wishlist">Daftar Keinginan (<?php echo  YITH_WCWL()->count_products( $wishlist_id );?>)</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
      </div>
   
      <div class="top_menu hidden-xs">
        <div class="container">
           <div class="row">
              <div class="col-md-6">
                <ul class="pull-left list-inline ">
                  <li><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;<?php echo get_theme_mod('phone')?get_theme_mod('phone'):'0751-27907' ;?></li>
                  <li><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;<?php echo get_theme_mod('email')?get_theme_mod('email'):'sales@rancamall.com' ;?></li>
                </ul>                
              </div>             
              <div class="col-md-4 col-md-offset-2">
                  <ul class="list-inline">
                    <li><a href="<?php echo get_site_url();?>/wishlist">Daftar Keinginan</a>&nbsp;<span class="count-interest">(<?php echo  YITH_WCWL()->count_products( $wishlist_id );?>)</span>&nbsp;&nbsp;|</li>
                    <li><a href="<?php echo get_site_url();?>/my-account">Akun Saya</a>&nbsp;&nbsp;&nbsp;|</li>
                    <li><a href="<?php echo get_site_url();?>/my-account/orders">Status Order</a></li>
                  </ul>                 
              </div>               
           </div>
        </div>       
      </div>
      <div >
      </div>
      <script type="text/javascript">
      function onsearchs(e){      
        var keyword =document.querySelector('[name="keyword"]').value;;
        var category_search = document.getElementById("category_search").value;
        if(category_search != ''){
           window.location = "<?php echo get_site_url()?>/product-category/"+category_search+"/?s="+keyword+"&post_type=product";
         }else{
             window.location = "<?php echo get_site_url()?>/?s="+keyword+"&post_type=product";
         }
       
      }
    </script>
      <div class="top_menu_banner hidden-xs">
          <div class="container">
              <div class="row">
                <div class="col-sm-8">
                  <form id="searchform" name="searchform" class="form-inline form-search"  onsubmit=" event.preventDefault();  onsearchs();">
                    <div class="form-group">
                      <select class="form-control select-search" name="category_search" id="category_search">
                          <option value="">All Category</option>
                         <?php  $product_categories = get_terms( 'product_cat', $args );?>
                           <?php if(isset($product_categories) && count($product_categories)>0){ ?>
                                <?php foreach ($product_categories as $obj) { ?>  
                                      <option value="<?php echo isset($obj->slug)?$obj->slug:'';?>"><?php echo isset($obj->name)?$obj->name:'';?></option>
                               <?php } ?>
                          <?php } ?>
                        
                      </select>
                    </div>
                    <div class="form-group">
                        <div class="inner-addon right-addon">
                          <i class="glyphicon glyphicon-search search-icon"></i>
                          <input type="text" class="form-control form-searchs" id="keyword" name="keyword" placeholder="Enter Keywords Here.." />
                        </div>
                    </div>
                  </form>
                </div>
                <div class="col-sm-4">                
                    <a href="<?php echo get_bloginfo('url');?>">
                      <img src="<?php echo get_template_directory_uri();?>/icon/logo_header_true.png" class="img-responsive pull-right logo-store">
                    </a>
                 
                </div>
              </div>
          </div>
      </div>
      <?php if(is_home() != true){ ?>
          <?php $page = get_page_template_slug();?>
          <div class="menu_general hidden-xs">
              <div class="container">
                <div class="row">
                  <div class="col-sm-3 nopadding-left nopadding-right hidden-xs">
                    <ul class="list-inline cat-first">
                      <li class="list-inline-item"><i class="fa fa-bars icon-bars bars_top" aria-hidden="true"></i>&nbsp;&nbsp;<span class="cat-prod">kategori</span></li>                
                      <i class="fa fa-caret-up up_you" aria-hidden="true"></i>
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
                
             
              
              
    
          
              </div>
          </div>
          
      <?php } ?>
    </header>