<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cr12_kathrin_schey_traveler
 */


   // import header
 get_header(); ?>

  <!-- container fluid start -->
  <div class="container-fluid">

    <!-- <h1 class="text-center">More Info</h1> --> 

     <!--  main row start -->
      <div class="row">
      <!--   first main col start (for the widgets) -->
        <div class="sidebar col-lg-2 col-md-4 col-sm-12 mt-3">
          <?php if(is_active_sidebar('sidebar')):
                    dynamic_sidebar('sidebar');
                endif;  
          ?>
        </div>
         <!--   first main col end (for the widgets) -->

         <!-- second main col start (for the whole content) -->
        <div class="col-lg-10 col-md-8 col-sm-12"> 

         <!-- row for the card start  -->       
          <div class="row justify-content-around">
            <?php if(have_posts()) : ?> <!--  If there are posts available  -->
              <?php while(have_posts()) : the_post(); ?> <!-- if there are posts, iterate the posts in the loop --> 

                <!-- col for the card start  -->
                <div class="self col-lg-4 col-md-6 col-sm-12 mt-3">
                  <div class="">
                    <?php if(has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid rounded mx-auto', 'title' => 'Feature image']); ?>                
                    <?php endif; ?>
                  </div>              
                  <p class="text-center">
                    <a href="<?php the_permalink(); ?>"> <!--retrieves URL for the permalink-->
                      <?php the_title(); ?>    <!--retrieves blog title-->
                    </a>
                  </p>                
                  <p>
                    <?php the_time('F j, Y g:i a'); ?> <!--retrieves date blog entry was created-->                     
                  </p>       
                  <p>
                    <?php the_author(); ?> <!--retrieves author of blog entry-->                     
                  </p> 
                  <p><?php the_content(); ?></p><!--retrieves content-->                                 
                </div>
                <!-- col for the card end  -->

                <?php endwhile; ?><!--end the while loop-->
                  <?php else :?> <!-- if no posts are found then: -->
                    <p>
                      No posts found
                    </p>  <!-- no posts found displayed -->
            <?php endif; ?> <!-- end if -->
            <div class="comment p-2">  
              <?php comments_template(); ?> <!-- get the comments  -->                  
            </div>
          </div>
          <!-- row for the card end  --> 
        </div>
        <!-- second main col end (for the whole content) -->
      </div>
      <!--  main row end -->
    </div>
    <!-- container fluid end -->      

 <!-- import footer -->
 <?php get_footer(); ?>