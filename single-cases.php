<?php
    get_header();
?>
    <main>

        <!-- breadcumb Area Start-->
        <?php get_template_part('template-parts/sections/section', 'breadcumb')?>
        <!-- breadcumb Area End-->

        <!-- Services Details Start -->
        <div class="services-details section-padding2">
            <div class="container">
                <div class="row">
                
                    <div class="offset-xl-12">  
                        <?php the_content() ?>    
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Details End -->
    </main>
    <?php get_footer() ?>