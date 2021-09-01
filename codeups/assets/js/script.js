// ローディング判定
jQuery(function ($) {
jQuery(window).on("load", function() {
	jQuery("body").attr("data-loading", "true");
});



jQuery(function() {
	// スクロール判定
	jQuery(window).on("scroll", function() {
		if (100 < jQuery(this).scrollTop()) {
			jQuery("body").attr("data-scroll", "true");
		} else {
			jQuery("body").attr("data-scroll", "false");
		}
	});


	/* ドロワーメニュー */
	jQuery('.js-hamburger').on('click', function(e) {
		e.preventDefault();
		jQuery('.c-hamburger').toggleClass('open');
		return false;
	});

	$('.js-hamburger').on('click', function () {
		if ($('.js-hamburger').hasClass('open')) {
			$('.js-drawer-menu').fadeIn();
			$('.js-overlay').fadeIn();
		} else {
			$('.js-drawer-menu').fadeOut();
			$('.js-overlay').fadeOut();
		}
	})

	$('.js-overlay').on('click', function () {
		if ($('.js-hamburger').removeClass('open')) {
			$('.js-drawer-menu').fadeOut();
			$('.js-overlay').fadeOut();
		} 
	})



	/* ドロワー */
	jQuery(".js-drawer").on("click", function(e) {
		e.preventDefault();
		let targetClass = jQuery(this).attr("data-target");
		jQuery("." + targetClass).toggleClass("is-checked");
		return false;
	});

	/* スムーススクロール */
	jQuery('a[href^="#"]').click(function() {
		let header = jQuery(".js-header").height();
		let speed = 300;
		let id = jQuery(this).attr("href");
		let target = jQuery("#" == id ? "html" : id);
		let position = jQuery(target).offset().top - header;
		if ("fixed" !== jQuery("#header").css("position")) {
			position = jQuery(target).offset().top;
		}
		if (0 > position) {
			position = 0;
		}
		jQuery("html, body").animate(
			{
				scrollTop: position
			},
			speed
		);
		return false;
	});

	/* 電話リンク */
	let ua = navigator.userAgent;
	if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
		jQuery('a[href^="tel:"]')
			.css("cursor", "default")
			.on("click", function(e) {
				e.preventDefault();
			});
	}

	let header = $('.js-top-header');
	let headerHeight = $('.js-top-header').outerHeight();
	let imgHeight = $('.js-mv').outerHeight() - headerHeight;
	let top = $(window).scrollTop();

	$(window).on('load scroll', function() {
		if (top < imgHeight) {
			$('.p-header__logo svg path').css('fill', '#fff');
		} else {
			$('.p-header__logo svg path').css('fill', '#333');
		}
	});

});
});
