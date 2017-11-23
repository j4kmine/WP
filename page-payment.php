<?php /* Template Name: PaymentPage */ ?>
<?php get_header(); ?>
    <div class="container">
          <div class="contact-page">
                 <div class="row">
                    
                    <div class="col-sm-12  col-xs-12 blog-main">

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
                    <div class="informasi-payment">Setelah Anda melakukan pembayaran harap melakukan konfirmasi pembayaran melalui link dibawah ini <a href="<?php echo get_site_url();?>/konfirmasi-pembayaran/" target="new" title="Konfirmasi Pembayaran »">Konfirmasi Pembayaran »</a></div>
                    </div><!-- /.blog-main -->

                </div>
          </div>
         
    </div>
<?php get_footer(); ?>
