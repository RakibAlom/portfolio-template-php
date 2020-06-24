
// project gallery selector
$(document).ready(function () {

	let $btns = $('.project-area .btn-group button');

	$btns.click(function(e) {

		$('.project-area .btn-group button').removeClass('active');
		e.target.classList.add('active');

		let selector = $(e.target).attr('data-filter');
		$('.project-area .grid').isotope({
			filter:selector
		});
		return false;
	})

	$('project-area .btn-group #btn1').tigger('click');

});

//Image-Popup
$(document).ready(function () {
	$('.project-area .grid .img-popup-link').magnificPopup({
		type: 'image',
		gallery:{enabled:true}
	});
})


//Owl-Carousel
$(document).ready(function () {
	$('.client-area .owl-carousel').owlCarousel({
	    loop:true,
	    autoplay:true,
	    dots:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:2
	        }
	    }
	})
})
