<?php /* Template Name: Tutorial */ ?>
<?php get_header(); ?>
    <style type="text/css">
        h5 {
            font-weight: bold;
            font-size: 15px;
            padding-top: 15px;
            padding-bottom: 15px;
        }
        p {
            padding-top: 7px;
            padding-bottom: 7px;
        }
        footer{
            display: none;
        }
        h4 {
            font-weight: bold;
        }
        ul#top-menu li{
            background: #391011;

        }
        ul#top-menu li{
            padding: 7px 20px;
        }
        ul#top-menu{
            padding-top: 0px;
           
                z-index: 0 !important;
                    margin-left: -25px;
        }
         ul#top-menu li a{
            color: #fff;
            text-transform: capitalize;
         }
         div#wpadminbar {
            display: none;
        }

        .mycont {
            padding-top: 35px;
             padding-bottom: 35px;
        }
      /*  ul#top-menu li a.active {
            color: black;
        }*/
    </style>
  <div class="container">
      <div class="row">
     <div class="col-sm-4 col-xs-12">
          <ul id="top-menu">
              <li >
                <a href="#login">login Admin</a>
              </li>
              <li>
                <a href="#usermanagement">Manajemen Pengguna</a>
              </li>              
              <li>
                <a href="#contact">Mengubah konfigurasi kontak phone , email ,whatsapp dan alamat</a>
              </li>
              <li>
                <a href="#sociallink">Mengganti link social media</a>
              </li>
              <li>
                <a href="#bg">Mengubah Background Header ,Footer dan Text di footerKlik Header & Footer</a>
              </li>
              <li>
                <a href="#cat">Menambah , mengubah dan menghapus kategori produk</a>
              </li>
              <li>
                <a href="#icon">Mengubah Icon di bawah slider</a>
              </li>
                <li>
                <a href="#produk">Menambah , mengubah dan menghapus produk</a>
              </li>
               <li>
                <a href="#slideshow">Slideshow</a>
              </li>
                <li>
                <a href="#banner">Mengganti gambar dan link Banner di bawah slider</a>
              </li>
                <li>
                <a href="#bannerfooter">Mengganti gambar dan link Banner di bawah footer</a>
              </li>
              <li>
                <a href="#page">Mengubah Halaman (Tentang Rancak Mal Dan Panduan)</a>
              </li>             
               <li>
                <a href="#mailform">Setting Mailform</a>
              </li>
              <li>
                <a href="#newsletter">Mengirim Newsletter</a>
              </li>
               <li>
                <a href="#order">Cek Pemesanan</a>
              </li>
            </ul>
        </div>
        <div class="col-sm-8 col-xs-12 mycont">
          <br/><br/>
            <div id="login">
                <h4>Login Admin</h4>
                <p>Untuk login ke halaman admin gunakan Link berikut : http://rancakmall.com/wp-admin sehingga tampil form login admin. Masukkan username dan password yang telah diberikan. berikut tampilan form login :</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/login_box.jpg" class="img-responsive">
            </div>
            <div id="usermanagement">
                <h4>Manajemen User</h4>
                <h5>A.Menambahkan User</h5>
                <p>untuk menambahkan mengedit dan menghapis user klik menu Users dan klik Add New</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/user_add_menu.png" class="img-responsive">
                <p>isi form user</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/user_form_add.png" class="img-responsive">
                <img src="<?php echo get_template_directory_uri();?>/doc/user_form_add1.png" class="img-responsive">
                <p>Simpan user dengan cara klik Add New User </p>
                <h5>B.Mengubah User</h5>
                <p>untuk mengubah user klik menu Users dan klik All Users ,Klik Edit</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/user_menu.png" class="img-responsive">
                <h5>C.Menghapus User</h5>
                <p>untuk mengahpus user klik menu Users dan klik All Users ,Klik Delete</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/user_menu.png" class="img-responsive">
            </div>
            <div id ="contact">
                <h4>Mengubah konfigurasi kontak phone , email ,whatsapp dan alamat</h4>
                <p>Untuk mengubah kontak phone , email ,whatsapp dan alamatr klik Appearance > Costumize</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/menu_admin_costumize.jpg" class="img-responsive">
                <p>Klik menu Contact Configuration</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/contact_costumize_menu.jpg" class="img-responsive">
                <p>Berikut kolom kontak</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/contact_costumize.jpg" class="img-responsive">
                <p>Dan simpan perubahan dengan klik Save & Publish</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/save&publish.png" class="img-responsive">
            </div>
            <div id ="sociallink">
                <h4>Mengganti link social media</h4>
                <p>Untuk mengubah link social media klik Appearance > Costumize</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/menu_admin_costumize.jpg" class="img-responsive">
                <p>klik menu Social Media Configuration</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/social_media_costumize_menu.jpg" class="img-responsive">
                <p>Facebook , twitter dan Instagram link yang diisi akan mengubah link social media di footer, sedangkan facebook page dan twitter id akan mengubah sticky facebook dan twitter icon di sebelah kanan jendela website</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/social_media_costumize.jpg" class="img-responsive">
                <p>Dan simpan perubahan dengan klik Save & Publish</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/save&publish.png" class="img-responsive">
            </div>
            <div id ="bg">
                <h4>Mengubah Background Header ,Footer dan Text di footerKlik Header & Footer</h4>
                <p>Untuk mengubah background di header dan footer klik Appearance > Costumize , dengan ukuran gambar header 1349x195px , footer dan about 1200x400 </p>
                <img src="<?php echo get_template_directory_uri();?>/doc/menu_admin_costumize.jpg" class="img-responsive">
                <img src="<?php echo get_template_directory_uri();?>/doc/header_footer_costumize_menu.jpg" class="img-responsive">
                <p>Klik Change Image</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/header_footer_costumize.jpg" class="img-responsive">
                <p>Pilih Gambar dan klik Choose Image </p>
                <img src="<?php echo get_template_directory_uri();?>/doc/choose_image_header_costumize.jpg" class="img-responsive">
                <p>Dan simpan perubahan dengan klik Save & Publish</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/save&publish.png" class="img-responsive">
                <h4>Mengubah Text newsletter di footer</h4>
                <p>Untuk mengubah background di header dan footer klik Appearance > Costumize</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/menu_admin_costumize.jpg" class="img-responsive">
                <img src="<?php echo get_template_directory_uri();?>/doc/header_footer_costumize_menu.jpg" class="img-responsive">
                <p>isi field newsletter opening dan newsletter body</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/newsletter_footer_costumize.jpg" class="img-responsive">
                <p>Dan simpan perubahan dengan klik Save & Publish</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/save&publish.png" class="img-responsive">
            </div>
            <div id="cat">
                <h4>Menambah , mengubah dan menghapus kategori produk</h4>
                <h5>A.Menambah Kategori Produk</h5>
                <p>Untuk menambah kategori produk,klik menu Products > Categories</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/menu_category_product.jpg" class="img-responsive">
                <img src="<?php echo get_template_directory_uri();?>/doc/category_product_form.jpg" class="img-responsive">
                <p>Untuk menambahkan icon di kategori , klik Upload Image</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/category_product_form1.jpg" class="img-responsive">
                <p>Pilih gambar icon</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/choose_image_category_product.jpg" class="img-responsive">
                <p>Klik Use Image,bila sudah selesai klik Add new category</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/add_category_product.jpg" class="img-responsive">
                <h5>B.Mengubah Kategori Produk</h5>
                <p>Untuk menambah kategori produk,klik menu Products > Categories</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/menu_category_product.jpg" class="img-responsive">
                <p>Arahkan kursor ke arah kategori produk yang ingin diubah dan klik Edit</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/category_product_list.jpg" class="img-responsive">
                <p>Ubah field kategori yang ingin diubah</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/category_product_form_edit1.png" class="img-responsive">
                <p>Untuk mengubah icon di kategori , klik Upload/Add Image Image</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/category_product_form_edit2.png" class="img-responsive">
                <p>Pilih gambar icon dengan ukuran 37x28px</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/choose_image_category_product.jpg" class="img-responsive">
                <p>Klik Use Image,bila sudah selesai klik Update</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/update.png" class="img-responsive">
                <h5>C.Menghapus Kategori Produk</h5>
                <p>Untuk menghapus kategori produk,klik menu Products > Categories</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/menu_category_product.jpg" class="img-responsive">
                <p>Arahkan kursor ke arah kategori produk yang ingin dihapus dan klik Delete</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/category_product_list.jpg" class="img-responsive">
            </div>
            <div id ="icon">
                <h4>Mengubah Icon di bawah slider</h4>
                <p>Untuk Icon di bawah slider klik Appearance > Costumize</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/menu_admin_costumize.jpg" class="img-responsive">
                <p>Pilih Icon Configuration</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/icon_customize.png" class="img-responsive">
                <p>Klik Change Image</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/icon_costumize_form.png" class="img-responsive">
                <p>Pilih Gambar dan klik Choose Image untuk ukuran Image Icon Adalah 90x73 px</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/choose_image_header_costumize.jpg" class="img-responsive">
                <p>Dan simpan perubahan dengan klik Save & Publish</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/save&publish.png" class="img-responsive">
            </div>
          <div id="produk">
                <h4>Menambah , mengubah dan menghapus produk</h4>
                <h5>A.Menambahkan Produk</h5>
                <p>Klik menu Products > All Products</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/menu_product.jpg" class="img-responsive">
                <p>Klik Add New</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/add_product.jpg" class="img-responsive">
                <img src="<?php echo get_template_directory_uri();?>/doc/product_form1.jpg" class="img-responsive">
                <img src="<?php echo get_template_directory_uri();?>/doc/product_form2.jpg" class="img-responsive">
                <p>Memilih gambar produk ,setelah set product image atau add product gallery images di klik maka akan muncul kotak dialog gambar</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/choose_image_product.jpg" class="img-responsive">
                <img src="<?php echo get_template_directory_uri();?>/doc/choose_image_product2.jpg" class="img-responsive">
                <p>Bila gambar yang diinginkan sudah dipilih, maka klik Set product image atau Add to gallery .</p>
                <h5>B.Menerapkan stock barang terhadap suatu produk dapat diatur dengan cara klik Inventory</h5>
                <img src="" class="img-responsive">
                <p>Bila manage stock dicheklist maka akan tampil pengaturan stock yang lebih spesifik , dimana bisa ditentukan berapa stock tiap produk nya</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/product_inventory_form.jpg" class="img-responsive">
                <img src="<?php echo get_template_directory_uri();?>/doc/product_inventory_form2.jpg" class="img-responsive">
                <p>Kegunaan mendasar Manage stock adalah , apabila stock suatu barang habis , maka tidak perlu mengupdate manual stock , system akan otomatis memberitahu kustomer bahwa stock barang yang dibeli habis</p>
                <h5>C.Berat dan Dimensi Produk</h5>
                <p>Di Modul produk kita juga dapat mengatur berat suatu produk , agar ketika produk dibeli maka ongkos kirim JNE nya akan menyesuaikan secara otomatis dengan berat produk, untuk mengubah berat suatu produk ,kita bisa klik Shipping</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/product_dimension_form.jpg" class="img-responsive">
                <p>Bila telah selesai mengisi produk ,klik publish untuk menyimpan dan mempublish atau klik save as draft untuk menyimpan tanpa mempublish ke halaman web</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/product_save_panel.jpg" class="img-responsive">
                <h5>D.Mengubah Produk</h5>
                <p>Klik menu Products > All Products</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/menu_product.jpg" class="img-responsive">
                <p>Arahkan kursor ke produk yang ingin diubah klik Edit </p>
                <img src="<?php echo get_template_directory_uri();?>/doc/product_list.jpg" class="img-responsive">
                <h5>E.Menghapus Produk</h5>
                <p>Klik menu Products > All Products</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/menu_product.jpg" class="img-responsive">
                <p>Arahkan kursor ke produk yang ingin dihapus klik Edit </p>
                <img src="<?php echo get_template_directory_uri();?>/doc/product_list.jpg" class="img-responsive">
            </div>
            <div id="slideshow">
                <h4>Slideshow (Tambah , Edit dan Hapus Slideshow)</h4>
                <h5>A.Menambah Slide Show</h5>
                <img src="<?php echo get_template_directory_uri();?>/doc/slideshow_menu.jpg" class="img-responsive">
                <p>Klik Add New</p>
                 <img src="<?php echo get_template_directory_uri();?>/doc/slideshow_add.jpg" class="img-responsive">
                <p> Masukan Judul Slideshow</p>
                <p> Masukan Url Slideshow ,jika ingin memasukkan external link , masukkan link lengkap beserta “http atau https”  </p>
                <p>  Dan Pilih Gambar   dengan ukuran 648x450    </P>
                 <img src="<?php echo get_template_directory_uri();?>/doc/slideshow_form.jpg" class="img-responsive">
                <p>Pilih Gambar dan klik Set Featured Image </P>
                 <img src="<?php echo get_template_directory_uri();?>/doc/choose_image_slideshow.jpg" class="img-responsive">
                <p>Klik Publish</P>
                <img src="<?php echo get_template_directory_uri();?>/doc/publish_slideshow.jpg" class="img-responsive">
                <h5>B.Mengubah SlideShow</h5>
                <img src="<?php echo get_template_directory_uri();?>/doc/slideshow_menu.jpg" class="img-responsive">
                <p>Pilih Slideshow yang ingin diubah dengan cara klik Edit</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/slideshow_list.jpg" class="img-responsive">
                <h5>C.Menghapus SlideShow</h5>
                <img src="<?php echo get_template_directory_uri();?>/doc/slideshow_menu.jpg" class="img-responsive">
                <p>Pilih Slideshow yang ingin dihapus dengan cara klik Trash</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/slideshow_list.jpg" class="img-responsive">
            </div>
          <div id ="banner">
            <h4>Mengganti gambar dan link Banner di bawah slider</h4>
            <p>Untuk mengganti gambar dan link Banner di bawah slider klik Appearance > Costumize</p>
            <img src="<?php echo get_template_directory_uri();?>/doc/menu_admin_costumize.jpg" class="img-responsive">
            <p>Klik menu Banner Configuration</p>
            <img src="<?php echo get_template_directory_uri();?>/doc/banner_costumize_menu.jpg" class="img-responsive">
            <p>Berikut kolom Untuk mengganti banner dan link di setiap image , untuk banner di bawah slider mempunyai ukuran 643x176px </p>
            <p>Sedangkan Banner disamping slider mempunyai ukuran 256x604px</p>
            <img src="<?php echo get_template_directory_uri();?>/doc/banner_costumize1.jpg" class="img-responsive">
            <img src="<?php echo get_template_directory_uri();?>/doc/banner_costumize2.jpg" class="img-responsive">
            <p>Dan simpan perubahan dengan klik Save & Publish</p>
            <img src="<?php echo get_template_directory_uri();?>/doc/save&publish.png" class="img-responsive">
          </div>
          <div id ="bannerfooter">
            <h4>Mengganti gambar dan link Banner di bawah footer</h4>
            <p>Untuk mengganti gambar dan link Banner di bawah slider klik Appearance > Costumize</p>
            <img src="<?php echo get_template_directory_uri();?>/doc/menu_admin_costumize.jpg" class="img-responsive">
            <p>Klik menu Banner Configuration</p>
            <img src="<?php echo get_template_directory_uri();?>/doc/banner_costumize_menu.jpg" class="img-responsive">
            <p>Berikut kolom Untuk mengganti banner footer dengan ukuran 365x30px</p>
            <img src="<?php echo get_template_directory_uri();?>/doc/banner_costumize1footer.png" class="img-responsive">
            
            <p>Dan simpan perubahan dengan klik Save & Publish</p>
            <img src="<?php echo get_template_directory_uri();?>/doc/save&publish.png" class="img-responsive">
          </div>
            <div id="page">
                <h4>Mengubah Halaman (Tentang Rancak Mal, Hubungi Kami, Dan Panduan)</h4>
                <h5>A.Mengubah Halaman Tentang RancakMal</h5>
                <p>Untuk mengubah Halaman Tentang RancakMal di web ,klik Pages > All Pages , arahkan kursor ke Tentang RancakMall , klik Edit untuk mengubah</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/about_list.jpg" class="img-responsive">
                <img src="<?php echo get_template_directory_uri();?>/doc/about_form.jpg" class="img-responsive">
                <img src="<?php echo get_template_directory_uri();?>/doc/about_theme.jpg" class="img-responsive">
                <p>Klik update untuk menyimpan perubahan</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/product_save_panel.jpg" class="img-responsive">
                <h5>B.Mengubah Halaman Panduan</h5>
                <p>Untuk mengubah Halaman Panduan di web ,klik Pages > All Pages , arahkan kursor ke Panduanl , klik Edit untuk mengubah</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/panduan_list.png" class="img-responsive">
                <img src="<?php echo get_template_directory_uri();?>/doc/panduan_form.png" class="img-responsive">
                <img src="<?php echo get_template_directory_uri();?>/doc/panduan_theme.png" class="img-responsive">
                <p>Klik update untuk menyimpan perubahan</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/product_save_panel.jpg" class="img-responsive">
                <h5>C.Mengubah Halaman Tentang RancakMal</h5>
                <h5>Menyisipkan Gambar Di Halaman</h5>
                <p>Untuk menyisipkan gambar di halaman</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/upload_image.png" class="img-responsive">
                <p>Pilih gambar dan klik Insert Into Page</p>
                 <img src="<?php echo get_template_directory_uri();?>/doc/choose_image_page.png" class="img-responsive">
            </div>
            <div id="mailform">
                <h4>Setting Mailform</h4>
                <h5>Kontak form</h5>
                <p>Untuk mengubah penerima di Kontak Form,klik Contact</p>
                <img src ="<?php echo get_template_directory_uri();?>/doc/mailform_menu.png" class="img-responsive">
                <p>Klik Contact Form 1</p>
                <img src ="<?php echo get_template_directory_uri();?>/doc/mailform_list.png" class="img-responsive">
                <img src ="<?php echo get_template_directory_uri();?>/doc/mailform_contact.png" class="img-responsive">
                <p>Klik Save untuk menyimpan perubahan</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/mailform_save.png" class="img-responsive">
                <h5>Formulir pengembalian barang </h5>
                <p>Untuk mengubah penerima di Formulir pengembalian barang ,klik Contact</p>
                <img src ="<?php echo get_template_directory_uri();?>/doc/mailform_menu.png" class="img-responsive">
                <p>Klik return product</p>
                <img src ="<?php echo get_template_directory_uri();?>/doc/mailform_list.png" class="img-responsive">
                <img src ="<?php echo get_template_directory_uri();?>/doc/mailform_contact.png" class="img-responsive">
                <p>Klik Save untuk menyimpan perubahan</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/mailform_save.png" class="img-responsive">
                <h5>Konfirmasi pembayaran  </h5>
                <p>Untuk mengubah penerima di Konfirmasi pembayaran  ,klik Contact</p>
                <img src ="<?php echo get_template_directory_uri();?>/doc/mailform_menu.png" class="img-responsive">
                <p>Klik konfirmasi Pembayaran</p>
                <img src ="<?php echo get_template_directory_uri();?>/doc/mailform_list.png" class="img-responsive">
                <img src ="<?php echo get_template_directory_uri();?>/doc/mailform_contact.png" class="img-responsive">
                <p>Klik Save untuk menyimpan perubahan</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/mailform_save.png" class="img-responsive">
                <h5>Order notifikasi  </h5>
                <p>Untuk mengubah penerima Order notifikasi ,klik WooCommerce ,pilih Settings dan pilih Tab Emails</p>
                <img src="<?php echo get_template_directory_uri();?>/doc/order.png" class="img-responsive">
                <img src="<?php echo get_template_directory_uri();?>/doc/order2.png" class="img-responsive">
            </div>
            <div id="newsletter">
                <h4>Mengirim Newsletter</h4>
               
                <video class="img-responsive" controls muted>
                  <source src="<?php echo get_template_directory_uri();?>/doc/newsletter.webm" type="video/WebM ">
                  Your browser does not support HTML5 video.
                </video>
            </div>
            <div id="order">
                 <h4>Cek Pemesanan</h4>
                 <p>Untuk mengecek pesanan,klik WooCommerce ,pilih Orders </p>
                <img src="<?php echo get_template_directory_uri();?>/doc/chekorder.png" class="img-responsive">
            </div>          
        </div>
  </div>
  </div>
  <script type="text/javascript">
      // Cache selectors
      $(document).ready(function(){

         var width = $(window).width();
         if (width > 767) {
            $("ul#top-menu").sticky({topSpacing:0});
        }
      });
       $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top 
        }, 100, 'swing', function () {
            window.location.hash = target;
        });
    });
    $(document).ready(function () {
    $(document).on("scroll", onScroll);
    
    //smoothscroll

    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
         $(' ul#top-menu a').parent().css('background', '#391011');
            $(' ul#top-menu a.active').parent().css('background', 'gray');
    });

});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#top-menu a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menu-center ul li a').removeClass("active");
            currLink.addClass("active");
            $(' ul#top-menu a').parent().css('background', '#391011');
            $(' ul#top-menu a.active').parent().css('background', 'gray');
        }
        else{
            currLink.removeClass("active");
            $(' ul#top-menu a').parent().css('background', '#391011');
            $(' ul#top-menu a.active').parent().css('background', 'gray');
        }
    });
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>
<?php get_footer(); ?>
