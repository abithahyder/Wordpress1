<?php

get_header();
the_post();
?>


 <div class="blue_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><?php the_title();?></h2>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- about section -->
      <div class="about">
         <div class="container">
            <div class="row">
            	 <?php  the_post_thumbnail(array(500,500));?>
            	 <?php the_excerpt();?>
              <?php echo get_the_content(); ?>
              
            </div>
         </div>
      </div>
      <?php  $imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
            print_r($imagepath);
      ?>


<img src="<?php echo $imagepath[0];?>"/>


<?php get_footer();?>