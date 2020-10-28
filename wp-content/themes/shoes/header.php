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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
 <!-- Search Wrapper Area Start -->
 <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.html"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <div id="filters" class="button-group"> 
						<button data-filter='*' class="btn-block border-0 pt-3 pb-3 active ">SHOW ALL</button>
						<button data-filter='.jordan' class="btn-block border-0 pb-3 ">Jordan</button>
						<button data-filter='.yeezy' class="btn-block border-0 pb-3 ">Yeezy</button>
						<button data-filter='.offwhite' class="btn-block border-0 pb-3 mb-4">Off White</button>
                </div>
            </nav>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="#" class="search-nav"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/img/core-img/search.png" alt=""> Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->