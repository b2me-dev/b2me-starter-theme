!function(){var a={initialize:function(){this.faqs()},faqs:function(){var a=jQuery(".b2-faq-item-q");a.click(function(){var i=jQuery(this).hasClass("tab-close");a.next().slideUp(),a.addClass("tab-close"),i?(jQuery(this).next().slideDown(),jQuery(this).removeClass("tab-close")):(jQuery(this).next().slideUp(),jQuery(this).addClass("tab-close"))})}},i={initialize:function(){this.jumpLink(),this.deadlink(),this.mobileHeader(),this.backToTop(),this.backToTopAppearance()},jumpLink:function(){jQuery(".b2-jump-link").click(function(){var a=jQuery(this).attr("href");jQuery("html, body").animate({scrollTop:jQuery(a).offset().top},1500)})},deadlink:function(){jQuery('a[href="#"]').click(function(a){a.preventDefault()})},mobileHeader:function(){var a=jQuery(".b2-mh-top-bar-col.col-menu > a"),i=jQuery("#mobilenav"),s=jQuery("#mobilenav .menu-item-has-children > a ");a.click(function(s){s.preventDefault(),i.hasClass("open")?(i.slideUp(),a.find("i").addClass("fa-bars").removeClass("fa-times"),i.removeClass("open")):(i.slideDown(),a.find("i").removeClass("fa-bars").addClass("fa-times"),i.addClass("open"))}),s.click(function(a){a.preventDefault();var i=jQuery(this).attr("href");jQuery(this).hasClass("active-link")||(s.removeClass("active-link"),s.parent().find(".sub-menu").slideUp()),jQuery(this).hasClass("active-link")?window.location.href=i:(jQuery(this).addClass("active-link"),jQuery(this).parent().find(".sub-menu").slideDown())})},backToTop:function(){jQuery(".b2-btt-toggle a").click(function(a){a.preventDefault(),jQuery("html, body").animate({scrollTop:0})})},backToTopAppearance:function(){var a=jQuery(".b2-btt-toggle");jQuery(window).scrollTop()>=500?a.addClass("is-visible"):a.removeClass("is-visible")},lazyload:function(){var a=jQuery("img[b2-lazyload]");if(!a.hasClass("b2-lazyloaded")){var i=a.attr("data-src");a.attr("src",i),a.addClass("b2-lazyloaded")}}};jQuery(document).ready(function(){a.initialize(),i.initialize()}),jQuery(window).scroll(function(){i.backToTopAppearance(),i.lazyload()})}();