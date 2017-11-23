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
                     
                    <div class="col-sm-12  col-xs-12 blog-main noppading-left">
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
