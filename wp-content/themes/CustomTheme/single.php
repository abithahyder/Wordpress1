<?php get_header();
the_post();
?>


     <div id="project" class="project">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><?php the_title();?></h2>
                     <?php $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                     ?>

                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  	<img src="<?php echo $imagepath[0];?>" alt=""/>
                  	<p><?php the_content();?></p>
                  	<h3><?php  the_excerpt();?></h3>
                  	<h3><?php echo get_the_date();?></h3>
                  	<h3><?php the_author();?></h3>
               
               <h2>Comments</h2>
               <?php comments_template();?>
                      
  </div> 
            </div>
         </div>
      </div>
  
<?php get_footer();?>