			<footer class="site-footer">
				<nav class="main-navigation">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'footernav',
							)
						);
					?>
				</nav>
				<p class="footer-copyright">
					&copy; Copyright <?= date('Y'); ?> <?= get_bloginfo(); ?> - <a href="https://www.b2me.marketing/services/web" target="_blank" class="b2-text-underline">Website Design & Development</a> by <a href="https://www.b2me.marketing/" target="_blank" class="b2-text-underline">B2Me Marketing</a>
				</p>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>