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
  	  	<article id="single">
      		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

      		  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?>. </a></h2>
              <small> Publicado por <?php the_author_posts_link() ?>  el <?php the_time('j/m/Y') ?>. Categoría: <?php the_category(', '); ?> </small><br>

      		<div class="post">

      		   <?php the_content(); ?>

	      </div>


<?php endwhile; ?>

<?php endif; ?>

	</article> <!-- Fin de single -->

  </section> <!-- Fin de main -->
  <?php  get_sidebar()?>

<?php get_footer(); ?>

