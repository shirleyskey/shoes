
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shoes
 */

get_header();
?>

        <div class="products-catagories-area clearfix section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="product-topbar d-xl-flex align-items-end justify-content-around">
                            <div class="product-sorting d-flex">
                                <!-- <div class="sort-by-date d-flex align-items-center mr-15">
                                    <a href="#" class="btn amado-btn mb-15 mr-15">Jordan</a>
                                    <a href="#" class="btn amado-btn mb-15 mr-15">Yeezy</a>
                                    <a href="#" class="btn amado-btn mb-15 mr-15">Off white</a>
                                   
                                </div> -->
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row grid">
					<!-- Single Product Area -->
					<?php 
                $loop = new WP_Query( array( 'post_type' => 'giay', 'posts_per_page' => 8, 'paged' => get_query_var('paged') ) ); 
                while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                    <?php 
                      $anh01 = get_field('anh_01');
                      $anh02 = get_field('anh_02');
					  $size = get_field('size');
					  $cate = get_field('category');
                	?>
					<div class="col-12 col-sm-6 col-md-4 col-xl-3 element-item <?php echo $cate; ?>">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
							<?php if( !empty( $anh01 ) ): ?>
								<img src="<?php echo esc_url($anh01['url']); ?>" alt="">
							<?php endif; ?>
								<!-- Hover Thumb -->
							<?php if( !empty( $anh02 ) ): ?>
								<img class="hover-img" src="<?php echo esc_url($anh02['url']); ?>" alt="">
							<?php endif; ?>
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price"><?php echo $size; ?></p>
                                    <a href="lien-he.html">
                                        <h6><?php the_title(); ?></h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="cart">
                                        <a href="lien-he.html" data-toggle="tooltip" data-placement="left" title="Liên Hệ"><img src="img/core-img/cart.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                <?php 
                  endwhile; ?>
                     <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(array('query'=> $loop));} ?>
            <?php  wp_reset_postdata(); 
            ?>

                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <nav aria-label="navigation">
                            <ul class="pagination justify-content-end mt-50">
                                <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                                <li class="page-item"><a class="page-link" href="#">02.</a></li>
                                <li class="page-item"><a class="page-link" href="#">03.</a></li>
                                <li class="page-item"><a class="page-link" href="#">04.</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->
<?php
get_footer();
