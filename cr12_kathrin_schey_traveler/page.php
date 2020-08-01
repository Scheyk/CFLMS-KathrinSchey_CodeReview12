<?php get_header(); ?>
   
  <div class="container-fluid row"> 

        <div class="sidebar col-lg-2 col-md-2 col-sm-12">
          <?php if(is_active_sidebar('sidebar')):
                    dynamic_sidebar('sidebar');
                endif;  
          ?>
        </div> 

        <div class="col-lg-10 col-md-10 col-sm-12">
          <div class="contact">
          <?php if(have_posts()) : ?> <!--  If there are pages available  -->

        <?php while(have_posts()) : the_post(); ?> <!-- if there are pages, iterate the page in the loop-->
          <!-- <?php the_title(); ?>  -->    <!--retrieves page title-->       
          <?php the_content();?><!--retrieves content-->
        <?php endwhile; ?><!--end the while loop-->

        <?php else :?> <!-- if no page is found then: -->
          <p>No page found</p>
      <?php endif; ?> <!-- end if --> 
      </div>         
        </div>  

      
  </div>



  <?php get_footer(); ?>