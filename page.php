<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<?php
	get_header();
?>
		<!-- breadcumb Area Start-->
			<?php get_template_part('template-parts/sections/section', 'breadcumb')?>
        <!-- breadcumb Area End-->
	<section class="custom-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 my-5">
					<h2 class="text-center mb-4"><?php the_title() ?></h2>
					<?php the_content() ?>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
?>