<?php  $options = get_option('coderit');?>
<!doctype html>
<html <?php language_attributes();?>>
<head> 
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- favicon-icon  -->
  <link rel="shortcut icon" href="<?php echo $options['favicon-upload']['url'] ?>" type="image/x-icon">
  <!-- Social-meta tag  -->
  <meta name="description" content="<?php echo bloginfo('description');?>" >
  <?php  wp_head(); ?>
</head>
<body>
   <!-- strat header_area  -->
   <header class="About_header ">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-md-12 col-lg-3 ">
            <div class="logo">
              <a href="<?php echo home_url();?>">
                <img src="<?php echo $options['logo-upload']['url']; ?>" loading="lazy" alt="saasup_logo">
              </a> 
              <div class="menu-icon">
                <a href="<?php echo $options['header-button-1-url']; ?>" class="btn-2"><?php echo $options['header-button-1']; ?></a>
                <a href="#" class="menu-icon1"><i class="fa-solid fa-bars-staggered"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-9">
            <div class="menus d-flex justify-content-end align-items-center">
              <nav class="menu"> 
               <?php 
                  wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'menu_class' => 'd-flex',
                    'walker' => new WP_Bootstrap_Navwalker(),
                  ));  
                ?> 
              </nav>
              <div class="menu-button">
                <a href="<?php echo $options['header-button-1-url']; ?>" class="btn-1"><?php echo $options['header-button-1']; ?></a>
              </div>
            </div> 
          </div> 
       </div> 
      </div>
    </div>
  </header>
  <!-- end header_area  -->