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
      		<div class="article_post" id="<?php echo $post->ID; ?>">
				<h1 class="border-bottom"><?php the_title(); ?></h1>
				<span><strong><?php the_author_posts_link();?></strong></span>
				<span><strong><?php the_time('F j, Y') ?></strong></span>
				<span id="span_category"><strong><?php echo _e('Category','').': '; the_category(' '); ?></strong></span><br>
				<?php the_content(); ?>
				<?php comments_template( '', false );?>	
			</div>	
			<?php endwhile; ?>
			<?php endif; ?>
			<?php //get_sidebar(); ?>
			<?php
				$tags = wp_get_post_tags($post->ID);
				$result = "";
				if ($tags) {
					$tag_ids = array();
					foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
					$args=array(
							'tag__in' => $tag_ids,
							'post__not_in' => array($post->ID),
							'posts_per_page'=>4, // Number of related posts to display.
							'caller_get_posts'=>1
					);?>
					<div>
					<h3 class="border-bottom"><?php echo _e('Related post','').': ';?></h3>
					<div class="relatedposts">
					<?php
					$my_query = new wp_query( $args );
					while( $my_query->have_posts() ) {
						$my_query->the_post();?>
						<div class="relatedthumb" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>');	background-repeat: no-repeat;	background-position: center; "><a rel="external" href="<?php the_permalink();?>" ><br><h3><?php the_title();?></h3>by: <?php the_author()?></a></div>
					<?php }//end while	?>
					</div>
					</div>	
				<?php }//end if ($tags)?>
		</article>
	</section>
<?php get_footer();?>