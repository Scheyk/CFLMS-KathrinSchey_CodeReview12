<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <!--displays the encoding-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <!--displays the Tagline in Settings->General -->

  <!-- google-font-link -->
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <title>
    <?php bloginfo('name'); ?>
  </title>

  <?php wp_head(); ?>
</head>

<body>

  <nav class="navbar navbar-expand-md bg-warning navbar-dark mb-2 p-3" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Mount Everest</a>
        <?php
          wp_nav_menu( array(
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
          ) );
        ?>
   </div>
</nav>