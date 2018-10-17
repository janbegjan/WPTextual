<?php get_header(); ?>
<!-- start main content -->
<div class="main-content">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="">
              <?php while(have_posts()):
                the_post();
              ?>
               <!-- start post -->
              <article class="post">
                  <a href="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>"><?php the_post_thumbnail(); ?></a>
                  <div class="post-content">
                      <div class="post-header">
                          <h2><?php the_title(); ?>
                            <span class="pull-right"><?php echo get_the_date(); ?></span>
                          </h2>
                      </div>
                      <div class="entry-content">
                          <?php 
                            the_content();
                          ?>
                      </div>
                  </div>
              </article>
              <!-- end post -->
              <?php endwhile; ?>

            </div>
        </div>
    </div>
</div>
<!-- end main content -->
<?php get_footer(); ?>
