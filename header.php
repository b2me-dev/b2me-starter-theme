<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="profile" href="https://gmpg.org/xfn/11">

		<!-- Initial Scale -->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

		<!-- Mobile Theme -->
		<meta name ="theme-color" content ="#7d41d7">
		<meta name ="msapplication-navbutton-color" content ="#7d41d7">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'b2me-master-theme' ); ?></a>

			<div class="b2-mh-wrap b2-hide-desktop">
				<div class="b2-mh-top-bar">
					<div class="b2-mh-top-bar-col col-logo">
						<a href="<?= get_site_url(); ?>" title="<?= get_bloginfo(); ?>">
							<img src="<?= get_stylesheet_directory_uri(); ?>/images/global/site-logo.png" alt="<?= get_bloginfo(); ?>" class="b2-img-responsive">
						</a>
					</div>
					<div class="b2-mh-top-bar-col col-menu">
						<a href="#" title="Menu">
							<i class="fa-solid fa-bars"></i>
						</a>
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'mobilenav',
								)
							);
						?>
					</div>
				</div>
			</div>

			<header id="masthead" class="b2-hide-mobile">
				<a href="<?= get_site_url(); ?>" title="<?= get_bloginfo(); ?>">
					<img src="<?= get_stylesheet_directory_uri(); ?>/images/global/site-logo.png" alt="<?= get_bloginfo(); ?>" class="b2-img-responsive">
				</a>
				<nav class="main-navigation">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'headernav',
							)
						);
					?>
				</nav>
			</header>
