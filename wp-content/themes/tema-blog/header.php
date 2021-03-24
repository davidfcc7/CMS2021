<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <!--Inicio nav-->
    <div class="container-fluid-nav">
        <nav class="navbar  sticky-top fixed-top navbar-expand-lg navbar-light container">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Home</a>
              
              <?php wp_nav_menu(array(
                'theme_location' => 'topMenu',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarNav',
                'items_wrap' => '<ul class="navbar-nav">%3$s</ul>',
                'menu_class' => 'nav-item active'
              ) ); ?>
            </div>
          </nav>
    </div>
    <!--Fin nav-->