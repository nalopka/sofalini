$(function() {

	$(".slider").slick({
		infinite: true,
		// slidesToShow: 2,
		variableWidth: true,
		initialSlide: 0,
		prevArrow: '<button type="button" data-role="none" class="slick-prev"></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next"></button>',


	});

	// $('.slider').on('afterChange', function (event, slick, currentSlide) {

	// 	if(currentSlide == 0) {
 //            $('.slick-prev').addClass('hidden');
 //        }
 //        else {
 //            $('.slick-prev').removeClass('hidden');
 //        }  

 //        if(currentSlide === 4) {
 //            $('.slick-next').addClass('hidden');
 //        }
 //        else {
 //            $('.slick-next').removeClass('hidden');
 //        }

	// });
});