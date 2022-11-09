<?php

//Template Name:Home
get_header();

$cat = get_categories(array('taxonomy' => 'category'));

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$searchData='';
if(isset($_GET['titlee'])!=""){
   $searchData=$_GET['titlee'];
}

?>

<section class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="text-bg">
                     <h1> <span class="blodark"> Romofyi </span> <br>Trands 2019</h1>
                     <p>A huge fashion collection for ever </p>
                     <a class="read_more" href="#">Shop now</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="ban_img">
                     <figure><img src="<?php echo get_template_directory_uri();?>/images/ban_img.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- six_box section -->
      <div class="six_box">
         <div class="container-fluid">
            <div class="row">
               <?php foreach($cat as $catv){ 
                  
                  $meta_image = get_wp_term_image($catv->term_id);
                
                  ?>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <a href="<?php echo get_category_link($catv->term_id); ?>"><i><img src="<?php echo $meta_image;?>" alt="#"/></i></a>
                     <span><?php echo $catv->name;?></span>
                  </div>
               </div>
              <?php }?>
              
               
               
             
            </div>
         </div>
      </div>
      <!-- end six_box section -->
      <!-- project section -->
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
             
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="<?php echo get_template_directory_uri();?>/images/shoes1.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
            
             
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="<?php echo get_template_directory_uri();?>/images/shoes2.png" alt="#"/></div>
                     <h3 >Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="<?php echo get_template_directory_uri();?>/images/shoes3.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
              
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="<?php echo get_template_directory_uri();?>/images/shoes4.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
              
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="<?php echo get_template_directory_uri();?>/images/shoes5.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
              
            
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="<?php echo get_template_directory_uri();?>/images/tisat1.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
              
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="<?php echo get_template_directory_uri();?>/images/tisat2.png" alt="#"/></div>
                     <h3 >Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="<?php echo get_template_directory_uri();?>/images/tisat3.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="<?php echo get_template_directory_uri();?>/images/tisat4.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="<?php echo get_template_directory_uri();?>/images/tisat5.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
               
            
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="<?php echo get_template_directory_uri();?>/images/mix1.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="<?php echo get_template_directory_uri();?>/images/mix2.png" alt="#"/></div>
                     <h3 >Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="<?php echo get_template_directory_uri();?>/images/mix3.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
              
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="<?php echo get_template_directory_uri();?>/images/mix4.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
               
                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="<?php echo get_template_directory_uri();?>/images/mix5.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>
              
               <div class="col-md-12">
                  <a class="read_more" href="#">See More</a>
               </div>
            </div>
            </div>
         </div>
      </div>
      <!-- end project section -->
      <!-- fashion section -->
      <div class="fashion">
         <img src="<?php echo get_template_directory_uri();?>/images/fashion.jpg" alt="#"/>
      </div>
    
      <div class="news">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Letest News</h2>
                  </div>
               </div>
            </div>
            <form method="get">
            <input type="search" name="titlee" placeholder="search news" class="letter_form" />
         </form>
            <div class="row">
               <?php
               $newcat =get_terms(['taxonomy' => 'news_category','hide_empty' =>false, 'orderby'=>'name','order' =>'ASC',
                  'parent'=>0]);
  foreach($newcat as $newcatv){
               ?>
             
               <div class="col-sm-4">
                  <a href="<?php echo get_category_link($newcatv->term_id);?>"> <h3><?php  echo $newcatv->name;?></h3></a>
               </div>
             <?php } ?>
            </div>
            <div class="row">

               <?php 
                $wpnew = array(
                    'post_type' => 'news',
                    'post_status' =>'publish',
                    's' =>$searchData,
                    'posts_per_page' =>1,
                    'paged' =>$paged

                );
                $newsquery = new Wp_Query($wpnew);
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
              <?php  }?>
              

            <?php wp_pagenavi(array('query' =>$newsquery))
            ?>
            </div>
         </div>
      </div>
      <!-- end news section -->
      <!-- newslatter section -->
      <div  class="newslatter">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <h3 class="neslatter">Subscribe To The Newsletter</h3>
               </div>
               <div class="col-md-7">
                  <form class="news_form">
                     <input class="letter_form" placeholder=" Enter your email" type="text" name="Enter your email">
                     <button class="sumbit">Subscribe</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end newslatter section -->
      <!-- three_box section -->
      <div class="three_box">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="<?php echo get_template_directory_uri();?>/images/icon_mony.png"></i>
                     <span>Money Back</span>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="<?php echo get_template_directory_uri();?>/images/icon_gift.png"></i>
                     <span>Special Gift</span>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="<?php echo get_template_directory_uri();?>/images/icon_car.png"></i>
                     <span>Free Shipping</span>
                  </div>
               </div>
            </div>
         </div>
      </div>



<?php 
get_footer();
?>