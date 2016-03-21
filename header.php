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
	<meta charset=	<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?></title>

	<!-- Definir viewport para dispositivos web móviles -->
	<meta name="viewport" content="width=device-width, minimum-scale=1">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<?php wp_head(); ?>

</head>
<body>
	<div class="header-cover section bg-dark-light no-padding">
		<div class="fondo_imagen" style="background-image: url(<?php if (get_header_image() != '') header_image(); else echo 'https://source.unsplash.com/category/nature' ?>)">
	<!--<div id="fondo_imagen" style="background-image: url(<?php //if (get_header_image() != '') header_image(); else echo get_template_directory_uri() . '/images/header.png'; ?>)"> -->
			<header id="header-main">
				<h1 class="blog-title">
					<a style="text-decoration:none;color: white;" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
				</h1>
				<?php if ( get_bloginfo( 'description' ) ) { ?>
					<h3 class="blog-description"><?php echo esc_attr( get_bloginfo( 'description' ) ); ?></h3>
				<?php } ?>
			</header>
		</div> <!-- /header -->
	</div>
	<div>
		<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
	</div>
