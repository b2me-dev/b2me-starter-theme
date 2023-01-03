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
		<div class="b2-btt-toggle b2-ease">
			<a href="#" title="Back To Top" rel="nofollow">
				<i class="fa-solid fa-angle-up"></i>
			</a>
		</div>
		<div class="b2-mob-phone b2-hide-desktop">
			<a href="tel:0712345678" title="Call Us" rel="nofollow">
				<i class="fa-solid fa-phone"></i>
			</a>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>