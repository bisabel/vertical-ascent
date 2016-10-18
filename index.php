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
<?php get_header(); ?>
	<section id="main">
<?php //get_sidebar()
	if (get_theme_mod( 'vertical_ascent_menu_options' ) )
  		$pages = wp_get_nav_menu_items( get_theme_mod( 'vertical_ascent_menu_options' ));
	else
		$pages = get_pages();
	
  foreach ( $pages as $page ) {
  	$numbers[] = get_post_meta( $page->ID, $key = '', false );
  	for ($row = 0; $row < sizeof($numbers) ; $row++) {
  		if ( $numbers[$row]['_menu_item_type'][0] == 'post_type' || $numbers[$row]['_menu_item_type'][0] == 'page')
  			$page = get_post($numbers[$row]['_menu_item_object_id'][0]);
  	}
  	 	 
  	$content = $page->post_content;  	
		if ( ! $content ) // Check for empty page
			continue;
		$content = apply_filters( 'the_content', $content );
		//if has a template, it will have a photo background.
		if ( get_page_template_slug($page->ID) == 'blank_template.php'){ ?>
		<article class="article_blank_body" id="<?php echo $page->ID; ?>">
			<?php echo $content; ?>
		</article>
		<?php } else {
				if ( get_page_template_slug($page->ID) == 'background-image_template.php'){ ?>
		<article  class="fondo_imagen" style="background-image: url(<?php if (has_post_thumbnail( $page->ID )) 
																	echo wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' )[0]; 
																else echo 'https://source.unsplash.com/category/buildings' ?>)">
		<?php } else { ?>
		<article  class="fondo_imagen"> 
		<?php }//end else ?>														
			 <header>
			 	<h1><a href="<?php echo get_page_link( $page->ID );?>" style="color:<?php echo get_theme_mod('vertical_ascent_background_color_option','#000000');?>" ><?php echo $page->post_title; ?></a></h1>
			 </header>	
			 <div class="article_body" id="<?php echo $page->ID; ?>">
		     	<?php echo $content; ?>
		     </div>
		</article>
		<?php }//end else ?>
<?php  
  }//end foreach 
?>
  </section>
<?php get_footer(); ?>