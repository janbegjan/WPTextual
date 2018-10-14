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
                            if(is_single()){
                              the_content();
                            }else{
                              the_excerpt();
                            }
                          ?>
                          <div class="continue-reading text-uppercase">
                              <a href="<?php echo get_the_permalink(); ?>" class="more-link text-center">Continue Reading</a>
                          </div>
                      </div>
                  </div>
              </article>
              <!-- end post -->
              <?php endwhile; ?>
                <!--pagination-->
                <div class="post-pagination text-center">
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-4">
                <!-- start sidebar -->
                <div class="sidebar">
                    <aside class="widget"><!-- start single widget -->
                        <div class="social-share">
                            <h3 class="widget-title text-uppercase">Subscribe & Follow</h3>
                            <ul class="">
                                <li><a class="s-facebook" href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a class="s-twitter" href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a class="s-google-plus" href=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="s-linkedin" href=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="s-instagram" href=""><i class="fa fa-instagram"></i></a></li>
                                <li><a class="s-behance" href=""><i class="fa fa-behance"></i></a></li>
                                <li><a class="s-tumblr" href=""><i class="fa fa-tumblr"></i></a></li>
                            </ul>
                        </div>
                    </aside><!-- end single widget -->
                    <aside class="widget"><!-- start single widget -->
                        <div class="social-share">
                            <h3 class="widget-title text-uppercase">About Me </h3>
    
                            <p>Meh synth Schlitz, tempor duis gin coffee ea next level ethnic fingerstache fanpack
                                nostrud. Photo booth anim 8-bit hellpber 3 wolf moon beard Helvetica. </p>
                        </div>
                     </aside>   


                    <aside class="widget ">
                        <h3 class="widget-title text-uppercase">Search </h3>
                        <form method="get" id="" action="#">
                            <input type="text" placeholder="Search here..." name="s" id="s">
                            <button type="submit" class="submit-btn">Search</button>
                        </form>
                    </aside>
                </div>
                <!-- end sidebar -->
            </div>
        </div>
    </div>
</div>
<!-- end main content -->
<?php get_footer(); ?>