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
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer area -->
<?php wp_footer(); ?>
</body>
</html>