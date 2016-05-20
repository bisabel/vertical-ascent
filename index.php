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
  $pages = get_pages(); 
  $array_id = array();
  foreach ( $pages as $page ) {
  	$content = $page->post_content;  	
		if ( ! $content ) // Check for empty page
			continue;
		$content = apply_filters( 'the_content', $content );
		array_push($array_id,$page->ID);
		//if has a template, it will have a photo background.
		if ( get_page_template_slug($page->ID) ){ ?>
		<article  class="fondo_imagen" style="background-image: url(<?php if (has_post_thumbnail( $page->ID )) 
																	echo wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' )[0]; 
																else echo 'https://source.unsplash.com/category/buildings' ?>)">
		<?php } else { ?>
		<article  class="fondo_imagen"> 
		<?php }//end else ?>														
			 <header>
			 	<h1><a href="<?php echo get_page_link( $page->ID );?>"><?php echo $page->post_title; ?></a></h1>
			 </header>	
			 <div class="article_body" id="<?php echo $page->ID; ?>">
		     	<?php echo $content; ?>
		     </div>
		</article>
<?php  
  }//end foreach 
  error_log(implode(",",$array_id));
?>
  </section>
  <!-- 
  <ul id="navigator">
  <?php
  	//foreach ($array_id as $id)
  	//	echo "<li><a href=\"#$id\">$id</a></li>"
  ?>
  </ul> -->
<?php get_footer(); ?>