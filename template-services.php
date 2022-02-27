<?php
/*

Template Name: Service Page

*/
get_header();

?>

    <main>

        <!-- breadcumb Area Start-->
        <?php get_template_part('template-parts/sections/section', 'breadcumb')?>
        <!-- breadcumb Area End-->
       
        <!-- services Area Start-->
        <?php get_template_part('template-parts/sections/section', 'service')?>
        <!-- services Area End-->
        

        <!-- Recent Area Start -->
        <?php get_template_part('template-parts/sections/section', 'recentPost')?>
        <!-- Recent Area End-->

    </main>
    <?php get_footer() ?>