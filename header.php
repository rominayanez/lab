<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
  <body>
      <div class="container-fluid">
          <header class="site_header">
              <div class="row align-item-center d-flex justify-content-between">
                  <div class="col-sm d-none d-md-block d-xl-none">
                      <a href="#"> <img  src="<?php echo get_template_directory_uri(); ?>\assets\img\escudo-uchile.jpg" alt="Uchile" class="max_width max_height_80"></a>

                  </div>
                  <div class="col-sm">
                      <a href="#home"><img src="<?php echo get_template_directory_uri(); ?>\assets\img\logo001.png" alt="logo_lab" class="max_height_logo"></a>

                  </div>
                  <div class="col-sm d-none d-md-block d-xl-none">
                      <a href="#home"><img src="<?php echo get_template_directory_uri(); ?>\assets\img\favet.jpg" alt="logo_lab" class="max_height_80 max_width favet"></a>

                  </div>
              </div>
          </header>

      <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
          <?php wp_nav_menu( array(
              'theme_location' 	=> 'header-menu',
              'menu_id'		=> 'main-menu',
              'container' 	=> 'ul',
              'menu_class'     	=> 'justify_content_between d-flex py-1 mb-2 no-list azul'
              )
          ); ?>
      <?php } ?>


          <!--<ul class="justify_content_between d-flex py-1 mb-2 no-list">
              <li><a class="p-2 text-muted" href="index.html">Home</a></li>
              <li><a class="p-2 text-muted" href="People.html">People</a></li>
              <li><a class="p-2 text-muted" href="projects.html">Projects</a></li>
              <li><a class="p-2 text-muted" href="publications.html">Publications</a></li>
              <li><a class="p-2 text-muted" href="pictures.html">Pictures</a></li>
              <li><a class="p-2 text-muted" href="services.html">Services</a></li>
              <li><a class="p-2 text-muted" href="Teaching.html">Teaching</a></li>
              <li><a class="p-2 text-muted" href="press.html">Press</a></li>


          </ul>-->
