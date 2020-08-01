<!--  import header -->
<?php get_header(); ?>	

	 <!-- container fluid start -->
	<div class="container-fluid">

		<h1 class="text-center my-4"><!-- <img src="logo.png"> --></h1>
		
		<!--  main row start -->
		<div class="row">
			<!--   first main col start (for the widgets) -->
			<div class="sidebar col-lg-2 col-md-2 col-sm-12">
				<?php if(is_active_sidebar('sidebar')):
     					dynamic_sidebar('sidebar');
    		 		  endif;  
				?>
			</div>
			<!--   first main col end (for the widgets) -->

			<!-- second main col start (for the whole content) -->
			<div class="col-lg-10 col-md-10 col-sm-12">
				<!-- row for the card start  --> 
				<div class="row justify-content-around">
					<?php if(have_posts()) : ?> <!--  If there are posts available  -->
       					<?php while(have_posts()) : the_post(); ?> <!-- if there are posts, iterate the posts in the loop -->

						 <!-- col for the card start  -->
						<div class="self col-lg-4 col-md-6 col-sm-12 mt-3">
							<div>
								<?php if(has_post_thumbnail()) : ?>
									<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid rounded mx-auto', 'title' => 'Feature image']); ?>								
								<?php endif; ?>
							</div>							
							<p class="text-center">
								<a href="<?php the_permalink(); ?>"><!--retrieves URL for the permalink-->
          							<?php the_title(); ?>    <!--retrieves blog title-->
       							</a>
       						</p>       					
       						<p>
       							<?php the_time('F j, Y g:i a'); ?>  <!--retrieves date blog entry was created-->
       						</p>       
       						<p>
       							<?php the_excerpt(); ?>  <!--retrieves excerpt-->     								
       						</p>       						
       						<div class="comment">
								<?php comment_form(); ?>       							 	
       						</div>
       						<hr>								
						</div>
						<!-- col for the card end  -->
       					<?php endwhile; ?><!--end the while loop-->
       						<?php else :?> <!-- if no posts are found then: -->
       						<p>
       							No posts found <!-- no posts found displayed -->
       						</p>  
       				<?php endif; ?> <!-- end if -->
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

