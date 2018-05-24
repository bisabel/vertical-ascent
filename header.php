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
	<meta charset=	"<?php bloginfo( 'charset' ); ?>">
	<title><?php if (is_home () ) { echo bloginfo('description'); echo ' | '; bloginfo('name'); }
	 			 elseif ( is_category() ) { single_cat_title(); echo ' | ' ; echo bloginfo('name'); }
	 			 elseif (is_single() || is_page()) { single_post_title(); echo ' | ' ; echo bloginfo('name'); }
	 			 else { wp_title('',true); } ?>
	</title>

	<!-- Definir viewport para dispositivos web móviles -->
	<meta name="viewport" content="width=device-width, minimum-scale=1">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<style type="text/css">
		a,
		.header_textcolor,
		.relatedthumb a:hover { 
			color: #<?php echo get_theme_mod('header_textcolor','ffffff');?> 
		}
		.relatedthumb a {
			color: <?php echo get_theme_mod('vertical_ascent_background_color_option','#000000');?> ;
		}
		.background_color, #header-main, #navegador, footer, .menu { 
			background-color: <?php echo get_theme_mod('vertical_ascent_background_color_option','#000000');?> 
		}
		@media only screen and (min-width: 640px) {
			nav ul li:hover a,
			.sub-menu li:hover a{
	    		color: <?php echo get_theme_mod('vertical_ascent_background_color_option','#000000');?> ;
				-o-transition:.1s;
			  	-ms-transition:.1s;
			  	-moz-transition:.1s;
			  	-webkit-transition:.1s;
	    		text-shadow: 0.1em 0.2em 0.3em <?php echo get_theme_mod('vertical_ascent_background_color_option','#000000');?>;
			}
			nav ul li:hover ul, 
			nav ul li:hover ul li, 
			nav ul li:focus ul, 
			nav ul li:focus ul li {
				visibility: visible; 
				background-color: <?php echo get_theme_mod('vertical_ascent_background_color_option','#000000');?> ;
			}
		}
		.relatedthumb {
			border-color: <?php echo get_theme_mod('vertical_ascent_background_color_option','#000000');?>;
		}
		.relatedthumb:hover {
			background-color: <?php echo get_theme_mod('vertical_ascent_background_color_option','#000000');?>;
			-o-transition:.1s;
		  	-ms-transition:.1s;
		  	-moz-transition:.1s;
		  	-webkit-transition:.1s;
		  	transition:.1s;	
		 }
		 .border-bottom  {
		 	color: <?php echo get_theme_mod('vertical_ascent_background_color_option','#000000');?> ;
			border-bottom: 2px solid <?php echo get_theme_mod('vertical_ascent_background_color_option','#000000');?> ;
		}
	</style>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		//jQuery is required to run this code
		window.onscroll = function (e) {
			if ( window.scrollY > $(main).position().top - $(navegador).outerHeight() ){				
				console.log( "scroll: " + window.scrollY + " navegador: " + $(navegador).outerHeight() + " aux:" + $(navegadoraux).outerHeight() );
				$(navegadoraux).height($(navegador).outerHeight()+"px");
				$(navegador).css({ 
				    position: "fixed",
				    top: 0, left: 0,
				    marginLeft: 0, marginTop: 0,
				    zIndex: 50,
				});
				$(navegador).width('100%');
				$(title_movil).css('visibility','unset');
				
			} else {
				$(navegadoraux).height("0px");
				$(navegador).css({ 
				    position: "relative",
				    zIndex: 50,
				});
				$(title_movil).css('visibility','hidden');
			}     
		}
		
		function clicktogglebutton(){
			if ( $('#menu-with-pages').css('visibility') == 'hidden'){
				$('#menu-with-pages').css('visibility','unset');
				$('.sub-menu').css('visibility','unset');
			}
			else {
				$('#menu-with-pages').css('visibility','hidden');
				$('.sub-menu').css('visibility','hidden');
			}
				
		}	
		$( document ).ready(function() {
			var video = document.getElementById('video');
			video.play();
		});
	</script>
	<?php wp_head(); ?>

</head>
<body>
	<?php if ( is_home() ) { ?>
	<div class="header-cover section bg-dark-light no-padding">
		<div class="homepage-hero-module">
		    <?php if ( get_theme_mod('vertical_ascent_select_video_or_image_setting','video') == 'image'){?>
	    	<header class="image-header" style=" background-image:url(<?php if (get_header_image() != '') header_image(); 
	            														 else echo 'https://source.unsplash.com/category/nature'; ?>);">
	        <?php  } else {?>
	        <header class="video-container">
	        <?php  } ?> 	
	    		<div id="header-main">
		    		<h1 class="blog-title">
						<a style="text-decoration:none;color: white;" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
					</h1>
					<?php if ( get_bloginfo( 'description' ) ) { ?>
						<h3 class="blog-description header_textcolor"><?php echo esc_attr( get_bloginfo( 'description' ) ); ?></h3>
					<?php } ?>
				</div>
				<?php if ( get_theme_mod('vertical_ascent_select_video_or_image_setting','video') == 'video'){?>
	        	<video poster="<?php if (is_file(get_template_directory()."/videos/In-The-Clouds/snapshots/In-The-Clouds.jpg")) echo get_template_directory_uri()."/videos/In-The-Clouds/snapshots/In-The-Clouds.jpg";
	        						 else if (get_header_image() != '') header_image();
	        						 else echo 'https://source.unsplash.com/category/nature'; ?>"
	        						 autobuffer loop class="fillWidth" id="video" >
	            	<source src="<?php echo get_template_directory_uri()?>/videos/In-The-Clouds/MP4/In-The-Clouds.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
	            	<source src="<?php echo get_template_directory_uri()?>/videos/In-The-Clouds/WEBM/In-The-Clouds.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.	            	
	        	</video>
	        	<?php } //image ?>
		    </header>		    	
		</div>
	</div>
	<?php }//end if( is_home() )?>
	<div id="navegadoraux" style=" height: 0px"></div>
	<div id="navegador">
		<button class="toggle-button" type="button" onclick="clicktogglebutton()">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<h3 id="title_movil" class="header_textcolor"><?php echo bloginfo('name');?></h3>
		<?php wp_nav_menu( array( 'menu' => get_theme_mod( 'vertical_ascent_menu_options' ), 'container' => 'nav', 'depth' => 2 ,'menu_id' => 'menu-with-pages')); ?>
	</div>
