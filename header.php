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
		<meta name="theme-color" content="#7d41d7">
		<meta name="msapplication-navbutton-color" content="#7d41d7">

		<?php wp_head(); ?>
	</head>
	<?php
		$ip_class = '';
		if (!is_front_page()) $ip_class = 'ip-container';
	?>
	<body <?php body_class($ip_class); ?>>
		<?php wp_body_open(); ?>
		<script type="application/ld+json">
			[{
				"@context": "http://schema.org/",
				"@type": "LocalBusiness",
				"name": "Site Name",
				"@id": "https://www.sitename.com.au/",
				"logo": "https://www.sitename.com.au/wp-content/uploads/2023/01/logo.jpg",
				"url": "https://www.sitename.com.au/",
				"email": "admin@sitename.com.au ",
				"telephone": "+61 123 456 789",
				"legalName": "Site Name",
				"contactPoint": {
					"@type": "ContactPoint",
					"telephone": "+61 123 456 789",
					"contactType": "Customer Service"
				},
				"address": {
					"@type": "PostalAddress",
					"streetAddress": "Street",
					"addressLocality": "Local",
					"addressRegion": "Region",
					"postalCode": "1234",
					"addressCountry": {
						"@type": "Country",
						"name": "Australia"
					}
				},
				"sameAs": ["#", "#"],
				"openingHoursSpecification": [{
					"@type": "OpeningHoursSpecification",
					"dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
					"opens": "10:00",
					"closes": "22:00"
				}, {
					"@type": "OpeningHoursSpecification",
					"dayOfWeek": ["Saturday", "Sunday"],
					"opens": "00:00",
					"closes": "00:00"
				}],
				"aggregateRating": {
					"@type": "AggregateRating",
					"ratingValue": "5",
					"bestRating": "5",
					"worstRating": "1",
					"ratingCount": "10"
				},
				"priceRange": "N/A"
				},
				{
				"@context": "http://schema.org/",
				"@type": "Website",
				"name": "Site Name",
				"url": "https://www.sitename.com.au/"
				}
			]
		</script>
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
