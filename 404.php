<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package Buson
 * @subpackage Buson
 * @since Buson 1.0
 */

get_header(); ?>
        <!-- breadcumb Area Start-->
            <?php get_template_part('template-parts/sections/section', 'breadcumb')?>
        <!-- breadcumb Area End-->

	<div id="primary" class="container content-area">
		<div id="content" class="row site-content" role="main">
            <div class="col-md-12 text-center">
                <header class="page-header m-3">
                    <h1 class="page-title"><?php _e( 'Not Found', 'buson' ); ?></h1>
                </header>

                <div class="page-wrapper">
                    <div class="page-content">
                        <h2 class="m-3"><?php _e( 'This is somewhat embarrassing, isn’t it?', 'buson' ); ?></h2>
                        <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'buson' ); ?></p>

                        <?php get_search_form(); ?>
                        <p class="mt-3">Or</p>
                        <div class="hero__btn mb-5">
                            <a href="<?php echo site_url() ?>" class="btn hero-btn">Back To Home</a>
                        </div>
                    </div><!-- .page-content -->
                </div><!-- .page-wrapper -->
            </div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>