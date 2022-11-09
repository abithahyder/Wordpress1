      <!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title><?php bloginfo('name');?><?php wp_title() ?><?php if (is_front_page()) { echo "|" ;bloginfo('description');}?></title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
      <?php wp_head(); ?>
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo get_template_directory_uri();?>/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body
    class="main-layout footer_to90 contact_page"
<?php body_class();?>
   >
      <!-- loader  -->
      
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="header_top d_none1">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4">
                        <ul class="conta_icon">
                           <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/call.png" alt="#"/>Call us:<?php the_field('contact_number',24);?></a> </li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <ul class="social_icon">
                           <li> <a href="<?php the_field('facebook_link',24);?>"><i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li> <a href="<?php the_field('twitter_link',24);?>"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="<?php the_field('linkedin_link',24);?>"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li> <a href="<?php the_field('instagram_link',24);?>"><i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <div class="se_fonr1">
                           <form action="#" >
                              <div class="select-box">
                                 <label for="select-box1" class="label select-box1"><span class="label-desc">English</span> </label>
                                 <select id="select-box1" class="select">
                                    <option value="Choice 1">English</option>
                                    <option value="Choice 1">Falkla</option>
                                    <option value="Choice 2">Germa</option>
                                    <option value="Choice 3">Neverl</option>
                                 </select>
                              </div>
                           </form>
                           <span class="time_o"> Open hour: <?php the_field('working_hour',24);
                           echo "-";
                           the_field('working_hour_stop',24);?></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header_midil">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-4">
                        <ul class="conta_icon d_none1">
                           <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/email.png" alt="#"/> <?php the_field('e-mail',24);?></a> </li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <?php $logoimg=get_header_image();
                       ?>
                        <a class="logo" href="<?php echo site_url();?>"><img src="<?php echo $logoimg;?>" alt="#"/></a>
                     </div>
                     
                     <div class="col-md-4">
                        <ul class="right_icon d_none1">
                           <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/shopping.png" alt="#"/></a> </li>
                           <a href="#" class="order">Order Now</a> 
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header_bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                             <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'menu_class'=>'navbar-nav')) ?>  
                          
                           </div>
                        </nav>
                     </div>
                     <div class="col-md-4">
                        <div class="search">
                           <form action="/action_page.php">
                              <input class="form_sea" type="text" placeholder="Search" name="search">
                              <button type="submit" class="seach_icon"><i class="fa fa-search"></i></button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>