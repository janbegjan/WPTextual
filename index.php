<?php get_header(); ?>
<!-- start main content -->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
              <?php while(have_posts()):
                the_post();
              ?>
               <!-- start post -->
              <article class="post">
                  <a href="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>"><?php the_post_thumbnail(); ?></a>
                  <div class="post-content">
                      <div class="post-header">
                          <h2><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a> 
                            <span class="pull-right"><?php echo get_the_date(); ?></span>
                          </h2>
                      </div>
                      <div class="entry-content">
                          <?php 
                            the_excerpt();
                          ?>
                          <div class="continue-reading text-uppercase">
                              <a href="<?php echo get_the_permalink(); ?>" class="more-link text-center"><?php _e('Continue Reading', 'wptextual'); ?></a>
                          </div>
                      </div>
                  </div>
              </article>
              <!-- end post -->
              <?php endwhile; ?>
                <!--pagination-->
                <div class="post-pagination text-center">
                <?php 
                  the_posts_pagination( array(
                  'mid_size' => 2,
                  'screen_reader_text' => ' ',
                  'prev_text' => __( 'Newer', 'wptextual' ),
                  'next_text' => __( 'Older', 'wptextual' ),
                )); ?> 

                </div>

            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>
<!-- end main content -->
<?php get_footer(); ?>
