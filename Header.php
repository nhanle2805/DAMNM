<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bignet
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.min.css">
<script src="<?php bloginfo('template_directory'); ?>/bootstrap/js/bootstrap.min.js"></script>
<script src=" <?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery_menu.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bignet' ); ?></a>

	<header id="masthead " class="site-header container-fluid" role="banner">
	<!-- top bar -->
		<div id="topbar">
			<div class="top">
			    <div class="row container-fluid">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="topbar-left">
							 	<h3 class="phone"><i class="fa fa-phone" aria-hidden="true"></i>0981607782</h3>
						</div>
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<div id="icon"> 
							<i class="fa fa-facebook-square" aria-hidden="true"></i>
							<i class="fa fa-youtube" aria-hidden="true"></i>
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<i class="fa fa-skype" aria-hidden="true"></i>
						 </div>
					</div>
			    </div>
		    </div> 
		</div>
		    
			    <div id="menu">
			        <div class="row container-fluid">
		     	   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		     	   	   <div class="logo"> 
		     	   	   		<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="Logo">
		     	   	   </div> 
		     	   </div>
		     	   <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
		     	   	  <nav id="site-navigation" class="main-navigation" role="navigation">
				      		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bignet' ); ?></button>
				     	 <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			                  </nav>
		     	   </div>
			     	</div>
			    </div>
		   
			<div id="carousel-id" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-id" data-slide-to="0" class=""></li>
					<li data-target="#carousel-id" data-slide-to="1" class=""></li>
					<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
				</ol>
				<div class="carousel-inner" >
					<div class="item">
						<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="<?php bloginfo('stylesheet_directory'); ?>/img/1.jpg">
					</div>
					<div class="item">
						<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="<?php bloginfo('stylesheet_directory'); ?>/img/2.jpg">
					</div>
					<div class="item active">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/3.jpg" alt="Third slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		  <!--end_silder -->
	</header>
