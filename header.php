<?php
/**
 This file is part of Vertical-Ascent wordpress theme

 Vertical-Ascent is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.

 Vertical-Ascent is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Vertical-Ascent. If not, see <http://www.gnu.org/licenses/>.
 **/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php if (is_home () ) { echo bloginfo('name'); echo ' | '; bloginfo('description'); }
	 			 elseif ( is_category() ) { single_cat_title(); echo ' | ' ; echo bloginfo('name'); }
	 			 elseif (is_single() || is_page()) { single_post_title(); echo ' | ' ; echo bloginfo('name'); }
	 			 else { wp_title('',true); } ?>
	</title>
	<!-- for seo -->
	<meta name="description" content="<?php if ( is_single() ) {
        	single_post_title('', true); 
    	} else {
        	bloginfo('name'); echo " - "; bloginfo('description');
    	}
    ?>" />
	<!-- Definir viewport para dispositivos web móviles -->
	<meta name="viewport" content="width=device-width, minimum-scale=1">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript">
		var elementPosition = $('.menu').offset;
		$(window).scroll(function(){
		        if($(window).scrollTop() > elementPosition.top){
		              $('.menu').css('position','fixed').css('top','0');
		        } else {
		            $('.menu').css('position','static');
		        }    
		});
	</script>
	<?php wp_head(); ?>
</head>
<body>
	<?php if ( is_home() ) { ?>
	<div class="header-cover section bg-dark-light no-padding">
		<div class="homepage-hero-module">
	    	<header class="video-container">
	    		<div id="header-main">
		    		<h1 class="blog-title">
						<a style="text-decoration:none;color: white;" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
					</h1>
					<?php if ( get_bloginfo( 'description' ) ) { ?>
						<h3 class="blog-description"><?php echo esc_attr( get_bloginfo( 'description' ) ); ?></h3>
					<?php } ?>
				</div>
	        	<video autoplay loop class="fillWidth">
	            	<source src="<?php echo get_template_directory_uri()?>/videos/clothes/MP4/clothing.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
	            	<source src="<?php echo get_template_directory_uri()?>/videos/clothes/WEBM/clothing.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
	        	</video>
	        	<div class="poster hidden">
	            	<img src="<?php echo( get_header_image() ); ?>" alt="">
		    	</div>
		    	<div style="bottom: 30px;left: 0;position: absolute;right: 0;text-align: center;">
		    		<img alt="arrow" src="<?php echo get_template_directory_uri()?>/images/arrow.png">
		    	</div>
		    </header>		    	
		</div>
	</div>
	<?php }//end if( is_home() )?>
	<div>
		<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
	</div>

