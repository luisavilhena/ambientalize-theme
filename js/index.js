//js functions


$(document).ready(function(){
	$('#mobile-menu-trigger').on("click", function(e){
		$('#main-header').toggleClass('menu-open')
	})
	$('nav ul li a').on("click", function(e){
		$('#main-header').toggleClass('menu-open')
	})
})

//TESTIMONIAL
$(document).ready(function(){
	$('.testimonial__item').css('display', 'none')
	$('.testimonial__item:first-of-type').css('display', 'block')
	$('.testimonial__item:nth-of-type(2)').css('display', 'block')
	$('.btn-testimonial').on("click", function(e){
		$('.testimonial__item').css('display', 'block')
		$('.btn-testimonial').css('display', 'none')
	})
})

$(document).ready(function(){
  $('.carousel').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  // autoplay: true,
	  speed: 2000,
	  autoplaySpeed: 2000,
	  dots: true,
	  adaptiveHeight: true,
  });
});





//TEXT BOX CLICk
$(document).ready(function(){
	$('.course-list__item__box').on("click", function(e){
		$(this).toggleClass("active")
	})
})

$(document).ready(function(){
	$(".carousel p a").on("click", function (e) {
	  // 1
	  e.preventDefault();
	  // 2
	  const href = $(this).attr("href");
	  // 3
	  $("html, body").animate({ scrollTop: $(href).offset().top - 150}, 800);
	});

	$("nav a").on("click", function (e) {
	  // 1
	  e.preventDefault();
	  // 2
	  const href = $(this).attr("href");
	  // 3
	  $("html, body").animate({ scrollTop: $(href).offset().top - 150}, 800);
	});
})




//MENU
$(document).ready(function(){
	$(window).on('scroll', function(event) {
			const heightElement2 = window.pageYOffset
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






