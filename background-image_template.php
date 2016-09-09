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
 
 * Template name: Background-Image Template
*/
?>
<?php get_header();?> 
<section> 
	<?php while ( have_posts() ) : the_post();
	echo get_article_html($post->ID); ?>	
		<header><?php single_post_title()?></header>
		<?php //get_template_part( 'content', 'page' );?>
		<div class="article_body" id="<?php echo $post->ID; ?>">
		<?php the_content(); ?>
		</div>
		<?php comments_template( '', false );?>
	</article>
	<?php endwhile;?> 
</section> 
<?php //get_sidebar();?>
<?php get_footer();?>