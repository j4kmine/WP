<?php /* Template Name: PageGuidePage */ ?>
<?php get_header(); ?>
    <div class="container">
          <div class="guideadmin-page">
                 <div class="row">
                    <div class="col-sm-4 col-xs-12">
                      <ul id="top-menu">
                          <li class="active">
                            <a href="#login">login</a>
                          </li>
                          <li>
                            <a href="#smtp">Setting smtp Mail</a>
                          </li>
                          <li>
                            <a href="#gmaps">Setting Google Maps</a>
                          </li>
                          <li>
                            <a href="#return">Setting Email Pengembalian Produk</a>
                          </li>
                          <li>
                            <a href="#slideshow">Setting Slideshow</a>
                          </li>
                          <li>
                            <a href="#tema_konfigurasi">Settting Tema</a>
                          </li>
                          <li>
                            <a href="#product_cat">Menambahkan ,Menghapus dan Mengubah Produk Kategori</a>
                          </li>
                          <li>
                            <a href="#product">Menambahkan ,Menghapus dan Mengubah  Produk</a>
                          </li>
                          <li>
                            <a href="#staticpage">Mengubah Halaman (About, Hubungi Kami, Panduan Dan Sitemap)</a>
                          </li>
                        </ul>
                    </div>
                    <div class="col-sm-8  col-xs-12 blog-main">

                      <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                      <div class="blog-post">
                        <h2 class="blog-post-title">
                            <?php the_title(); ?>
                        </h2>

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
    <script type="text/javascript">
      // Cache selectors
var lastId,
    topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href='#"+id+"']").parent().addClass("active");
   }                   
});
    </script>
<?php get_footer(); ?>
