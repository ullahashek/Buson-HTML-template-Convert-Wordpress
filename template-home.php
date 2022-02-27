<?php
/*

Template Name: Home Page

*/
get_header()
?>

    <main>

        <!-- slider Area Start-->
        <?php get_template_part('template-parts/sections/section', 'slider')?>
        <!-- slider Area End-->

        <!-- We Trusted Start-->
        <?php get_template_part('template-parts/sections/section', 'profile')?>
        <!-- We Trusted End-->

        <!-- services Area Start-->
        <?php get_template_part('template-parts/sections/section', 'service')?>
        <!-- services Area End-->

        <!-- Request Back Start -->
        <?php get_template_part('template-parts/sections/section', 'reqCallback')?>
        <!-- Request Back End -->
        
        <!-- Completed Cases Start -->
        <?php get_template_part('template-parts/sections/section', 'caseCompleted')?>
        <!-- Completed Cases end -->

        <!-- Team-profile Start -->
        <?php get_template_part('template-parts/sections/section', 'teamProfile')?>
        <!-- Team-profile End-->

        <!-- Testimonial Start -->
        <?php get_template_part('template-parts/sections/section', 'testimonial')?>
        <!-- Testimonial End -->

        <!-- Recent Area Start -->
        <?php get_template_part('template-parts/sections/section', 'recentPost')?>
        <!-- Recent Area End-->
    </main>
    <?php get_footer() ?>