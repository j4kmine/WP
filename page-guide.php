<?php /* Template Name: GuidePage */ ?>
<?php get_header(); ?>
    <div class="container">
          <div class="page_guide">
                 <div class="row">
                     
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
