//js functions


$(document).ready(function(){
	$('#mobile-menu-trigger').on("click", function(e){
		$('#main-header').toggleClass('menu-open')
	})
})

$(document).ready(function(){
  $('.carousel').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplaySpeed: 3000,
	  dots: true,
	  adaptiveHeight: true,
  });
});


// $(document).ready(function(){
// 	$('#name1').attr("placeholder", "NAME")
// 	$('#email1').attr("placeholder", "E-MAIL")
// 	$('.captachinput').attr("placeholder", "RECAPCTHA")
// 	$('input[type="password"]').attr("placeholder", "PASSWORD")
// })

//LOADING
// $(document).ready(function(){
// 	$('.loading').on("click", function(e){
// 		$(this).css('display', "none")
// 	})
// 	$('.loading').delay(7000).fadeOut('slow')
// })


//TEXT BOX CLICk
$(document).ready(function(){
	$('.course-list__item__box').on("click", function(e){
		$(this).toggleClass("active")
	})
})

//BACKGROUND-COLOR MENU
// $(document).ready(function(){
// 	const backgroundColor = $('main').css('background-color')
// 	const color = $('main').css('color')
// 	$('header').css('background-color', backgroundColor)
// 	$('ul#main-menu').css('background-color', backgroundColor)
// 	$('#mobile-menu-trigger div span').css('background-color', color)
// 	$('footer').css('background-color', backgroundColor)
// 	$('header').css('color', color)
// 	$('footer').css('color', color)
// 	$('footer svg').css('fill', color)
// 	$('header svg').css('fill', color)
// 	$('header h1').css('color', color)

// 	$('#main-menu li a').css('color', color)
// })

//ABOUT SCROLL
$(document).ready(function(){
		// 	var sc = $(window).scrollTop();
		// console.log(sc)
	$(function() {
	  $('.arrow').click(function(e) {
	  	const heightElement = window.pageYOffset
	  	// const heightWindow = $(window).height()
	  	// console.log(heightElement)
	      $('html, body').animate({ scrollTop: $('html').offset().top  + heightElement + 600}, 1000);
	      // console.log() 
	      // console.log(heightElement,  $('html').offset().top,  $('html').offset().top + heightElement) 
	  });
	});
})

//MENU
$(document).ready(function(){
	$(window).on('scroll', function(event) {
			const heightElement2 = window.pageYOffset
			console.log(heightElement2)
					// console.log(heightElement)
			// if ($(window).width() > 1600) {
			// 	if ($(window).height() > 1500) {
			// 		$('.arrow').css('display', "none")
			// 	}
			// }
			// if ($(window).width() < 1600) {
				if (heightElement2 > 150) {
					$('header').addClass('header-animation-small')
					$('header').removeClass('header-animation-bigger')
				} else {
					$('header').removeClass('header-animation-small')
					$('header').addClass('header-animation-bigger')
				} 
			// }
		})
})


$(document).ready(function(){
	$('#calendar_booking1 .datepick-header span').text('oct');
	console.log(	$('.datepick-header span').text('oct'))
});






