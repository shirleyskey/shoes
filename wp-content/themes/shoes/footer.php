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
    <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-3 col-xl-4">
                    <div class="newsletter-text mb-100">
                        <h2>You are <span>Welcome!</span></h2>
                        <p>Hãy bán những đôi giày của bạn cho chúng tôi...</p>
                    </div>
                </div>
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-3 col-xl-2">
                    <div class="newsletter-text mb-100">
                        <h2><i class="fa fa-ambulance" aria-hidden="true"></i></h2>
                        <p>Fast Transfer</p>
                    </div>
                </div>
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-3 col-xl-2">
                    <div class="newsletter-text mb-100">
                        <h2><i class="fa fa-handshake-o" aria-hidden="true"></i></h2>
                        <p>Best Offer</p>
                    </div>
                </div>
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-3 col-xl-4">
                    <div class="newsletter-text mb-100">
                        <h2><i class="fa fa-tags" aria-hidden="true"></i></h2>
                        <p>Chúng tôi chỉ mua giày mới, còn nguyên tag.</p>
                    </div>
                </div>
              
               
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.html"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite">
                            Shoes that are lighter than air</p>

                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="buy-list.html">Buy List</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
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
