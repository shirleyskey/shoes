<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shoes
 */

?>

    <!-- ##### Newsletter Area Start ##### -->
   
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-12">
                    <div class="single_widget_area">
                        <p class="copywrite-1 text-center">
                        Trở thành 1 phần trong seller list của KicksHunter</p>
                        <p class="copywrite-2 text-center">Chúng tôi sẽ cập nhật cho bạn về tất cả những đôi giày mà chúng tôi đang tìm kiếm hàng tuần</p>

                    </div>
                </div>
               
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-3 col-md-3 col-xl-3">
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-xl-6">
                    <?php  
                    echo do_shortcode( '[mc4wp_form id="52"]' );
                    ?>
                </div>
                <div class="col-12 col-lg-3 col-md-3 col-xl-3">
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/resources/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/resources/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/resources/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/resources/js/plugins.js"></script>
    <!-- Active js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <script src="<?php echo get_stylesheet_directory_uri();?>/resources/js/active.js"></script>

    <script>
        $( document ).ready(function() {

            $('#filters').on( 'click','button', function() {
                var filterValue = $(this).attr('data-filter');
                console.log(filterValue);
                $('.grid').isotope({ 
                    filter: filterValue, 
                    itemSelector: '.element-item',
                
                 });
            });


        });


    </script>
	

<?php wp_footer(); ?>

</body>
</html>
