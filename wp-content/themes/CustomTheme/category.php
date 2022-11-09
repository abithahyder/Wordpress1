<?php 

get_header();


?>
 <?php get_sidebar();?>
 
     <div id="project" class="project">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Featured Products</h2>
                  </div>
               </div>
            </div>
            <div class="row">
            <div class="product_main">
             <?php
              while(have_posts()) {
                the_post();
               $imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
               

               ?>
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="<?php echo $imagepath[0];?>" alt="#"/></div>
                 
                     <h3><?php  the_title();?> </h3>
                     <h3><?php the_content();?></h3>
                       <a  href="<?php the_permalink();?>" class="btn btn-primary">Details</a>
                  </div>
          
                          
            
              <?php } ?>
                            
                    <?php echo wp_pagenavi(); ?>
            </div>

            </div>
         </div>
      </div>
  
   
     
      <!-- enslatter section -->
      <!-- three_box section -->
           <!-- end three_box section -->

      <!--  footer -->
    <?php get_footer();
    ?>
      <!-- end footer -->
   

