<?php
/**
 * The template for displaying search results pages
 *
 * @link 
 *
 * @package WordPress
 * @subpackage Buson
 * @since Buson 1.0
 */

get_header();
?>
    <!-- breadcumb Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url('assets/img/breadcumb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php _e( 'Search results for: ', 'buson' ); ?>
					            <span class="page-description"><?php echo get_search_query(); ?></span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcumb Area End-->

    <section class="search-result m-5">
        <div class="container">
            <div class="row">
                <!-- Posts Template Here -->
                <?php get_template_part('template-parts/content/content', 'post')?>
                        <!-- Posts End Here -->
            </div>
        </div>
    </section>

<?php get_footer()?>
