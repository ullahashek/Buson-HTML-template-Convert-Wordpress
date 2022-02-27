<?php
   get_header();
?>

      <!-- breadcumb Area Start-->
      <?php get_template_part('template-parts/sections/section', 'breadcumb')?>
        <!-- breadcumb Area End-->
     
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?php the_post_thumbnail_url() ?>" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?php the_title() ?></h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <?php get_template_part('template-parts/catagories')?>
                        <?php get_template_part('template-parts/commentsCount')?>
                     </ul>
                     <?php the_content() ?>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <!-- <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                        people like this</p> -->
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li>
                              <a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank" class="color-facebook">
                                 <i class="fab fa-facebook"></i>
                              </a>
                        </li>
                        <li>
                              <a href="http://www.instagram.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank" class="color-instagram">
                                 <i class="fab fa-instagram"></i>
                              </a>
                        </li>
                        <li>
                              <a href="http://www.twitter.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank" class="color-twitter">
                                 <i class="fab fa-twitter"></i>
                              </a>
                        </li>
                        <li>
                              <a href="http://www.youtube.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank" class="color-youtube">
                                 <i class="fab fa-youtube"></i>
                              </a>
                        </li>
                        <li>
                              <a href="http://www.pinterest.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank" class="color-pinterest">
                                 <i class="fab fa-pinterest"></i>
                              </a>
                        </li>
                     </ul>
                  </div>

                  <div class="navigation-area">
                     <div class="row">
                        <!-- prev_post here -->
                     <?php
                        $prev_post = get_previous_post();
                        $prev_post_title = get_the_title($prev_post->ID); 
                        $prev_post_thumb = get_the_post_thumbnail($prev_post->ID); 
                     ?>                 
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                     <?php
                        if($prev_post){
                     ?>
                           <div class="thumb">                           
                              <?php previous_post_link('%link', $prev_post_thumb);?>       
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Prev Post</p>                             
                                 <h4>
                                    <?php previous_post_link('%link', $prev_post_title);
                                    ?>
                                 </h4>                             
                           </div>
                     <?php
                       } 
                     ?>
                        </div>
              
                     <!-- prev_post end here -->
                     <?php
                        $next_post = get_next_post();
                        $next_post_title = get_the_title($next_post->ID);
                        $next_post_thumb = get_the_post_thumbnail($next_post->ID);
                     ?>
                     <!-- next post here -->
                     <?php
                        if($next_post){
                     ?>
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                     
                           <div class="detials">  
                              <p>Next Post</p>  
                                 <h4>
                                    <?php next_post_link('%link', $next_post_title);?>
                                 </h4> 
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>    
                           <div class="thumb">
                              <?php next_post_link('%link', $next_post_thumb);?>   
                           </div>
                     
                        </div>
                     <?php
                       } 
                     ?>
                     </div>
                  </div>
         <!-- prev_post end here -->
               </div>

            <!-- Blog author information starts here -->
               <?php
                  $author_id = $post->post_author;
                  $author_name = get_the_author_meta( 'display_name', $author_id );
                  $author_link = get_author_posts_url($author_id);
                  $author_desc = get_the_author_meta( 'user_description', $author_id );
                  $author_avatar = get_avatar_url($author_id);
               ?>              
               <div class="blog-author">
                  <div class="media align-items-center">         
                     <img src="<?php echo $author_avatar?>" alt="<?php echo $author_name; ?>">
                     <div class="media-body">
                        <a href="<?php echo  $author_link ?>">
                           <h4><?php echo $author_name; ?></h4>
                        </a>
                        <p><?php echo $author_desc; ?></p>
                     </div>
                  </div>
               </div>
               <!-- Blog author information end here -->

               <!-- Comments area Starts Here -->
               <div class="comments-area">
                  
                  <h4>
                  <?php
                     $count_comment = get_comments_number($post->ID);
                     if(!$count_comment<1){
                        echo $count_comment. ' Comments';
                     }else{
                        echo $count_comment. ' Comment';
                     }
                  ?> 
                  </h4>
                  <?php
                     // If comments are open or we have at least one comment, load up the comment template.
                     if ( comments_open() || get_comments_number() ) :
                        comments_template();
                     endif;
                  ?>
                  
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="assets/img/comment/comment_1.png" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                 Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
               </div>
               <!-- Comments area ends Here -->
                
               <!-- Comments form Starts Here -->
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="#" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                     </div>
                  </form>
               </div>
               <!-- Comments form ends Here -->

            </div>

            <!-- sidebar starts here -->
               <?php
                  if ( is_active_sidebar( 'main-sidebar' ) ) {
                     dynamic_sidebar('main-sidebar');
                  }
               ?>
            <!-- <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btns" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Search</button>
                     </form>
                  </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Category</h4>
                     <ul class="list cat-list">
                        <li>
                           <a href="#" class="d-flex">
                              <p>Resaurant food</p>
                              <p>(37)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Travel news</p>
                              <p>(10)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Modern technology</p>
                              <p>(03)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Product</p>
                              <p>(11)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Inspiration</p>
                              <p>(21)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Health Care</p>
                              <p>(21)</p>
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>
                     <div class="media post_item">
                        <img src="assets/img/post/post_1.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>From life was you fish...</h3>
                           </a>
                           <p>January 12, 2019</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="assets/img/post/post_2.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>The Amazing Hubble</h3>
                           </a>
                           <p>02 Hours ago</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="assets/img/post/post_3.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>Astronomy Or Astrology</h3>
                           </a>
                           <p>03 Hours ago</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="assets/img/post/post_4.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>Asteroids telescope</h3>
                           </a>
                           <p>01 Hours ago</p>
                        </div>
                     </div>
                  </aside>
                  <aside class="single_sidebar_widget tag_cloud_widget">
                     <h4 class="widget_title">Tag Clouds</h4>
                     <ul class="list">
                        <li>
                           <a href="#">project</a>
                        </li>
                        <li>
                           <a href="#">love</a>
                        </li>
                        <li>
                           <a href="#">technology</a>
                        </li>
                        <li>
                           <a href="#">travel</a>
                        </li>
                        <li>
                           <a href="#">restaurant</a>
                        </li>
                        <li>
                           <a href="#">life style</a>
                        </li>
                        <li>
                           <a href="#">design</a>
                        </li>
                        <li>
                           <a href="#">illustration</a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget instagram_feeds">
                     <h4 class="widget_title">Instagram Feeds</h4>
                     <ul class="instagram_row flex-wrap">
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget newsletter_widget">
                     <h4 class="widget_title">Newsletter</h4>
                     <form action="#">
                        <div class="form-group">
                           <input type="email" class="form-control" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Subscribe</button>
                     </form>
                  </aside>
               </div>
            </div> -->
            <!-- sidebar ends here -->

         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

<?php
   get_footer();
?>
