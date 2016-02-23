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

/**
 * The template for displaying 404 pages (not found)
 */
get_header(); ?>
	<div>
		<section>
			<article>
			<header>
				<h1 class="page-title">La página no puede ser encontrada</h1>
				<!-- @TODO _e('La página no puede ser encontrada') -->
			</header>
			<div style="margin: 50px auto;">
				<p><h2>404</h2>La página solicitada no se encuentra o no existe.<br>Vuelva a la página principal y pruebe a acceder desde los menús de navegación</p>
			</div>
			</article>
		</section>
	</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
