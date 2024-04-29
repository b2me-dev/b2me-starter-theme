(function() {
    var shortcode = {
        initialize: function() {
            this.faqs();
        },
        faqs: function() {
            var item = jQuery('.b2-faq-item-q');
            item.click(function() {
                var close_state = jQuery(this).hasClass('tab-close');
                item.next().slideUp();
                item.addClass('tab-close');
                if (close_state) {
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
            this.jumpLink();
            this.deadlink();
            this.mobileHeader();
            this.backToTop();
            this.backToTopAppearance();
        },
        jumpLink: function() {
            var link = jQuery('.b2-jump-link');
            
            link.click(function() {
                var target_section = jQuery(this).attr('href');

                jQuery('html, body').animate({
                    scrollTop: jQuery(target_section).offset().top
                }, 1500);
            });
        },
        deadlink: function() {
            var dead_links = jQuery('a[href="#"]');
            dead_links.click(function(e) {
                e.preventDefault();
            });
        },
        mobileHeader: function() {
            var menu = jQuery('.b2-mh-top-bar-col.col-menu > a'),
                nav_links = jQuery('#mobilenav'),
                nav_with_sub = jQuery('#mobilenav .menu-item-has-children > a ');
            menu.click(function(e) {
                e.preventDefault();
                if (nav_links.hasClass('open')) {
                    nav_links.slideUp();
                    menu.find('i').addClass('fa-bars').removeClass('fa-times');
                    nav_links.removeClass('open');
                } else {
                    nav_links.slideDown();
                    menu.find('i').removeClass('fa-bars').addClass('fa-times');
                    nav_links.addClass('open');
                }
            });
            nav_with_sub.click(function(e) {
                e.preventDefault();
                var link = jQuery(this).attr('href');
                if (!jQuery(this).hasClass('active-link')) {
                    nav_with_sub.removeClass('active-link');
                    nav_with_sub.parent().find('.sub-menu').slideUp();
                }
                if (jQuery(this).hasClass('active-link')) {
                    window.location.href = link;
                } else {
                    jQuery(this).addClass('active-link');
                    jQuery(this).parent().find('.sub-menu').slideDown();
                }
            });
        },
        backToTop: function() {
            var back_to_top_toggle = jQuery('.b2-btt-toggle a');
            back_to_top_toggle.click(function(e) {
                e.preventDefault();
                jQuery("html, body").animate({
                    scrollTop: 0
                });
            });
        },
        backToTopAppearance: function() {
            var back_to_top_toggle = jQuery('.b2-btt-toggle');
            if (jQuery(window).scrollTop() >= 500) {
                back_to_top_toggle.addClass('is-visible');
            } else {
                back_to_top_toggle.removeClass('is-visible');
            }
        },
        lazyload: function() {
            var lazyload_img = jQuery('img[b2-lazyload]');
            if (!lazyload_img.hasClass('b2-lazyloaded')) {
                var img_source = lazyload_img.attr('data-src');
                lazyload_img.attr('src', img_source);
                lazyload_img.addClass('b2-lazyloaded');
            }
        }
    }
    jQuery(document).ready(function() {
        shortcode.initialize();
        helpers.initialize();
    });
    jQuery(window).scroll(function() {
        helpers.backToTopAppearance();
        helpers.lazyload();
    });
}());