<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Nunu's Desserts With Soul</title>
  <?php wp_head(); ?>
</head>
<body>
  <div id="hidden-menu">
    <ul>
      <li>
        <a  href="<?php echo site_url(''); ?>">Home</a>
      </li>
      <li>
        <a href="<?php echo site_url('/menu'); ?>">Menu</a>
      </li>
      <li>
        <a href="<?php echo site_url('/about'); ?>">About Us</a>
      </li>
      <li>
        <a href="<?php echo site_url('/events'); ?>">Events</a>
      </li>
      <li>
        <a href="<?php echo site_url('/store'); ?>">Order Online</a>
        <i class='fas fa-shopping-bag'></i>
      </li>
    </ul>
  </div>
  
  <nav>
    <div id="logo-img">
      <a href='#'>
        <img src="<?php echo get_template_directory_uri(); ?>/img/horizontalLogo.png">
      </a>
    </div>
    <div id="menu-icon">
      <i class="fas fa-bars"></i>
    </div>
    <ul id="menu">
      <li>
        <a class="active" href="<?php echo site_url(''); ?>">Home</a>
      </li>
      <li>
        <a href="<?php echo site_url('/menu'); ?>">Menu</a>
      </li>
      <li>
        <a href="<?php echo site_url('/about'); ?>">About Us</a>
      </li>
      <li>
        <a href="<?php echo site_url('/events'); ?>">Events</a>
      </li>
      <li>
        <a href="<?php echo site_url('/store'); ?>">Order Online</a>
        <i class='fas fa-shopping-bag'></i>
      </li>
    </ul>
  </nav>