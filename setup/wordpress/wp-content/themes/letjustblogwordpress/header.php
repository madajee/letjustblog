<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package letjustblogwordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="https://s3.amazonaws.com/profileappv1/assets/img/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/bootstrap/dist/css/bootstrap.css" />
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'letjustblogwordpress' ); ?></a>
	
<header class="site-header" role="banner">
<nav class="navbar navbar-custom navbar-expand-sm navbar-dark">
  <div class="container-fluid">
      <a href="index.html" class="navbar-brand right"><img width="30" height="30" class="align-top mr-3" src="https://s3.amazonaws.com/profileappv1/assets/img/profileappv1_logo.png" alt="letjustblog">Let's Just Blog</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
	  </button>
	  
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="blog.html" class="nav-link">Blog</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item left active">
            <a href="index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="resources.html" class="nav-link">Resources</a>
          </li>
          <li class="nav-item">
            <a href="contact.html" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
  </div>
</nav>
</header>
</div>