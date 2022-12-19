(function() {

	var shortcode = {
		initialize: function() {
			this.homepageSlideshow();
			this.partners();
			this.faqs();
		},
		homepageSlideshow: function() {
			var slider = jQuery('.b2-hp-banner-slide'),
				autoplay = jQuery('.b2-hp-banner-slide').data('autoplay'),
				autoplay_settings = false,
				speed = jQuery('.b2-hp-banner-slide').data('speed'),
				speed_settings = speed + '000',
				fade = jQuery('.b2-hp-banner-slide').data('fade'),
				fade_settings = false,
				dots = jQuery('.b2-hp-banner-slide').data('dots'),
				dots_settings = false,
				arrows = jQuery('.b2-hp-banner-slide').data('arrows'),
				arrows_settings = false;

			// Check if arrows is added
			if (arrows == 'yes') arrows_settings = true;

			// Check if dots is added
			if (dots == 'yes') dots_settings = true;

			// Check if fade is added
			if (fade == 'yes') fade_settings = true;

			// Check if autoplay is added
			if (autoplay == 'yes') autoplay_settings = true;
			
			// Create slider
            slider.not('.slick-initialized').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
				fade: fade_settings,
                arrows: arrows_settings,
                prevArrow: '.b2-hp-banner-arrows .prev',
                nextArrow: '.b2-hp-banner-arrows .next',
				autoplay: autoplay_settings,
				autoplaySpeed: speed_settings,
				dots: dots_settings,
				appendDots: '.b2-hp-banner-dots',
				pauseOnHover: false,
            });
		},
		partners: function() {
			var slider = jQuery('.b2-partners-slide'),
				autoplay = jQuery('.b2-partners-slide').data('autoplay'),
				autoplay_settings = false,
				speed = jQuery('.b2-partners-slide').data('speed'),
				speed_settings = speed + '000',
				slides_to_show = jQuery('.b2-partners-slide').data('slides-to-show');

			// Check if autoplay is added
			if (autoplay == 'yes') autoplay_settings = true;
			
			// Create slider
            slider.not('.slick-initialized').slick({
                infinite: true,
                slidesToShow: slides_to_show,
                slidesToScroll: 1,
				fade: false,
                arrows: false,
				autoplay: autoplay_settings,
				autoplaySpeed: speed_settings,
				pauseOnHover: false,
				responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                ]
            });
		},
		faqs: function() {
			var item = jQuery('.b2-faq-item-q');

			item.click(function() {
				var close_state = jQuery(this).hasClass('tab-close');

				// Close all active items
				item.next().slideUp();
				item.addClass('tab-close');

				if (close_state) { // Open item
					jQuery(this).next().slideDown();
					jQuery(this).removeClass('tab-close');
				} else {
					jQuery(this).next().slideUp();
					jQuery(this).addClass('tab-close');
				}
			});
		}
	}

	var helpers = {
		initialize: function() {
			this.deadlink();
			this.mobileHeader();
		},
		deadlink: function() {
			// Remove default behavior of dead links
			var dead_links = jQuery('a[href="#"]');
			dead_links.click(function(e) {
				e.preventDefault();
			});
		},
		mobileHeader: function() {
			var menu = jQuery('.b2-mh-top-bar-col.col-menu > a'),
				nav_links = jQuery('#mobilenav'),
				nav_with_sub = jQuery('.menu-item-has-children > a');

			menu.click(function(e) {
				e.preventDefault();
				
				if (nav_links.hasClass('open')) { // Close menu
					nav_links.slideUp();
					menu.find('i').addClass('fa-bars').removeClass('fa-times');
					nav_links.removeClass('open');
				} else { // Open menu
					nav_links.slideDown();
					menu.find('i').removeClass('fa-bars').addClass('fa-times');
					nav_links.addClass('open');
				}
			});

			nav_with_sub.click(function(e) {
				e.preventDefault();
				
				// Close all active submenus
				if (!jQuery(this).hasClass('active-link')) {
					nav_with_sub.removeClass('active-link');
					nav_with_sub.parent().find('.sub-menu').slideUp();
				}

				if (jQuery(this).hasClass('active-link')) { // Close submenu
					jQuery(this).removeClass('active-link');
					jQuery(this).parent().find('.sub-menu').slideUp();
				} else { // Open submenu
					jQuery(this).addClass('active-link');
					jQuery(this).parent().find('.sub-menu').slideDown();
				}
			});

		}
	}

	jQuery(document).ready(function() {
		shortcode.initialize();
		helpers.initialize();
	});

}());