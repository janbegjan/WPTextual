<!-- start footer area -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright-area">
                  <?php
                    if(is_active_sidebar( 'sidebar_footer' )){
                      dynamic_sidebar( 'sidebar_footer' );
                    }
                  ?>  
                    
                    
                    <!-- <div class="copy-text pull-left">
                        <p>&copy; 2016 <a href="#">Textual</a>, Designed by <a href="#">ShapedTheme </a> in Dhaka</p>
                    </div>
                    <div class="pull-right social-share footer-social-icon">
                        <span>Follow Us: </span>
                        <ul class="">
                            <li><a class="s-facebook" href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a class="s-twitter" href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a class="s-google-plus" href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="s-linkedin" href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="s-instagram" href=""><i class="fa fa-instagram"></i></a></li>
                            <li><a class="s-behance" href=""><i class="fa fa-behance"></i></a></li>
                            <li><a class="s-tumblr" href=""><i class="fa fa-tumblr"></i></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer area -->
<?php wp_footer(); ?>
</body>
</html>