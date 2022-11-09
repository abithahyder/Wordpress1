<?php  get_header();

$catv=get_queried_object();

?>
<div id="project" class="project">
         <div class="container">
  <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><?php echo $catv->name;?></h2>
                  </div>
               </div>
            </div>

<?php
$wpnew=array(
            'post_type'=>'news',
            'post_status'=>'publish',
            'tax_query' =>array(['taxonomy'=>'news_category',
            	'field' =>'term_id',
               'terms'=>$catv->term_id]),

);
$newsquery=new WP_Query($wpnew);
while($newsquery->have_posts()){
	$newsquery->the_post();
	$imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');


?>
  <div class="col-md-12 margin_top40">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="news_img">
                           <figure><img src="<?php echo $imagepath[0];?>"></figure>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="news_text">
                           <h3><?php  the_title();?></h3>
                           <span><?php echo get_the_date();?></span> 
                           <div class="date_like">
                              <span>Like </span><span class="pad_le">Comment</span>
                           </div>
                           <p><?php the_content();?></p>
                        </div>
                     </div>
                  </div>
               </div>

<?php }?>

           </div>
       </div>


<?php get_footer();?>