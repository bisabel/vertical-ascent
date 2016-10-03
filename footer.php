<?php
/**This file is part of Vertical-Ascent wordpress theme

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
<footer>
	<div class="footer_div">
		<div><h4><?php echo get_theme_mod('footer_text'); ?></h4><br><p><?php echo get_theme_mod('footer_textarea');?></p></div>
		<div><h4><?php echo get_theme_mod('footer_text2'); ?></h4><br><p><?php echo get_theme_mod('footer_textarea2');?></p></div>
		<div><h4><?php echo get_theme_mod('footer_text3'); ?></h4><br><p><?php echo get_theme_mod('footer_textarea3');?></p></div>
	</div>	
	<div style="border-top: 2px solid #f2f2f2;"><p>Copyright © <?=date('Y');?> <?php bloginfo('name'); ?>. Using <a href="https://github.com/bisabel/vertical-ascent"><strong>Vertical-Ascend</strong></a> a wordpress theme</p></div>
</footer>
<?php wp_footer(); ?>
</body>
</html>