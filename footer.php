<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Buson
 * @since Buson 1.0
 */

?>
<?php
    $footer_about = get_field('footer_about', 'option');
    $footer_logo = $footer_about['footer_logo']['url'];
    $footer_description = $footer_about['footer_description'];
?>
<footer>
<!-- Footer Start-->
<div class="footer-area footer-padding">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                <div class="single-footer-caption mb-30">

                        <!-- logo -->
                    <div class="footer-logo">
                        <a href="http://themecamp.local/"><img src="<?php echo $footer_logo ?>" alt=""></a>
                    </div>
                    <div class="footer-tittle">
                        <div class="footer-pera">
                            <p><?php echo $footer_description ?></p>
                        </div>
                    </div>
                    <!-- social -->
                    <div class="footer-social">
                    <?php
                       $footer_socials = $footer_about['footer_socials'];
                       
                       foreach($footer_socials as $footer_social){
                    ?>            
                        <a href="<?php echo $footer_social['footer_social_url'] ?>"><i class="<?php echo $footer_social['footer_social_icon'] ?>"></i></a>
                    <?php
                        }
                    ?>
                    </div>

                </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <?php
                            if ( is_active_sidebar( 'footer-1' ) ) {
                                dynamic_sidebar('footer-1');
                            }
                        ?>
                        <!-- <h4>Company</h4>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="single-blog.html">Services</a></li>
                            <li><a href="#">Cases</a></li>
                            <li><a href="contact.html">  Contact Us</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <?php
                            if ( is_active_sidebar( 'footer-2' ) ) {
                                dynamic_sidebar('footer-2');
                            }
                        ?>
                        <!-- <h4>Services</h4>
                        <ul>
                            <li><a href="#">Commercial Cleaning</a></li>
                            <li><a href="#">Office Cleaning</a></li>
                            <li><a href="#">Building Cleaning</a></li>
                            <li><a href="#">Floor Cleaning</a></li>
                            <li><a href="#">Apartment Cleaning</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <?php
                            $footer_contact = get_field('footer_contact', 'option');
                            $footer_contact_title = $footer_contact['footer_contact_title'];
                            $footer_contact_phone = $footer_contact['footer_contact_phone'];
                            $footer_contact_email = $footer_contact['footer_contact_email'];
                            $footer_contact_address = $footer_contact['footer_contact_address'];
                            
                        ?>
                        <h4><?php echo $footer_contact_title ?></h4>
                        <ul>
                        <li><a href="tel:<?php echo $footer_contact_phone; ?>"><?php echo $footer_contact_phone ?></a></li>
                        <li><a href="mailto:<?php echo $footer_contact_email ?>"> <?php echo $footer_contact_email ?></a></li>
                        <li><a href="http://themecamp.local/"><?php echo $footer_contact_address ?></a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer-bottom aera -->
<div class="footer-bottom-area footer-bg">
    <div class="container">
        <div class="footer-border">
            <div class="row d-flex align-items-center">
                <div class="col-xl-12 ">
                    <div class="footer-copy-right text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <?php
                        $footer_copyright = get_field('footer_copyright', 'option');
                        echo $footer_copyright;     
                        ?>
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End-->

</footer>

<?php wp_footer() ?>   
</body>
</html>