<?php

	/* Built-in shortcodes for B2Me starter theme */

	class App_Shortcodes {

		public function __construct() {
			add_shortcode('b2-section', array($this, 'section'));
			add_shortcode('b2-content', array($this, 'content'));
			add_shortcode('b2-row', array($this, 'row'));
			add_shortcode('b2-col', array($this, 'column'));
			add_shortcode('b2-heading', array($this, 'heading'));
			add_shortcode('b2-image', array($this, 'image'));
			add_shortcode('b2-link', array($this, 'link'));
			add_shortcode('b2-email', array($this, 'email'));
			add_shortcode('b2-phone', array($this, 'phone'));
			add_shortcode('b2-home-banner', array($this, 'slideshow'));
			add_shortcode('b2-banner-image', array($this, 'bannerimage'));
		}

		public function section($attr, $content = null) {
			// Options
			$attr = shortcode_atts(array(
				'class' => '',
				'id' => '',
				'animate' => '',
				'animate-duration' => '',
			), $attr);
	
			$element_id = '';
			$element_animate = '';

			// Check if has id
			if ($attr['id'] != '') {
				$element_id = 'id="'. $attr['id'] .'"';
			}
	
			// Check if has animation
			if ($attr['animate'] != '') {
				$element_animate = 'data-aos="'. $attr['animate'] .'" data-aos-once="true" data-aos-duration="'. $attr['animate-duration'] .'"';
			}
	
			// Construct HTML
			$html = '<section class="'. $attr['class'] .'" '. $element_id .' '. $element_animate .'>
				' . do_shortcode( $content ) . '
			</section>';
	
			return $html;
		}

		public function content($attr, $content = null) {
			// Options
			$attr = shortcode_atts(array(
				'class' => '',
				'id' => '',
				'animate' => '',
				'animate-duration' => '',
			), $attr);

			$element_id = '';
			$element_animate = '';
	
			// Check if has id
			if ($attr['id'] != '') {
				$element_id = 'id="'. $attr['id'] .'"';
			}
	
			// Check if has animation
			if ($attr['animate'] != '') {
				$element_animate = 'data-aos="'. $attr['animate'] .'" data-aos-once="true" data-aos-duration="'. $attr['animate-duration'] .'"';
			}
	
			// Construct HTML
			$html = '<div class="b2-inner-content '. $attr['class'] .'" '. $element_id .' '. $element_animate .'>
				' . do_shortcode( $content ) . '
			</div>';
	
			return $html;
		}

		public function row($attr, $content = null) {
			// Options
			$attr = shortcode_atts(array(
				'class' => '',
				'spacing' => '',
				'aligncenter' => '',
			), $attr);

			$alignment = '';
			if ($attr['aligncenter'] == 'yes') {
				$alignment = 'v-center';
			}

			// Construct HTML
			$html = '<div class="b2-row '. $attr['spacing'] .' '. $alignment .' '. $attr['class'] .'">
				' . do_shortcode( $content ) . '
			</div>';
	
			return $html;
		}

		public function column($attr, $content = null) {
			// Options
			$attr = shortcode_atts(array(
				'class' => '',
				'size' => '',
			), $attr);

			// Construct HTML
			$html = '<div class="b2-col col-'. $attr['size'] .' '. $attr['class'] .'">
				' . do_shortcode( $content ) . '
			</div>';
	
			return $html;
		}

		public function heading($attr, $content = null) {
			// Options
			$attr = shortcode_atts(array(
				'class' => '',
				'size' => '',
				'pre-heading' => '',
				'animate' => '',
				'animate-duration' => '',
			), $attr);

			$element_animate = '';
			$pre_heading = '';
			$element = 'h'. $attr['size'];

			// Check if has pre-heading
			if ($attr['pre-heading'] != '') {
				$pre_heading = '<span>'. $attr['pre-heading'] .'</span>';
			}

			// Check if has animation
			if ($attr['animate'] != '') {
				$element_animate = 'data-aos="'. $attr['animate'] .'" data-aos-once="true" data-aos-duration="'. $attr['animate-duration'] .'"';
			}

			// Construct HTML
			$html = '<'. $element .' class="'.$attr['class'].'" '. $element_animate .'>
				'. $pre_heading .'
				' . do_shortcode( $content ) . '
			</'. $element .'>';
	
			return $html;
		}

		public function image($attr) {
			// Options
			$attr = shortcode_atts(array(
				'class' => '',
				'source' => '',
				'description' => '',
				'animate' => '',
				'animate-duration' => '',
			), $attr);

			$element_animate = '';

			// Check if has animation
			if ($attr['animate'] != '') {
				$element_animate = 'data-aos="'. $attr['animate'] .'" data-aos-once="true" data-aos-duration="'. $attr['animate-duration'] .'"';
			}

			// Construct HTML
			$html = '<img src="'. $attr['source'] .'" alt="'. $attr['description'] .'" class="'.$attr['class'].'" '. $element_animate .'>';
	
			return $html;
		}

		public function link($attr, $content = null) {
			// Options
			$attr = shortcode_atts(array(
				'class' => '',
				'href' => '',
				'target' => '',
				'animate' => '',
				'animate-duration' => '',
			), $attr);

			$element_animate = '';
			$element_target = '';

			// Check if has target
			if ($attr['target'] != '') {
				$element_target = 'target="'. $attr['target'] .'"';
			}

			// Check if has animation
			if ($attr['animate'] != '') {
				$element_animate = 'data-aos="'. $attr['animate'] .'" data-aos-once="true" data-aos-duration="'. $attr['animate-duration'] .'"';
			}

			// Construct HTML
			$html = '<a href="'. $attr['href'] .'" '. $element_target .' title="'. $content .'" class="'.$attr['class'].'" '. $element_animate .'>
				' . do_shortcode( $content ) . '
			</a>';
	
			return $html;
		}

		public function email($attr, $content = null) {
			// Options
			$attr = shortcode_atts(array(
				'class' => '',
				'animate' => '',
				'animate-duration' => '',
			), $attr);

			$element_animate = '';

			// Check if has animation
			if ($attr['animate'] != '') {
				$element_animate = 'data-aos="'. $attr['animate'] .'" data-aos-once="true" data-aos-duration="'. $attr['animate-duration'] .'"';
			}

			// Construct HTML
			$html = '<a href="mailto:'. $content .'" title="Send an email to '. $content .'" rel="nofollow" class="'.$attr['class'].'" '. $element_animate .'>
				' . $content . '
			</a>';
	
			return $html;
		}

		public function phone($attr, $content = null) {
			// Options
			$attr = shortcode_atts(array(
				'class' => '',
				'animate' => '',
				'animate-duration' => '',
			), $attr);

			// Remove spacing
			$phone = str_replace(' ', '', $content);

			$element_animate = '';
			// Check if has animation
			if ($attr['animate'] != '') {
				$element_animate = 'data-aos="'. $attr['animate'] .'" data-aos-once="true" data-aos-duration="'. $attr['animate-duration'] .'"';
			}

			// Construct HTML
			$html = '<a href="tel:'. $phone .'" title="Call '. $phone .'" rel="nofollow" class="'.$attr['class'].'" '. $element_animate .'>
				' . $content . '
			</a>';
	
			return $html;
		}

		public function slideshow($attr, $content = null) {
			// Options
			$attr = shortcode_atts(array(
				'class' => '',
				'fade' => '',
				'autoplay' => '',
				'speed' => '',
				'dots' => '',
				'arrows' => '',
			), $attr);

			// Construct settings
			$slider_fade = 'data-fade="'. $attr['fade'] .'"';
			$slider_autoplay = 'data-autoplay="'. $attr['autoplay'] .'"';
			$slider_speed = 'data-speed="'. $attr['speed'] .'"';
			$slider_dots = 'data-dots="'. $attr['dots'] .'"';
			$slider_arrows = 'data-arrows="'. $attr['arrows'] .'"';
	
			// Construct HTML
			$html = '<div class="b2-hp-banner">
				<div class="b2-hp-banner-slide '. $attr['class'] .'" '. $slider_fade .' '. $slider_autoplay .' '. $slider_speed .' '. $slider_dots .' '. $slider_arrows .'>
				' . do_shortcode( $content ) . '
				</div>
				<div class="b2-hp-banner-arrows">
					<span class="prev">
						<i class="fa-solid fa-angle-left"></i>
					</span>
					<span class="next">
						<i class="fa-solid fa-angle-right"></i>
					</span>
				</div>
				<div class="b2-hp-banner-dots"></div>
			</div>';
	
			return $html;
		}

		public function bannerimage($attr, $content = null) {
			// Options
			$attr = shortcode_atts(array(
				'src' => '',
				'link-text' => '',
				'link-url' => '',
			), $attr);
	
			// Construct HTML
			$html = '<div>
				<div class="b2-hp-banner-slide-item">
					<canvas width="1920" height="1080" style="background-image: url('. $attr['src'] .')"></canvas>
					<div>
						'. do_shortcode( $content ) .'
						<a href="'. $attr['link-url'] .'" title="' . $attr['link-text'] . '" class="b2-link">' . $attr['link-text'] . '</a>
					</div>
				</div>
			</div>';
	
			return $html;
		}

	}

	new App_Shortcodes();