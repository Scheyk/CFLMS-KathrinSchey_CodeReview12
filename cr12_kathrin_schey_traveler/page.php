<?php get_header(); ?>
   
  <div class="container">
     
    <h1>Hello from a page</h1>

      <?php if(have_posts()) : ?> <!--  If there are pages available  -->

        <?php while(have_posts()) : the_post(); ?> <!-- if there are pages, iterate the page in the loop-->
          <?php the_title(); ?>     <!--retrieves page title-->       
          <?php the_content();?><!--retrieves content-->
        <?php endwhile; ?><!--end the while loop-->

        <?php else :?> <!-- if no page is found then: -->
          <p>No page found</p>
      <?php endif; ?> <!-- end if -->
  </div>

  <?php get_footer(); ?>