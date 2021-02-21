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
                    <form action="<?php echo get_home_url(); ?>/" method="get">
                        <input type="search" name="s" id="s" placeholder="Type your keyword..." onblur="if(this.value=='')this.value='type your search'"
    onfocus="if(this.value=='type your search')this.value=''">
                        <button type="submit"><img src="img/core-img/search.png" alt=""></button>
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
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/img/core-img/logo.png" alt=""></a>
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
                
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <div id="filters" class="button-group"> 
                        <button data-filter='*' class="btn-block border-0 pt-3 pb-3 active ">SHOW ALL</button>
                        <?php
                            $categories = get_categories( array() );

                            foreach( $categories as $category ) {
                                ?>
                                <button data-filter='.<?php echo $category->slug?>' class="btn-block border-0 pb-3 "><?php echo $category->name ?></button>
                        <?php       
                            } 
                        ?>
                        

						
						
                </div>
            </nav>
            <!-- Cart Menu -->
           <!-- Cart Menu -->
           <div class="cart-fav-search mb-100">
                <a href="#" class="search-nav"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/img/core-img/search.png" alt=""> Search</a>
            </div>
            
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="<?php echo get_theme_mod( 'pinterest' ); ?>"><i class="fa fa-pinterest" aria-hidden="true" style="color: #000000!important;"></i></a>
                <a href="<?php echo get_theme_mod( 'instagram' ); ?>"><i class="fa fa-instagram" aria-hidden="true" style="color: #000000!important;"></i></a>
                <a href="<<?php echo get_theme_mod( 'facebook' ); ?>"><i class="fa fa-facebook" aria-hidden="true" style="color: #000000!important;"></i></a>
                <a href="<?php echo get_theme_mod( 'twitter' ); ?>"><i class="fa fa-twitter" aria-hidden="true" style="color: #000000!important;"></i></a>
            </div>
        </header>
        <div class="top-header" style="background-color: <?php echo get_theme_mod( 'color_header' ); ?>!important">
            <div class="logo">
                <a href="<?php echo get_home_url(); ?>">
                <img src="<?php echo ( get_theme_mod( 'logo' ) ); ?>" alt="">
                </a>
            </div>
            <h1 class="text-center"><?php echo get_theme_mod( 'title' ); ?></h1>
        </div>
       
        <!-- Header Area End -->