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
<?php get_header(); ?><!-- con esto se llama al archivo header.php -->
 
<!-- a partir de aqui page.php -->
<div id="primary" class="content-area"><!-- #primary .content-area -->
    <div id="content" class="site-content"><!-- #content .site-content -->
 
        <?php while ( have_posts() ) : the_post(); ?>
            <?php //get_template_part( 'content', 'page' ); ?>
            <?php the_content(); ?>
            <?php comments_template( '', false ); ?>
        <?php endwhile; ?>
 
    </div><!-- #content .site-content end -->
</div><!-- #primary .content-area end -->
<!-- hasta aqui page.php -->
 
<?php get_sidebar(); ?><!-- con esto se llama al archivo sidebar.php -->
<?php get_footer(); ?><!-- con esto se llama al archivo footer.php -->