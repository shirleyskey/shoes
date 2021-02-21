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
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/resources/css/animate.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/resources/css/core-style.css">
    <!-- <script src="<?php echo get_stylesheet_directory_uri();?>/resources/js/jquery/jquery-2.2.4.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php wp_head(); ?>
    
   
</head>
<?php 
$image = get_field('background');
$cot01 = get_field('cot01');
$cot02 = get_field('cot02');
$cot03 = get_field('cot03');
$cot04 = get_field('cot04');

?>
<body class="body-lienhe" <?php body_class(); ?> style="background-image: url(<?php echo get_theme_mod( 'background' ); ?>)">
<div class="overlay"></div>
<?php wp_body_open(); ?>
    <div class="contact-content">
        <div class="container">
            <div class="row">
                <div class="col-0 col-md-2 col-lg-2 col-xl-2">
                </div>
                <div class="col-6 col-md-2 col-lg-2 col-xl-2">
                    <div class="newsletter-text mb-100">
                        <h2>
                            <img src="<?php echo get_theme_mod( 'img_icon1' ); ?>" alt="" class="icon-contact">
                        </h2>
                        <p><?php echo get_theme_mod( 'option1' ); ?></p>
                    </div>
                </div>
                <!-- Newsletter Text -->
                <div class="col-6 col-md-2 col-lg-2 col-xl-2">
                    <div class="newsletter-text mb-100">
                        <h2> <img src="<?php echo get_theme_mod( 'img_icon2' ); ?>" alt="" class="icon-contact"></h2>
                        <p><?php echo get_theme_mod( 'option2' ); ?></p>
                    </div>
                </div>
                <!-- Newsletter Text -->
               
                <div class="col-6 col-md-2 col-lg-2 col-xl-2">
                    <div class="newsletter-text mb-100">
                        <h2> <img src="<?php echo get_theme_mod( 'img_icon3' ); ?>" alt="" class="icon-contact"></h2>
                        <p><?php echo get_theme_mod( 'option3' ); ?></p>
                    </div>
                </div>
                <div class="col-6 col-md-2 col-lg-2 col-xl-2">
                    <div class="newsletter-text mb-100">
                        <h2> <img src="<?php echo get_theme_mod( 'img_icon4' ); ?>" alt="" class="icon-contact"></h2>
                        <p><?php echo get_theme_mod( 'option4' ); ?></p>
                    </div>
                </div>
            </div>
        </div>

            <div class="container">
                <div class="row">
                    <div class="col-1">
                    </div>
                    <div class="col-10">
                        <p class="contact-des-01">
                            <?php echo get_theme_mod( 'contact-des-01' ); ?>
                        </p>
                        <p class="contact-des-02">
                            <?php echo get_theme_mod( 'contact-des-02' ); ?>
                        </p>
                    </div>
                    <div class="col-1">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-0 col-lg-2 col-md-2 col-xl-2 col-xs-2">
                    </div>
                    <div class="col-12 col-lg-8 col-md-8 col-xl-8 col-xs-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <!-- <h2 class="text-center">Liên hệ Chúng tôi</h2> -->
                            </div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="col-0 col-lg-2 col-md-2 col-xl-2 col-xs-2">
                    </div>
                    <div class="col-12 col-lg-12 col-md-12 col-xl-12 col-xs-12 custom_form--btn--layout">
                        <button class="custom_form--btn--on back-to-home">
                          <a href="<?php echo get_home_url(); ?>"> <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>Back to Home</a> 
                        </button>    
                        <!-- <button class="custom_form--btn--on start">Start</button> -->
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
                   
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-2">
                </div>
                <div class="col-12 col-lg-5">
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
    <!-- Active js -->
    
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <script src="<?php echo get_stylesheet_directory_uri();?>/resources/js/active.js"></script>

    <script>
        $(document).ready(function() {

            $('#filters').on( 'click','button', function() {
                var filterValue = $(this).attr('data-filter');
                console.log(filterValue);
                $('.grid').isotope({ 
                    filter: filterValue, 
                    itemSelector: '.element-item',
                
                 });
            });
            //Custom Form 
            $(".custom_form--btn--on.start").click(function(){
                $(".contact-des-01").addClass('off');
                $(".contact-des-02").addClass('off');
                console.log("hihi");
                $(".custom_form--btn--on.start").addClass('off');
                
            });
        });


    </script>
	

<?php wp_footer(); ?>

</body>
</html>
