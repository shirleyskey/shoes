<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shoes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
    <meta name="description" content="">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title  -->
	<title>KicksHunter</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

	<!-- Favicon  -->
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri();?>/resources/img/core-img/favicon.png">

	<!-- Core Style CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/resources/css/core-style.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/resources/style.css">
	<?php wp_head(); ?>
</head>

<body class="body-lienhe" <?php body_class(); ?> style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/resources/img/core-img/bg-contact.png)">
<div class="overlay"></div>
<?php wp_body_open(); ?>
 <!-- Search Wrapper Area Start -->
 <div class="search-wrapper section-padding-100">
       
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix" style="background-color: transparent!important">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <div id="filters" class="button-group"> 
						<button data-filter='*' class="btn-block border-0 pt-3 pb-3 active "><a href="http://localhost/shoes">Back To Buy List</a> </button>
						
                </div>
            </nav>
            <!-- Cart Menu -->
            <!-- <div class="cart-fav-search mb-100">
                <a href="#" class="search-nav"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/img/core-img/search.png" alt=""> Search</a>
            </div> -->
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true" style="color: #000000!important;"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true" style="color: #000000!important;"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true" style="color: #000000!important;"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true" style="color: #000000!important;"></i></a>
            </div>
        </header>
        <!-- Header Area End -->

        <div class="cart-table-area section-padding-100 features">
            <div class="container-fluid">
                <div class="row">
                <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="newsletter-text mb-100">
                        <h2><i class="fa fa-ambulance" aria-hidden="true" style="color: #a20a0a"></i></h2>
                        <p>free shipping</p>
                    </div>
                </div>
                <!-- Newsletter Text -->
                <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="newsletter-text mb-100">
                        <h2><i class="fa fa-handshake-o" aria-hidden="true" style="color: #ffa36c"></i></h2>
                        <p>fast transaction</p>
                    </div>
                </div>
                <!-- Newsletter Text -->
               
                <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="newsletter-text mb-100">
                        <h2><i class="fa fa-shopping-bag" aria-hidden="true" style="color: #799351"></i></h2>
                        <p>best offer</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="newsletter-text mb-100">
                        <h2><i class="fa fa-tags" aria-hidden="true" style="color: #e79e4f"></i></h2>
                        <p>Chúng tôi chỉ mua giày mới, còn nguyên tag.</p>
                    </div>
                </div>
                </div>

                

            </div>
            <div class="container">
            <div class="row">
                    <div class="col-12 col-lg-10 col-md-10 col-xl-10 col-xs-12">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <!-- <h2 class="text-center">Liên hệ Chúng tôi</h2> -->
                            </div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix footer-lienhe" style="background-color: transparent!important">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-5">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/img/core-img/logo.png" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite-1">
                        Trở thành 1 phần trong seller list của KicksHunter</p>
                        <p class="copywrite-2">Chúng tôi sẽ cập nhật cho bạn về tất cả những đôi giày mà chúng tôi đang tìm kiếm hàng tuần</p>

                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-2">
                </div>
                <div class="col-12 col-lg-5">
                    
                    <?php  
                    echo do_shortcode( '[mc4wp_form id="52"]' );
                    ?>
                
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
