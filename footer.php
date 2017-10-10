    <footer>
        <div class="footer_top">
            <div class="container">
                <div class="row">
                  <div class='col-sm-12'>
                      <a href="#" id="backTop" class="pull-right">Back to the top</a>
                  </div>
                </div>
            </div>
        </div>
        <div class="footer_newsletter">
            <div class="text-center">
               <div class="form-inline frm-newsletter">
                  <div class="text-center">
                     <?php echo do_shortcode('[mc4wp_form id="5113"]');?>
                  </div>
                </div>
            </div>
            <div class="newsletter_text">
              <p class="text-center"><?php echo get_theme_mod('footer_newsletter_opening')?get_theme_mod('footer_newsletter_opening'):'Daftar dan simpan!' ;?></p>
              <p class="text-center"><?php echo get_theme_mod('footer_newsletter_body')?get_theme_mod('footer_newsletter_body'):'Kirimkan saya Email penawaran, penawaran khusus dan produk ekslusif!' ;?></p>
            </div>
        </div>
        <div class="footer_menu">
            <div class="container-fluid">
                  <div class="row">
                   
                  <div class="col-sm-3">
                      <h3>social media</h3>
                      <ul class="list-inline">
                        <li><a href="<?php echo get_theme_mod('fb')?get_theme_mod('fb'):'https://www.facebook.com/ ' ;?>"><img src="<?php echo get_template_directory_uri();?>/icon/fb.png" class="social-footer-icon"></a></li>
                            <li><a href="<?php echo get_theme_mod('twitter')?get_theme_mod('twitter'):'https://twitter.com/ ' ;?>"><img src="<?php echo get_template_directory_uri();?>/icon/twiiter.png"  class="social-footer-icon"></a></li>
                            <li><a href="<?php echo get_theme_mod('instagram')?get_theme_mod('instagram'):'https://www.instagram.com/ ' ;?>"><img src="<?php echo get_template_directory_uri();?>/icon/ig.png"  class="social-footer-icon"></a></li>
                        </li>
                        
                      </ul>
                  </div>
                   <div class="col-sm-3">
                      <h3>customer service</h3>
                      <ul>
                        <li><a href="<?php echo get_theme_mod('contact_menu_url')?get_theme_mod('contact_menu_url'):get_site_url()?>/hubungi-kami">hubungi kami</a></li>
                        <li><a href="<?php echo get_theme_mod('pengembalian')?get_theme_mod('pengembalian'):get_site_url()?>/pengembalian">pengembalian</a></li>
                        <li><a href="<?php echo get_theme_mod('sitemap')?get_theme_mod('sitemap'):get_site_url()?>/sitemap">peta situs</a></li>
                        <li><a href="<?php echo get_theme_mod('pembayaran')?get_theme_mod('pembayaran'):get_site_url()?>/pembayaran">pembayaran</a></li>
                      </ul>
                  </div>
                   <div class="col-sm-3">
                      <h3>kenapa memilih kami</h3>
                      <ul>
                        <li><a href="<?php echo get_theme_mod('about_menu_url')?get_theme_mod('about_menu_url'):get_site_url()?>/tentang-rancakmall">tentang rancak mal</a></li>
                      </ul>
                  </div>
                   <div class="col-sm-3">
                      <h3>kontak kami</h3>
                      <ul>
                        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.rancak mal</li>
                        <li><i class="fa fa-whatsapp"></i>&nbsp; Whatsapp: <?php echo get_theme_mod('whatsapp')?get_theme_mod('whatsapp'):'+62 822 456 742341 ' ;?></li>
                        <li><i class="fa fa-envelope"></i> &nbsp;Email: <?php echo get_theme_mod('email')?get_theme_mod('email'):'sales@rancamall.com ' ;?></li>
                        <li><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo get_theme_mod('address')?get_theme_mod('address'):'Jalan Jend. A. Yani No 5 ' ;?></li>
                      </ul>
                      <a href="<?php echo get_theme_mod('logo_bank_link')?get_theme_mod('logo_bank_link'):'https://www.facebook.com/ ' ;?>" target="_blank"><img src="<?php echo get_theme_mod('logo_bank')?get_theme_mod('logo_bank'):get_bloginfo('url').'/wp-content/themes/rancakmall/icon/footer_bni_below.png' ;?>" class="img-responsive logo-footer-corner"></a>
                  </div>
                </div>
             </div>
        </div>
        <div class="footer_bottom">
            <div class="container-fluid">
                <div class="row">
                  <div class='col-sm-12'>
                      <h5 class="pull-right">©2017 RancakMall.com All Rights Reserved</h5>
                    
                  </div>
                   <div class='col-sm-12'>
                      <h5 class="pull-right developed_by"><a href=" http://cyberone.id/">Developed by Cyberone Indonesia</a></h5>
                    
                  </div>
                </div>
            </div>
        </div>
    </footer>

    <section class="social-widgets visible-lg">
      <ul class="items">
        <li class="item item-01 facebook">
          <a class="tab-icon"><span class="fa fa-facebook"></span></a>
          <div class="tab-content">
            <div class="title">
              <h5>FACEBOOK</h5>
            </div>
           <!--  <div class="loading"><img alt="loader" class="ajaxloader" src="catalog/view/theme/so-shoppystore/images/ajax-loader.gif"></div> -->
            <script type="text/javascript">
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
            </script>
            <div class="fb-like-box" data-href="https://www.facebook.com/<?php echo get_theme_mod('fb_page')?get_theme_mod('fb_page'):'facebook' ;?>" data-width="240" data-height="240" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>

             <!-- Facebook Api -->
                <div id="fb-root"></div>
            <script type="text/javascript">
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/en_EN/all.js#xfbml=1&appId=469510423153590";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
            <!-- //end Facebook Api -->
          </div>
        </li>
        <li class="item item-02 twitter">
          <a class="tab-icon" ><span class="fa fa-twitter"></span></a>
          <div class="tab-content">
            <div class="title">
              <h5>TWITTER FEEDS</h5>
            </div>
            <div class="twitter-widget">
              <a class="twitter-timeline" data-widget-id="<?php echo get_theme_mod('twitter_widget_id')?get_theme_mod('twitter_widget_id'):'375593032344563712' ;?>"
                 data-tweet-limit="1"
                 data-dnt="true"
                 data-theme="light"
                 data-link-color="#000"
                 data-screen-name=""
                 data-aria-polite="assertive"
                 data-chrome="noheader nofooter noborders noscrollbar transparent">
                  &nbsp;
              </a>

          </div>
            <!-- <div class="loading"><img alt="loader" class="ajaxloader" src="catalog/view/theme/so-shoppystore/images/ajax-loader.gif"></div> -->
          </div>
        </li>
      </ul>
      
    </section><!-- //end Social widgets -->
    <?php wp_footer(); ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#backTop").click(function () {
         $("html, body").animate({scrollTop: 0}, 1000);

      });
        
         var slides = $(".slides").height();
         $(".side-menus").height(slides);
         $(".side-menus-right img").height(slides); 
        var width = $(window).width();
        if (width < 767) {
          vartoshow = 1;
          toscroll = 1;
          dots=false;
          $(".side-menus").height(0);
           $(".side-menus-right img").css('height','auto'); 
        }else{
          toscroll=4;
          vartoshow=4;
          dots = true;
        }
         $(".regular").slick({
            dots: dots,
            infinite: false,
            slidesToShow: vartoshow,
            slidesToScroll: toscroll,
          });
          
      });
       function addtocart(id){
          displayOverlay("Redirecting...");
        $.ajax({
          url:'<?php echo get_site_url();?>/?add-to-cart='+id,
          type:'GET',
          success:function(response){
              window.location = "<?php echo get_site_url();?>/cart/";
          }
          
        });
      }
       function displayOverlay(text) {
          $("<table id='overlay'><tbody><tr><td>" + text + "</td></tr></tbody></table>").css({
              "position": "fixed",
              "top": "0px",
              "left": "0px",
              "width": "100%",
              "height": "100%",
              "background-color": "rgba(0,0,0,.5)",
              "z-index": "10000",
              "vertical-align": "middle",
              "text-align": "center",
              "color": "#fff",
              "font-size": "40px",
              "font-weight": "bold",
              "cursor": "wait"
          }).appendTo("body");
      }
    </script>
  </body>
</html>