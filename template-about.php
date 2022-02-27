<?php
/*

Template Name: About Page

*/
get_header();

?>

    <main>

        <!-- breadcumb Area Start-->
        <?php get_template_part('template-parts/sections/section', 'breadcumb')?>
        <!-- breadcumb Area End-->

        <!-- We Trusted Start-->
        <?php get_template_part('template-parts/sections/section', 'profile')?>
        <!-- We Trusted End-->
      
        <!-- Testimonial Start -->
        <?php get_template_part('template-parts/sections/section', 'testimonial')?>
        <!-- Testimonial End -->

        <!-- Recent Area Start -->
        <?php get_template_part('template-parts/sections/section', 'recentPost')?>?>
        <!-- Recent Area End-->

    </main>
    
   <?php get_footer() ?>