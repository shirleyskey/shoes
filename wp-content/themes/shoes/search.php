<?php 
get_header();
?>
 <div class="products-catagories-area clearfix section-padding-100">
    <div class="container-fluid">
    
    <div class="row">
            <?php
            $s=get_search_query();
            $args = array(
                            's' =>$s
                        );
                // The Query
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) {
                
                    while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                            ?>
                                <?php 
                                $anh01 = get_field('anh_01');
                                $anh02 = get_field('anh_02');
                                $size = get_field('size');
                                $cate = get_field('category');
                                $post_id = get_the_ID(); // or use the post id if you already have it
                                $category_object = get_the_category($post_id);
                                $category_name = $category_object[0]->slug;
                                ?>
                                <div class="col-4 col-sm-4 col-md-4 col-xl-3 element-item <?php echo $category_name; ?>">
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
                                                <p class="product-price">Size: <span style="color: #000000; font-size: 20px"><?php echo $size; ?></span></p>
                                                <a href="<?php echo the_permalink();?>">
                                                    <h6><?php the_title(); ?></h6>
                                                </a>
                                            </div>
                                            <!-- Ratings & Cart -->
                                            <div class="ratings-cart text-right">
                                                <!-- <div class="cart">
                                                    <a href="<?php echo the_permalink();?>" data-toggle="tooltip" data-placement="left" title="Liên Hệ"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/img/core-img/cart.png" alt=""></a>
                                                </div> -->
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            <?php
                            }
                        }else{
                    ?>
                    <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
            <?php } ?>
        </div>
    </div>
</div>
</div>
<?php
get_footer();
