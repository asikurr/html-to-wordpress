jQuery(document).ready(function() {
	"use strict";
    
/*==================================
    * Author        : "HelloXpert"
    * Template Name : ThemX | HTML Template
    * Version       : 1.0
==================================== */
    
/*=========== TABLE OF CONTENTS ===========

	01. Scroll To Top
	02. Preloader
	03. Smooth Scroll
	04. Portfolio Masonry One
	05. One Page Portfolio Masonry
	06. Portfolio Masonry Two
	07. Portfolio Masonry Three
	08. Start-Up Home Masonry
	09. Home Default Masonry Three
	10. Home Minimal Masonry Three
	11. MixItUp JS Active
	12. Wow JS Active
	13. Counter Up
	14. Service Page One Testimonial
	15. Service Pge One Testimonial
	16. Testimonial Crative Home
	17. Onepage Client Say
	18. Testimonial Resume Home
	19. Testimonial Minimal Home
	20. Testimonial Start-Up Home
	21. Testimonial Start-Up Home
	22. Testimonial Start-Up Home
	23. Service Page Two Client
	24. Home Star-Up Client 
	25. Home Architecture Client 
	26. Service Page One Testimonial
	27. About Me Page Rev_slider
	28. Default Home  Slider
	29. Onepage Revulation Slider
	30. Resume Home  slider
	31. Digital Home  slider
	32. Start-Up Home slider
	33. Minimal Home  slider
	34. Creative Home  slider
	35. Architecture Home  slider
	36. Ripples Effect
	37. Gmaps
	38. Video Active Onepage
	39. Gmaps Active Onepage
	40. Master Slider StartUp Home Team
	41. Scroll ProgreesBar
	42. Shop filter Js Active
	43. Quantity Buttons Shop
	44. Portfolio Single Page

======================================*/

	
	/*--------------------------------
	 	01. Scroll To Top
	---------------------------------*/ 
	jQuery(window).on('scroll',function () {
			if (jQuery(this).scrollTop() > 600) {
					jQuery('.ScrollUp').fadeIn();
			} else {
					jQuery('.ScrollUp').fadeOut();
			}
	});
	jQuery('.ScrollUp').on('click',function(){
			jQuery('html, body').animate({
					scrollTop: 0
			}, 1500);
			return false;
	});


    //Menu Sticky
    jQuery(window).on('scroll', function() {
        if (jQuery(window).scrollTop() > 1) {
            jQuery('.main-nav').addClass('menu-sticky');
            jQuery('.main-nav.js-transparent').removeClass('menu-transparent');

        } else {
            jQuery('.main-nav').removeClass('menu-sticky');
            jQuery('.main-nav.js-transparent').addClass('menu-transparent');
        }
    });

    // Search
    jQuery('#search-trigger').on('click', function() {
        jQuery('#search').addClass('active').find('.search').focus();
    });

    jQuery('#search').on('click', function() {
        jQuery(this).find('.search').focus();
    });

    jQuery('#close').on('click', function() {
        jQuery('#search').removeClass('active');
    });











	/*--------------------------------
	 	02. Preloader
	---------------------------------*/
    jQuery(window).on('load',function() {
		jQuery("#spinningSquaresG1").delay(1000).fadeOut(500);
		jQuery(".inTurnBlurringTextG").on('click',function() {
			jQuery("#spinningSquaresG1").fadeOut(500);
		});
	});

	/*--------------------------------
	 	03. Smooth Scroll
	---------------------------------*/
    jQuery('a.data-scroll').on("click", function(e) {
        e.preventDefault();
        var anchor = jQuery(this);
        jQuery('html, body').stop().animate({
            scrollTop: jQuery(anchor.attr('href')).offset().top - 80
        }, 1500);
    });

    /*--------------------------------
	 	04. Portfolio Masonry One
	---------------------------------*/
	jQuery('.p_masonery_one-menu .title').on('click', function(){
		jQuery(this).toggleClass('active').next('.toggle').slideToggle();
		return false;
	});
	jQuery(window).on('load', function(){
		if(jQuery('.p_masonery_one-container').length){
			var jQuerycontainer = jQuery('.p_masonery_one-container').isotope({
			    itemSelector: '.p_masonery_one-item',
			    masonry: {
			        columnWidth: '.p_masonery_one-sizer'
			    }
			});
			jQuery('.p_masonery_one-menu a').on('click', function() {
		        if(jQuery(this).hasClass('active')) return false;
		        jQuery(this).parent().find('.active').removeClass('active');
		        jQuery(this).addClass('active');
		        jQuery(this).closest('.p_masonery_one-menu').find('.title').text(jQuery(this).find('.text').text());
		        if(jQuery(this).closest('.p_masonery_one-menu').find('.title').is(':visible')) jQuery(this).closest('.p_masonery_one-menu').find('.toggle').slideUp();
		        var filterValue = jQuery(this).attr('data-filter');
		        jQuerycontainer.isotope({ filter: filterValue });
		    });
		}
	});

    /*--------------------------------
	 	05. One Page Portfolio Masonry
	---------------------------------*/
	jQuery('.full_width_masonery_2-menu .title').on('click', function(){
		jQuery(this).toggleClass('active').next('.toggle').slideToggle();
		return false;
	});
	jQuery(window).on('load', function(){
		if(jQuery('.full_width_masonery_2-container').length){
			var jQuerycontainer = jQuery('.full_width_masonery_2-container').isotope({
			    itemSelector: '.full_width_masonery_2-item',
			    masonry: {
			        columnWidth: '.full_width_masonery_2-sizer'
			    }
			});
			jQuery('.full_width_masonery_2-menu a').on('click', function() {
		        if(jQuery(this).hasClass('active')) return false;
		        jQuery(this).parent().find('.active').removeClass('active');
		        jQuery(this).addClass('active');
		        jQuery(this).closest('.full_width_masonery_2-menu').find('.title').text(jQuery(this).find('.text').text());
		        if(jQuery(this).closest('.full_width_masonery_2-menu').find('.title').is(':visible')) jQuery(this).closest('.full_width_masonery_2-menu').find('.toggle').slideUp();
		        var filterValue = jQuery(this).attr('data-filter');
		        jQuerycontainer.isotope({ filter: filterValue });
		    });
		}
	});

	/*--------------------------------
	 	06. Portfolio Masonry Two
	---------------------------------*/
	jQuery('.p_masonery_one-menu .title').on('click', function(){
		jQuery(this).toggleClass('active').next('.toggle').slideToggle();
		return false;
	});
	jQuery(window).on('load', function(){
		if(jQuery('.p_masonery_two-container').length){
			var jQuerycontainer = jQuery('.p_masonery_two-container').isotope({
			    itemSelector: '.p_masonery_two-item',
			    masonry: {
			        columnWidth: '.p_masonery_two-sizer'
			    }
			});
			jQuery('.p_masonery_one-menu a').on('click', function() {
		        if(jQuery(this).hasClass('active')) return false;
		        jQuery(this).parent().find('.active').removeClass('active');
		        jQuery(this).addClass('active');
		        jQuery(this).closest('.p_masonery_one-menu').find('.title').text(jQuery(this).find('.text').text());
		        if(jQuery(this).closest('.p_masonery_one-menu').find('.title').is(':visible')) jQuery(this).closest('.p_masonery_one-menu').find('.toggle').slideUp();
		        var filterValue = jQuery(this).attr('data-filter');
		        jQuerycontainer.isotope({ filter: filterValue });
		    });
		}
	});

	/*--------------------------------
	 	07. Portfolio Masonry Three
	---------------------------------*/
	jQuery('.p_masonery_one-menu .title').on('click', function(){
		jQuery(this).toggleClass('active').next('.toggle').slideToggle();
		return false;
	});
	jQuery(window).on('load', function(){
		if(jQuery('.p_masonery_three-container').length){
			var jQuerycontainer = jQuery('.p_masonery_three-container').isotope({
			    itemSelector: '.p_masonery_three-item',
			    masonry: {
			        columnWidth: '.p_masonery_three-sizer'
			    }
			});
			jQuery('.p_masonery_one-menu a').on('click', function() {
		        if(jQuery(this).hasClass('active')) return false;
		        jQuery(this).parent().find('.active').removeClass('active');
		        jQuery(this).addClass('active');
		        jQuery(this).closest('.p_masonery_one-menu').find('.title').text(jQuery(this).find('.text').text());
		        if(jQuery(this).closest('.p_masonery_one-menu').find('.title').is(':visible')) jQuery(this).closest('.p_masonery_one-menu').find('.toggle').slideUp();
		        var filterValue = jQuery(this).attr('data-filter');
		        jQuerycontainer.isotope({ filter: filterValue });
		    });
		}
	});

	/*--------------------------------
	 	08. Start-Up Home Masonry
	---------------------------------*/
	jQuery('.p_masonery_one-menu .title').on('click', function(){
		jQuery(this).toggleClass('active').next('.toggle').slideToggle();
		return false;
	});
	jQuery(window).on('load', function(){
		if(jQuery('.start_up_masonery_s-container').length){
			var jQuerycontainer = jQuery('.start_up_masonery_s-container').isotope({
			    itemSelector: '.start_up_masonery_s-item',
			    masonry: {
			        columnWidth: '.start_up_masonery_s-sizer'
			    }
			});
			jQuery('.p_masonery_one-menu a').on('click', function() {
		        if(jQuery(this).hasClass('active')) return false;
		        jQuery(this).parent().find('.active').removeClass('active');
		        jQuery(this).addClass('active');
		        jQuery(this).closest('.p_masonery_one-menu').find('.title').text(jQuery(this).find('.text').text());
		        if(jQuery(this).closest('.p_masonery_one-menu').find('.title').is(':visible')) jQuery(this).closest('.p_masonery_one-menu').find('.toggle').slideUp();
		        var filterValue = jQuery(this).attr('data-filter');
		        jQuerycontainer.isotope({ filter: filterValue });
		    });
		}
	});

	/*--------------------------------
	 	09. Home Default Masonry Three
	---------------------------------*/
	jQuery('.home_default_masonery_menu_menu .title').on('click', function(){
		jQuery(this).toggleClass('active').next('.toggle').slideToggle();
		return false;
	});
	jQuery(window).on('load', function(){
		if(jQuery('.full_width_masonery-container').length){
			var jQuerycontainer = jQuery('.full_width_masonery-container').isotope({
			    itemSelector: '.full_width_masonery-item',
			    masonry: {
			        columnWidth: '.full_width_masonery-sizer'
			    }
			});
			jQuery('.home_default_masonery_menu_menu a').on('click', function() {
		        if(jQuery(this).hasClass('active')) return false;
		        jQuery(this).parent().find('.active').removeClass('active');
		        jQuery(this).addClass('active');
		        jQuery(this).closest('.home_default_masonery_menu_menu').find('.title').text(jQuery(this).find('.text').text());
		        if(jQuery(this).closest('.home_default_masonery_menu_menu').find('.title').is(':visible')) jQuery(this).closest('.home_default_masonery_menu_menu').find('.toggle').slideUp();
		        var filterValue = jQuery(this).attr('data-filter');
		        jQuerycontainer.isotope({ filter: filterValue });
		    });
		}
	});

	/*--------------------------------
	 	10. Home Minimal Masonry Three
	---------------------------------*/
	jQuery('.minimal_masonery-menu .title').on('click', function(){
		jQuery(this).toggleClass('active').next('.toggle').slideToggle();
		return false;
	});
	jQuery(window).on('load', function(){
		if(jQuery('.minimal_masonery-container').length){
			var jQuerycontainer = jQuery('.minimal_masonery-container').isotope({
			    itemSelector: '.minimal_masonery-item',
			    masonry: {
			        columnWidth: '.minimal_masonery-sizer'
			    }
			});
			jQuery('.minimal_masonery-menu a').on('click', function() {
		        if(jQuery(this).hasClass('active')) return false;
		        jQuery(this).parent().find('.active').removeClass('active');
		        jQuery(this).addClass('active');
		        jQuery(this).closest('.minimal_masonery-menu').find('.title').text(jQuery(this).find('.text').text());
		        if(jQuery(this).closest('.minimal_masonery-menu').find('.title').is(':visible')) jQuery(this).closest('.minimal_masonery-menu').find('.toggle').slideUp();
		        var filterValue = jQuery(this).attr('data-filter');
		        jQuerycontainer.isotope({ filter: filterValue });
		    });
		}
	});

	/*----------------------------
		11. MixItUp JS Active
	------------------------------ */  
	jQuery('.work-inner').mixItUp();

	/*----------------------------
		12. Wow JS Active
	------------------------------ */  
	new WOW().init();

	/*----------------------------
		13. Counter Up
	------------------------------ */ 
    jQuery('.counter').counterUp({
        delay: 10,
        time: 5000
    });

	/*----------------------------
		14. Service Page One Testimonial
	------------------------------ */
	jQuery("#owl_demo2").owlCarousel({
		items: 3,
		autoplay: true,
		loop: true,
		margin:30,
		dots:true,
		mouseDrag:false,
		autoplaySpeed: 1000,
		responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				700:{
					items:2
				},
				800:{
					items:2
				},
				1024:{
					items:3
				},
				1200:{
					items:3
				}
			}
    });

	/*----------------------------
		15. Service Pge One Testimonial
	------------------------------ */
	jQuery(".owl_demo_architecture").owlCarousel({
		items: 3,
		autoplay: false,
		loop: true,
		margin:30,
		dots:true,
		mouseDrag:true,
		autoplaySpeed: 1000,
		responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				700:{
					items:2
				},
				800:{
					items:3
				},
				1024:{
					items:3
				},
				1200:{
					items:3
				}
			}
    });

	/*----------------------------
		16. Testimonial Crative Home
	------------------------------ */
	jQuery(".testimonial_active_C_home").owlCarousel({
		items: 1,
		autoplay: true,
		loop: true,
		dots:true,
		mouseDrag:false,
		transitionStyle:"fade",
        animateIn: 'fadeIn',
        animateOut: 'fadeOutLeft',
        smartSpeed: 1000
    });

	/*----------------------------
		17. Onepage Client Say
	------------------------------ */
	jQuery(".customer_says_active").owlCarousel({
		items: 1,
		autoplay: true,
		loop: true,
		dots:true,
		mouseDrag:false,
		transitionStyle:"fade",
        animateIn: 'fadeIn',
        animateOut: 'fadeOutLeft',
        smartSpeed: 1000
    });

	/*----------------------------
		18. Testimonial Resume Home
	------------------------------ */
	jQuery(".testimonial_active_resume_home").owlCarousel({
		items: 1,
		autoplay: true,
		loop: true,
		dots:true,
		mouseDrag:false,
		transitionStyle:"fade",
        animateIn: 'fadeIn',
        animateOut: 'fadeOutLeft',
        smartSpeed: 1000
    });

	/*----------------------------
		19. Testimonial Minimal Home
	------------------------------ */
	jQuery(".minimall_testimonial_active").owlCarousel({
		items: 1,
		autoplay: true,
		loop: true,
		dots:true,
		mouseDrag:false,
		transitionStyle:"fade",
        animateIn: 'fadeIn',
        animateOut: 'fadeOutLeft',
        smartSpeed: 1000
    });

	/*----------------------------
		20. Testimonial Start-Up Home
	------------------------------ */
	jQuery(".testimonial_slider_start_up").owlCarousel({
        items: 1,
        autoplay: true,
        loop: true,
        dots:true,
        mouseDrag:true,
        nav: true,
		navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		transitionStyle:"fade",
        animateIn: 'fadeIn',
        animateOut: 'fadeOutLeft',
        smartSpeed: 1000
	});

	/*----------------------------
		21. Testimonial Start-Up Home
	------------------------------ */
	jQuery(".testimonial_home_d_active").owlCarousel({
	    items: 1,
	    autoplay: true,
        loop: true,
	    mouseDrag:false,
	    nav: true,
		navText : ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
		transitionStyle:"fade",
	    animateIn: 'fadeIn',
	    animateOut: 'fadeOutLeft',
	    smartSpeed: 1000
	});

	/*----------------------------
		22. Testimonial Start-Up Home
	------------------------------ */
	jQuery(".shop_product_slider_active").owlCarousel({
        items: 1,
        autoplay: true,
        loop: true,
        mouseDrag:false,
        nav: true,
		navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        smartSpeed: 1000
	});

    /*--------------------------------
	 	23. Service Page Two Client
	---------------------------------*/  
    jQuery('.single_a_me_list').owlCarousel({
        items: 4,
        loop: true,
        margin:133,
        mouseDrag:true,
        dots:false,
        nav: false,
        smartSpeed: 1000,
        autoplay: true,
        responsive:{
				0:{
					items:2
				},
				600:{
					items:2
				},
				700:{
					items:3
				},
				800:{
					items:4
				},
				1024:{
					items:4
				},
				1200:{
					items:4
				}
			}
		});

    /*--------------------------------
	 	24. Home Star-Up Client 
	---------------------------------*/  
    jQuery('.Client_logo_s_up').owlCarousel({
        items: 5,
        loop: true,
        margin:120,
        mouseDrag:true,
        dots:false,
        nav: false,
        smartSpeed: 1000,
        autoplay: true,
        responsive:{
				0:{
					items:2
				},
				600:{
					items:2
				},
				700:{
					items:3
				},
				800:{
					items:4
				},
				1024:{
					items:4
				},
				1200:{
					items:5
				}
			}
		});

	    /*--------------------------------
		 	25. Home Architecture Client 
		---------------------------------*/  
	    jQuery('.Client_logo_architecture').owlCarousel({
	        items: 5,
	        loop: true,
	        margin:100,
	        mouseDrag:true,
	        dots:false,
	        nav: false,
	        smartSpeed: 1000,
	        autoplay: true,
	        responsive:{
					0:{
						items:2
					},
					600:{
						items:2
					},
					700:{
						items:3
					},
					800:{
						items:4
					},
					1024:{
						items:4
					},
					1200:{
						items:6
					}
				}
			});

		/*----------------------------
			26. Service Page One Testimonial
		------------------------------ */
		jQuery(".section_themex_right_active").owlCarousel({
			items: 1,
			autoplay: true,
			loop: true,
			dots:true,
			mouseDrag:true,
			smartSpeed: 1000,
	    });

		/*----------------------------
			27. About Me Page Rev_slider
		------------------------------ */
		var themeX_A_me=jQuery;
		var revapi1082;
			if(themeX_A_me("#rev_slider_1082_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_1082_1");
			}else{
			revapi1082 = themeX_A_me("#rev_slider_1082_1").show().revolution({
				sliderType:"standard",
				jsFileLocation:"js",
				sliderLayout:"auto",
				dottedOverlay:"none",
				delay:5000,
				navigation: {
					onHoverStop:"off",
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1400,1024,778,480],
				gridheight:[550,550,550,550],
				lazyType:"none",
				shadow:0,
				spinner:"off",
				stopLoop:"on",
				stopAfterLoops:0,
				stopAtSlide:1,
				shuffle:"off",
				autoHeight:"off",
				disableProgressBar:"on",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}

		/*----------------------------
			28. Default Home  Slider
		------------------------------ */
		var Home_default=jQuery;
		var revapi_default;
		if(Home_default("#default_rev_slider").revolution == undefined){
			revslider_showDoubleJqueryError("#default_rev_slider");
		}else{
			revapi_default = Home_default("#default_rev_slider").show().revolution({
				sliderType:"standard",
		jsFileLocation:"revolution/js/",
				sliderLayout:"fullscreen",
				dottedOverlay:"none",
				delay:4000,
	            navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					mouseScrollReverse:"default",
					onHoverStop:"off",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 50,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					}
					,
					arrows: {
						style:"uranus",
						enable:true,
						hide_onmobile:true,
						hide_under:778,
						hide_onleave:true,
						hide_delay:200,
						hide_delay_mobile:1200,
						tmp:'',
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:20,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:20,
							v_offset:0
						}
					}
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1600,1024,778,480],
				gridheight:[900,600,500,400],
				lazyType:"none",
				shadow:0,
				spinner:"off",
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				shuffle:"off",
				autoHeight:"off",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}

		/*----------------------------
			29. Onepage Revulation Slider
		------------------------------ */ 
		var Home_onepage=jQuery;
		var revapi_onepage;
		if(Home_onepage("#onepage_rev_slider").revolution == undefined){
			revslider_showDoubleJqueryError("#onepage_rev_slider");
		}else{
			revapi_onepage = Home_onepage("#onepage_rev_slider").show().revolution({
				sliderType:"standard",
		jsFileLocation:"revolution/js/",
				sliderLayout:"fullscreen",
				dottedOverlay:"none",
				delay:4000,
	            navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					mouseScrollReverse:"default",
					onHoverStop:"off",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 50,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					}
					,
					arrows: {
						style:"uranus",
						enable:true,
						hide_onmobile:true,
						hide_under:778,
						hide_onleave:true,
						hide_delay:200,
						hide_delay_mobile:1200,
						tmp:'',
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:20,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:20,
							v_offset:0
						}
					}
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1600,1024,778,480],
				gridheight:[900,600,500,400],
				lazyType:"none",
				shadow:0,
				spinner:"off",
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				shuffle:"off",
				autoHeight:"off",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}

	/*----------------------------
		30. Resume Home  slider
	------------------------------ */
 	var Home_Resume=jQuery;
	var revapi_Resume;
	if(Home_Resume("#Resume_rev_slider").revolution == undefined){
		revslider_showDoubleJqueryError("#Resume_rev_slider");
	}else{
		revapi_Resume = Home_Resume("#Resume_rev_slider").show().revolution({
			sliderType:"standard",
	jsFileLocation:"revolution/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:4000,
            navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"off",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 50,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style:"uranus",
					enable:true,
					hide_onmobile:true,
					hide_under:778,
					hide_onleave:true,
					hide_delay:200,
					hide_delay_mobile:1200,
					tmp:'',
					left: {
						h_align:"left",
						v_align:"center",
						h_offset:20,
						v_offset:0
					},
					right: {
						h_align:"right",
						v_align:"center",
						h_offset:20,
						v_offset:0
					}
				}
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1600,1024,778,480],
			gridheight:[900,600,500,400],
			lazyType:"none",
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}


	/*----------------------------
		31. Digital Home  slider
	------------------------------ */
	var Home_digital=jQuery;
	var revapi_digital;
	if(Home_digital("#digital_rev_slider").revolution == undefined){
		revslider_showDoubleJqueryError("#digital_rev_slider");
	}else{
		revapi_digital = Home_digital("#digital_rev_slider").show().revolution({
			sliderType:"standard",
	jsFileLocation:"revolution/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:4000,
            navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"off",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 50,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style:"uranus",
					enable:true,
					hide_onmobile:true,
					hide_under:778,
					hide_onleave:true,
					hide_delay:200,
					hide_delay_mobile:1200,
					tmp:'',
					left: {
						h_align:"left",
						v_align:"center",
						h_offset:20,
						v_offset:0
					},
					right: {
						h_align:"right",
						v_align:"center",
						h_offset:20,
						v_offset:0
					}
				}
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1600,1024,778,480],
			gridheight:[900,600,500,400],
			lazyType:"none",
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}




	/*----------------------------
		32. Start-Up Home slider
	------------------------------ */
	var Start_Up=jQuery;
	var revapi_Start_Up;
	if(Start_Up("#Start_Up_rev_slider").revolution == undefined){
		revslider_showDoubleJqueryError("#Start_Up_rev_slider");
	}else{
		revapi_Start_Up = Start_Up("#Start_Up_rev_slider").show().revolution({
			sliderType:"standard",
	jsFileLocation:"revolution/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:4000,
            navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"off",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 50,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style:"uranus",
					enable:true,
					hide_onmobile:true,
					hide_under:778,
					hide_onleave:true,
					hide_delay:200,
					hide_delay_mobile:1200,
					tmp:'',
					left: {
						h_align:"left",
						v_align:"center",
						h_offset:20,
						v_offset:0
					},
					right: {
						h_align:"right",
						v_align:"center",
						h_offset:20,
						v_offset:0
					}
				}
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1600,1024,778,480],
			gridheight:[900,600,500,400],
			lazyType:"none",
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}

	/*----------------------------
		33. Minimal Home  slider
	------------------------------ */
   	var Home_Minimal=jQuery;
	var revapi_Minimal;
	if(Home_Minimal("#Minimal_rev_slider_rev_slider").revolution == undefined){
		revslider_showDoubleJqueryError("#Minimal_rev_slider_rev_slider");
	}else{
		revapi_Minimal = Home_Minimal("#Minimal_rev_slider_rev_slider").show().revolution({
			sliderType:"standard",
	jsFileLocation:"revolution/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:4000,
            navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"off",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 50,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style:"uranus",
					enable:true,
					hide_onmobile:true,
					hide_under:778,
					hide_onleave:true,
					hide_delay:200,
					hide_delay_mobile:1200,
					tmp:'',
					left: {
						h_align:"left",
						v_align:"center",
						h_offset:20,
						v_offset:0
					},
					right: {
						h_align:"right",
						v_align:"center",
						h_offset:20,
						v_offset:0
					}
				}
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1600,1024,778,480],
			gridheight:[900,600,500,400],
			lazyType:"none",
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}


	/*----------------------------
		34. Creative Home  slider
	------------------------------ */
   	var Home_Creative=jQuery;
	var revapi_Creative;
	if(Home_Creative("#Creative_rev_slider_rev_slider").revolution == undefined){
		revslider_showDoubleJqueryError("#Creative_rev_slider_rev_slider");
	}else{
		revapi_Creative = Home_Creative("#Creative_rev_slider_rev_slider").show().revolution({
			sliderType:"standard",
	jsFileLocation:"revolution/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:4000,
            navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"off",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 50,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style:"uranus",
					enable:true,
					hide_onmobile:true,
					hide_under:778,
					hide_onleave:true,
					hide_delay:200,
					hide_delay_mobile:1200,
					tmp:'',
					left: {
						h_align:"left",
						v_align:"center",
						h_offset:20,
						v_offset:0
					},
					right: {
						h_align:"right",
						v_align:"center",
						h_offset:20,
						v_offset:0
					}
				}
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1600,1024,778,480],
			gridheight:[900,600,500,400],
			lazyType:"none",
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}

    /*----------------------------
		35. Architecture Home  slider
	------------------------------ */
   	var Home_Architecture=jQuery;
	var revapi_Architecture;
	if(Home_Architecture("#Architecture_rev_slider").revolution == undefined){
		revslider_showDoubleJqueryError("#Architecture_rev_slider");
	}else{
		revapi_Architecture = Home_Architecture("#Architecture_rev_slider").show().revolution({
			sliderType:"standard",
	jsFileLocation:"revolution/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:4000,
            navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"off",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 50,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style:"uranus",
					enable:true,
					hide_onmobile:true,
					hide_under:778,
					hide_onleave:true,
					hide_delay:200,
					hide_delay_mobile:1200,
					tmp:'',
					left: {
						h_align:"left",
						v_align:"center",
						h_offset:20,
						v_offset:0
					},
					right: {
						h_align:"left",
						v_align:"center",
						h_offset:20,
						v_offset:50
					}
				}
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1600,1024,778,480],
			gridheight:[900,600,500,400],
			lazyType:"none",
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}

	/*----------------------------
		36. Ripples Effect
	------------------------------ */
	if (typeof jQuery.fn.ripples == 'function') {
        try {
            jQuery('.ripple').ripples({
                resolution: 500,
                perturbance: 0.04
            });
        } catch (e) {
            jQuery('.error').show().text(e);
        }
    }

	/*----------------------------
		37. Gmaps
	------------------------------*/
	var map;
	jQuery('.ev-map-display').each(function() {
		var element = jQuery(this).attr('id');
		map = new GMaps({
		el: '#' + element,
		center: new google.maps.LatLng(23.6788817,88.1000581),
		zoom:5,
		scrollwheel: false,
		styles: [
				{
					"featureType": "water",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#222"
						}
					]
				},
				{
					"featureType": "landscape",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#555"
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#333333"
						},
						{
							"lightness": 17
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#fefefe"
						},
						{
							"lightness": 29
						},
						{
							"weight": 0.2
						}
					]
				},
				{
					"featureType": "road.arterial",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#333333"
						},
						{
							"lightness": 18
						}
					]
				},
				{
					"featureType": "road.local",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#333333"
						},
						{
							"lightness": 16
						}
					]
				},
				{
					"featureType": "poi",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#ccc"
						},
						{
							"lightness": 21
						}
					]
				},
				{
					"featureType": "poi.park",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#dedede"
						},
						{
							"lightness": 21
						}
					]
				},
				{
					"elementType": "labels.text.stroke",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"color": "#333"
						},
						{
							"lightness": 6
						}
					]
				},
				{
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"saturation": 36
						},
						{
							"color": "#333333"
						},
						{
							"lightness": 40
						}
					]
				},
				{
					"elementType": "labels.icon",
					"stylers": [
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "transit",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#f2f2f2"
						},
						{
							"lightness": 19
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#000"
						},
						{
							"lightness": 0
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#000"
						},
						{
							"lightness": 0
						},
						{
							"weight": 1.2
						}
					]
				}
			]
		});
	});

	/*----------------------------
		38. Video Active Onepage
	------------------------------ */ 
	jQuery('.video').parent().on("click",function () {
		if(jQuery(this).children(".video").get(0).paused){
			jQuery(this).children(".video").get(0).play();
			jQuery(this).children(".img").fadeOut();
		}else{
		   jQuery(this).children(".video").get(0).pause();
			jQuery(this).children(".img").fadeIn();
		}
	});

	/*----------------------------
		39. Gmaps Active Onepage
	------------------------------ */ 	
	var map;
	jQuery('.map_onepage').each(function() {
		var element = jQuery(this).attr('id');
		map = new GMaps({
		el: '#' + element,
		center: new google.maps.LatLng(40.7504864,-74.0014333),
		zoom:13,
		scrollwheel: false,
		styles: [
				{
					"featureType": "water",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#b3b3b3"
						},
						{
							"lightness": 17
						}
					]
				},
				{
					"featureType": "landscape",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#e0e0e0"
						},
						{
							"lightness": 20
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#a8a8a8"
						},
						{
							"lightness": 17
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#dfdfdf"
						},
						{
							"lightness": 29
						},
						{
							"weight": 0.2
						}
					]
				},
				{
					"featureType": "road.arterial",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#f8f8f8"
						},
						{
							"lightness": 18
						}
					]
				},
				{
					"featureType": "road.local",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#f8f8f8"
						},
						{
							"lightness": 16
						}
					]
				},
				{
					"featureType": "poi",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#dfdfdf"
						},
						{
							"lightness": 21
						}
					]
				},
				{
					"featureType": "poi.park",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#333"
						},
						{
							"lightness": 21
						}
					]
				},
				{
					"elementType": "labels.text.stroke",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"color": "#dfdfdf"
						},
						{
							"lightness": 16
						}
					]
				},
				{
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"saturation": 36
						},
						{
							"color": "#333333"
						},
						{
							"lightness": 10
						}
					]
				},
				{
					"elementType": "labels.icon",
					"stylers": [
						{
							"visibility": "on"
						}
					]
				},
				{
					"featureType": "transit",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#dfdfdf"
						},
						{
							"lightness": 19
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#dfdfdf"
						},
						{
							"lightness": 20
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#535353"
						},
						{
							"lightness": 17
						},
						{
							"weight": 1.2
						}
					]
				}
			]
		});
		map.addMarker({
		lat: 40.7587442,
		lng:-73.9808623,
			title: 'Dhaka',
			icon:'images/map-marker.png',
		   
		});
	});

	/*---------------------------------------
		40. Master Slider StartUp Home Team
	----------------------------------------- */
	var slider = new MasterSlider();
	slider.setup('masterslider' , {
		loop:true,
		width:240,
		height:240,
		speed:20,
		view:'stf',
		space:0,
		wheel:true
	});
	slider.control('arrows');
	slider.control('slideinfo',{insertTo:'#staff-info'});

	/*----------------------------
		41. Scroll ProgreesBar
	------------------------------ */
	jQuery(window).on("scroll", function() {
        jQuery(".progress-main .progress-bar").each(function() {
            var bottom_of_object = jQuery(this).offset().top + jQuery(this).outerHeight();
            var bottom_of_window = jQuery(window).scrollTop() + jQuery(window).height();
            var myVal = jQuery(this).attr("data-value");
            if (bottom_of_window > bottom_of_object) {
                jQuery(this).css({
                    width: myVal
                })
            }
        })
	});

	/*----------------------------
		42. Shop filter Js Active
	------------------------------ */  
	jQuery( "#slider-range" ).slider({
		range: true,
		min: 10,
		max: 100,
		values: [ 10, 100 ],
		slide: function( event, ui ) {
		jQuery( "#amount" ).val( "jQuery" + ui.values[ 0 ] + " - jQuery" + ui.values[ 1 ] );
		}
	});
	jQuery( "#amount" ).val( "jQuery" + jQuery( "#slider-range" ).slider( "values", 0 ) +
	" - jQuery" + jQuery( "#slider-range" ).slider( "values", 1 ) );

	/*----------------------------
		43. Quantity Buttons Shop
	------------------------------ */  
	jQuery(".qtyplus").on("click", function(){
    var b = jQuery(this).parents(".quantity-form").find("input.qty"),
            c = parseInt(b.val(), 10) + 1,
            d = parseInt(b.attr("max"), 10);
        d || (d = 9999999999), c <= d && (b.val(c), b.change())
	});
    jQuery(".qtyminus").on("click", function(){
    	var b = jQuery(this).parents(".quantity-form").find("input.qty"),
            c = parseInt(b.val(), 10) - 1,
            d = parseInt(b.attr("min"), 10);
        d || (d = 1), c >= d && (b.val(c), b.change())
    });

	/*--------------------------------
 		44. Portfolio Single Page
	---------------------------------*/
	if(jQuery('.product-gallery_portfolio_2 .bxslider').length>0){
		jQuery('.product-gallery_portfolio_2 .bxslider').bxSlider({
			pagerCustom: '.product-gallery_portfolio_2 #bx-pager',
			nextText:'<i class="fa fa-angle-right" aria-hidden="true"></i>',
			prevText:'<i class="fa fa-angle-left" aria-hidden="true"></i>',
            pager: true,
            speed: 1000,
            auto: true,
			autoStart: true
		});
	}

});


	
