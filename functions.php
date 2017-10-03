<?php 
function add_library_wp(){
	 require( get_template_directory() . '/Microdot_Walker_Nav_Menu.php' );
}
add_action( 'after_setup_theme', 'add_library_wp' );
function wooc_extra_register_fields() {?>
      
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password"><?php _e( 'First name', 'woocommerce' ); ?></label>

					 <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
				</p>
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password"><?php _e( 'Last name', 'woocommerce' ); ?></label>

					  <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
				</p>
     
       <?php
 }
 add_action( 'woocommerce_register_form_start', 'wooc_extra_register_fields' );


function wooc_save_extra_register_fields( $customer_id ) {
   
      if ( isset( $_POST['billing_first_name'] ) ) {
             //First name field which is by default
             update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
             // First name field which is used in WooCommerce
             update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
      }
      if ( isset( $_POST['billing_last_name'] ) ) {
             // Last name field which is by default
             update_user_meta( $customer_id, 'last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
             // Last name field which is used in WooCommerce
             update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
      }

}
add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' );
add_action('init', 'slideshow_register');

function slideshow_register() {

    $labels = array(
        'name' => _x('Slideshow', 'post type general name'),
        'singular_name' => _x('Slideshow Item', 'post type singular name'),
        'add_new' => _x('Add New', 'slideshow item'),
        'add_new_item' => __('Add New Slideshow Item'),
        'edit_item' => __('Edit Slideshow Item'),
        'new_item' => __('New Slideshow Item'),
        'view_item' => __('View Slideshow Item'),
        'search_items' => __('Search Slideshow'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','thumbnail','excerpt'),
        'rewrite' => array('slug' => 'slideshow', 'with_front' => FALSE)
      ); 

    register_post_type( 'slideshow' , $args );
}


add_action("admin_init", "admin_init");

function admin_init(){
  add_meta_box("url-meta", "Slider Options", "url_meta", "slideshow", "side", "low");
}

function url_meta(){
  global $post;
  $custom = get_post_custom($post->ID);
  $url = $custom["url"][0];
  $url_open = $custom["url_open"][0];
  ?>
  <label>URL:</label>
  <input name="url" value="<?php echo $url; ?>" /><br />
  <input type="checkbox" name="url_open"<?php if($url_open == "on"): echo " checked"; endif ?>>URL open in new window?<br />
  <?php
}

add_action('save_post', 'save_details');
function save_details(){
  global $post;

  if( $post->post_type == "slideshow" ) {
      if(!isset($_POST["url"])):
         return $post;
      endif;
      if($_POST["url_open"] == "on") {
        $url_open_checked = "on";
      } else {
        $url_open_checked = "off";
      }
      update_post_meta($post->ID, "url", $_POST["url"]);
      update_post_meta($post->ID, "url_open", $url_open_checked);
  }

}

function wp_rpt_activation_hook() {
    if(function_exists('add_theme_support')) {
        add_theme_support( 'post-thumbnails', array( 'slideshow' ) ); // Add it for posts
    }
    add_image_size('slider', 554, 414, true);
}
add_action('after_setup_theme', 'wp_rpt_activation_hook');

// Array of custom image sizes to add
$my_image_sizes = array(
    array( 'name'=>'slider', 'width'=>554, 'height'=>414, 'crop'=>true ),
);

// For each new image size, run add_image_size() and update_option() to add the necesary info.
// update_option() is good because it only updates the database if the value has changed. It also adds the option if it doesn't exist
foreach ( $my_image_sizes as $my_image_size ){
    add_image_size( $my_image_size['name'], $my_image_size['width'], $my_image_size['height'], $my_image_size['crop'] );
    update_option( $my_image_size['name']."_size_w", $my_image_size['width'] );
    update_option( $my_image_size['name']."_size_h", $my_image_size['height'] );
    update_option( $my_image_size['name']."_crop", $my_image_size['crop'] );
}

// Hook into the 'intermediate_image_sizes' filter used by image-edit.php.
// This adds the custom sizes into the array of sizes it uses when editing/saving images.
add_filter( 'intermediate_image_sizes', 'my_add_image_sizes' );
function my_add_image_sizes( $sizes ){
    global $my_image_sizes;
    foreach ( $my_image_sizes as $my_image_size ){
        $sizes[] = $my_image_size['name'];
    }
    return $sizes;
}

/*  End custom post types */
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
// Hooking up our function to theme setup

function theme_styles() { 
	wp_enqueue_style( 'bootsrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script( 'bootsrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script( 'jssor-js', get_template_directory_uri() . '/js/jssor.slider-26.2.0.min.js');
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js');
	wp_enqueue_script( 'pes', get_template_directory_uri() . '/js/pes.js');
	wp_enqueue_script( 'fifa', get_template_directory_uri() . '/js/fifa.js');


}
add_action('wp_enqueue_scripts', 'theme_styles');

function tcx_register_theme_customizer( $wp_customize ) {
	
    $wp_customize->add_section( 'contact_configuration' , array(
        'title'    => __( 'Contact Configuration', 'rancakmall' ),
        'priority' => 30
    ) );
	$wp_customize->add_setting(
		'phone',
		array(
			'default'     	    => '0751-27907',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'phone',
			array(
			    'label'      => 'Phone',
			    'section'    => 'contact_configuration',
			    'settings'   => 'phone'
			)
		)
	);
	$wp_customize->add_setting(
		'email',
		array(
			'default'     	    => 'sales@rancamall.com',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'email',
			array(
			    'label'      => 'Email',
			    'section'    => 'contact_configuration',
			    'settings'   => 'email'
			)
		)
	);
	$wp_customize->add_setting(
		'whatsapp',
		array(
			'default'     	    => '+62 822 456 74234',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'whatsapp',
			array(
			    'label'      => 'Whatsapp',
			    'section'    => 'contact_configuration',
			    'settings'   => 'whatsapp'
			)
		)
	);
	$wp_customize->add_setting(
		'address',
		array(
			'default'     	    => 'Jalan Jend. A. Yani No 5',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'address',
			array(
			    'label'      => 'Address',
			    'section'    => 'contact_configuration',
			    'settings'   => 'address'
			)
		)
	);
	$wp_customize->add_section( 'social_media_configuration' , array(
        'title'    => __( 'Social Media Configuration', 'rancakmall' ),
        'priority' => 30
    ) );
	$wp_customize->add_setting(
		'fb',
		array(
			'default'     	    => 'https://www.facebook.com/',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'fb',
			array(
			    'label'      => 'Facebook',
			    'section'    => 'social_media_configuration',
			    'settings'   => 'fb'
			)
		)
	);
	$wp_customize->add_setting(
		'fb_page',
		array(
			'default'     	    => 'facebook',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'fb_page',
			array(
			    'label'      => 'Facebook Page',
			    'section'    => 'social_media_configuration',
			    'settings'   => 'fb_page'
			)
		)
	);
	$wp_customize->add_setting(
		'twitter',
		array(
			'default'     	    => 'https://twitter.com/',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'twitter',
			array(
			    'label'      => 'Twitter',
			    'section'    => 'social_media_configuration',
			    'settings'   => 'twitter'
			)
		)
	);
	$wp_customize->add_setting(
		'twitter_widget_id',
		array(
			'default'     	    => '375593032344563712',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'twitter_widget_id',
			array(
			    'label'      => 'Twitter Widget Id',
			    'section'    => 'social_media_configuration',
			    'settings'   => 'twitter_widget_id'
			)
		)
	);
	$wp_customize->add_setting(
		'instagram',
		array(
			'default'     	    => 'https://www.instagram.com/',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'instagram',
			array(
			    'label'      => 'Instagram',
			    'section'    => 'social_media_configuration',
			    'settings'   => 'instagram'
			)
		)
	);
	$wp_customize->add_section( 'banner_configuration' , array(
        'title'    => __( 'Banner Configuration', 'rancakmall' ),
        'priority' => 30
    ) );
	$wp_customize->add_setting(
		'logo_bank',
		array(
			'default'     	    =>  get_bloginfo('url').'/wp-content/themes/rancakmall/icon/footer_bni_below.png',
			
		)
	);
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'logo_bank',
           array(
               'label'      => 'Logo Bank Footer',
               'section'    => 'banner_configuration',
               'settings'   => 'logo_bank',
              
           )
       )
   );

	$wp_customize->add_setting(
		'logo_bank_link',
		array(
			'default'     	    => 'http://bni.co.id/id-id/',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'logo_bank_link',
			array(
			    'label'      => 'Hyperlink Banner Logo Bank Footer',
			    'section'    => 'banner_configuration',
			    'settings'   => 'logo_bank_link'
			)
		)
	);
	$wp_customize->add_setting(
		'banner_slider_bottom',
		array(
			'default' =>  get_bloginfo('url').'/wp-content/themes/rancakmall/icon/logo_bni_below_slide.png',
			
		)
	);
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'banner_slider_bottom',
           array(
               'label'      => 'Bottom Slider banner',
               'section'    => 'banner_configuration',
               'settings'   => 'banner_slider_bottom',
              
           )
       )
   );
	$wp_customize->add_setting(
		'banner_slider_bottom_link',
		array(
			'default'     	    => 'http://bni.co.id/id-id/',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'banner_slider_bottom_link',
			array(
			    'label'      => 'Hyperlink Slider Bottom',
			    'section'    => 'banner_configuration',
			    'settings'   => 'banner_slider_bottom_link'
			)
		)
	);
	$wp_customize->add_setting(
		'banner_slider_sidebar',
		array(
			'default' =>  get_bloginfo('url').'/wp-content/themes/rancakmall/icon/logo_bni_side.png',
			
		)
	);
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'banner_slider_sidebar',
           array(
               'label'      => 'Sidebar Slider banner',
               'section'    => 'banner_configuration',
               'settings'   => 'banner_slider_sidebar',
              
           )
       )
   );
	$wp_customize->add_setting(
		'banner_slider_sidebar_link',
		array(
			'default'     	    => 'http://bni.co.id/id-id/',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'banner_slider_sidebar_link',
			array(
			    'label'      => 'Hyperlink Slider Sidebar',
			    'section'    => 'banner_configuration',
			    'settings'   => 'banner_slider_sidebar_link'
			)
		)
	);
	$wp_customize->add_section( 'menu_configuration' , array(
        'title'    => __( 'Menu Configuration', 'rancakmall' ),
        'priority' => 30
    ) );
    $wp_customize->add_setting(
		'contact_menu_url',
		array(
			'default'     	    => get_site_url().'/hubungi-kami',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'contact_menu_url',
			array(
			    'label'      => 'Hubungi Kami',
			    'section'    => 'menu_configuration',
			    'settings'   => 'contact_menu_url'
			)
		)
	);
	$wp_customize->add_setting(
		'about_menu_url',
		array(
			'default'     	    => get_site_url().'/tentang-rancakmall',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'about_menu_url',
			array(
			    'label'      => 'Tentang Rancakmall',
			    'section'    => 'menu_configuration',
			    'settings'   => 'about_menu_url'
			)
		)
	);

	$wp_customize->add_setting(
		'panduan',
		array(
			'default'     	    => get_site_url().'/panduan',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'panduan',
			array(
			    'label'      => 'Panduan',
			    'section'    => 'menu_configuration',
			    'settings'   => 'panduan'
			)
		)
	);
	$wp_customize->add_setting(
		'pengembalian',
		array(
			'default'     	    => get_site_url().'/pengembalian',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'pengembalian',
			array(
			    'label'      => 'Pengembalian',
			    'section'    => 'menu_configuration',
			    'settings'   => 'pengembalian'
			)
		)
	);
	$wp_customize->add_setting(
		'sitemap',
		array(
			'default'     	    => get_site_url().'/sitemap',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'sitemap',
			array(
			    'label'      => 'Sitemap',
			    'section'    => 'menu_configuration',
			    'settings'   => 'sitemap'
			)
		)
	);
	$wp_customize->add_section( 'footer_header_configuration' , array(
        'title'    => __( 'Header & Footer Configuration', 'rancakmall' ),
        'priority' => 30
    ) );
	$wp_customize->add_setting(
		'header_bg',
		array(
			'default'   =>  get_bloginfo('url').'/wp-content/themes/rancakmall/Background/header_bg.jpg',
			
		)
	);
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'header_bg',
           array(
               'label'      => 'Header Background',
               'section'    => 'footer_header_configuration',
               'settings'   => 'header_bg',
              
           )
       )
   );
   $wp_customize->add_setting(
		'footer_bg',
		array(
			'default'     	    =>  get_bloginfo('url').'/wp-content/themes/rancakmall/Background/footer_bg.jpg',
			
		)
	);
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'footer_bg',
           array(
               'label'      => 'Footer Background',
               'section'    => 'footer_header_configuration',
               'settings'   => 'footer_bg',
              
           )
       )
   );
	 $wp_customize->add_setting(
		'about_bg',
		array(
			'default'     	    =>  get_bloginfo('url').'/wp-content/themes/rancakmall/Background/about_bg.jpg',
			
		)
	);
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'about_bg',
           array(
               'label'      => 'About Header Background',
               'section'    => 'footer_header_configuration',
               'settings'   => 'about_bg',
              
           )
       )
   );
	 $wp_customize->add_setting(
		'footer_newsletter_opening',
		array(
			'default'     	    => 'Daftar dan simpan!',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'footer_newsletter_opening',
			array(
			    'label'      => 'Newsletter Opening',
			    'section'    => 'footer_header_configuration',
			    'settings'   => 'footer_newsletter_opening'
			)
		)
	);
	$wp_customize->add_setting(
		'footer_newsletter_body',
		array(
			'default'     	    => 'Kirimkan saya Email penawaran, penawaran khusus dan produk ekslusif!',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'footer_newsletter_body',
			array(
			    'label'      => 'Newsletter Body',
			    'section'    => 'footer_header_configuration',
			    'settings'   => 'footer_newsletter_body'
			)
		)
	);
	$wp_customize->add_section( 'icon_configuration' , array(
        'title'    => __( 'Icon Configuration', 'rancakmall' ),
        'priority' => 30
    ) );
  $wp_customize->add_setting(
		'icon_thumb',
		array(
			'default'     	    =>  get_bloginfo('url').'/wp-content/themes/rancakmall/icon/thumb.png',
			
		)
	);
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'icon_thumb',
           array(
               'label'      => 'Icon Thumb Img',
               'section'    => 'icon_configuration',
               'settings'   => 'icon_thumb',
              
           )
       )
   );
   $wp_customize->add_setting(
		'icon_thumb_text',
		array(
			'default'     	    => 'Produk Berkualitas',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'icon_thumb_text',
			array(
			    'label'      => 'Icon Thumb Text',
			    'section'    => 'icon_configuration',
			    'settings'   => 'icon_thumb_text'
			)
		)
	);
	$wp_customize->add_setting(
		'icon_phone',
		array(
			'default'     	    =>  get_bloginfo('url').'/wp-content/themes/rancakmall/icon/phone.png',
			
		)
	);
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'icon_phone',
           array(
               'label'      => 'Icon Phone Img',
               'section'    => 'icon_configuration',
               'settings'   => 'icon_phone',
              
           )
       )
   );
   $wp_customize->add_setting(
		'icon_phone_text',
		array(
			'default'     	    => 'Support Yang Terbaik',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'icon_phone_text',
			array(
			    'label'      => 'Icon Phone Text',
			    'section'    => 'icon_configuration',
			    'settings'   => 'icon_phone_text'
			)
		)
	);
	$wp_customize->add_setting(
		'icon_delivery',
		array(
			'default'     	    =>  get_bloginfo('url').'/wp-content/themes/rancakmall/icon/delivery.png',
			
		)
	);
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'icon_delivery',
           array(
               'label'      => 'Icon Delivery Img',
               'section'    => 'icon_configuration',
               'settings'   => 'icon_delivery',
              
           )
       )
   );
   $wp_customize->add_setting(
		'icon_delivery_text',
		array(
			'default'     	    => 'Pengiriman Yang Cepat',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'icon_delivery_text',
			array(
			    'label'      => 'Icon Delivery Text',
			    'section'    => 'icon_configuration',
			    'settings'   => 'icon_delivery_text'
			)
		)
	);
	$wp_customize->add_setting(
		'icon_return',
		array(
			'default'     	    =>  get_bloginfo('url').'/wp-content/themes/rancakmall/icon/return.png',
			
		)
	);
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'icon_return',
           array(
               'label'      => 'Icon Return Img',
               'section'    => 'icon_configuration',
               'settings'   => 'icon_return',
              
           )
       )
   );
   $wp_customize->add_setting(
		'icon_return_text',
		array(
			'default'     	    => '14 Hari Uang Kembali',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'icon_return_text',
			array(
			    'label'      => 'Icon Return Text',
			    'section'    => 'icon_configuration',
			    'settings'   => 'icon_return_text'
			)
		)
	);
	$wp_customize->add_setting(
		'icon_lock',
		array(
			'default'     	    =>  get_bloginfo('url').'/wp-content/themes/rancakmall/icon/lock.png',
			
		)
	);
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'icon_lock',
           array(
               'label'      => 'Icon Keamanan Img',
               'section'    => 'icon_configuration',
               'settings'   => 'icon_lock',
              
           )
       )
   );
   $wp_customize->add_setting(
		'icon_lock_text',
		array(
			'default'     	    => 'Terjamin Kemanan Nya',
			
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'icon_lock_text',
			array(
			    'label'      => 'Icon Keamanan Text',
			    'section'    => 'icon_configuration',
			    'settings'   => 'icon_lock_text'
			)
		)
	);
  

} // end tcx_register_theme_customizer
function add_custom_bg_wp(){
?>
<style type="text/css">
	.top_menu_banner{
		background-image: url("<?php echo get_theme_mod(header_bg)?get_theme_mod(header_bg):get_bloginfo('url').'/wp-content/themes/rancakmall/Background/header_bg.jpg';?>");
	}
	.footer_newsletter{
		background-image: url("<?php echo get_theme_mod(footer_bg)?get_theme_mod(footer_bg):get_bloginfo('url').'/wp-content/themes/rancakmall/Background/footer_bg.jpg';?>");
	}
</style>
<?php

}

add_action( 'wp_head', 'add_custom_bg_wp' );
add_action( 'customize_register', 'tcx_register_theme_customizer' );

if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {
/**
* Get the product thumbnail, or the placeholder if not set.
*
* @subpackage Loop
* @param string $size (default: 'shop_catalog')
* @param int $deprecated1 Deprecated since WooCommerce 2.0 (default: 0)
* @param int $deprecated2 Deprecated since WooCommerce 2.0 (default: 0)
* @return string
*/
function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $deprecated1 = 0, $deprecated2 = 0 ) {
global $post;
if ( has_post_thumbnail() ) {
return '<a href="' . get_permalink( $post->ID ) . '">' . get_the_post_thumbnail( $post->ID, $size ) . '</a>';
} elseif ( wc_placeholder_img_src() ) {
return wc_placeholder_img( $size );
}
}
}