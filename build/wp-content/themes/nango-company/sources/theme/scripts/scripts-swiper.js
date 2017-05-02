var swiper = new Swiper('.js-swiper-slider-fullscreen-1', {
	pagination: '.js-swiper-slider-fullscreen-1__pagination',
	direction: 'vertical',
	slidesPerView: 1,
	paginationClickable: true,
	mousewheelControl: true
});


var swiper = new Swiper('.js-swiper-slider-tabs-1', {
	pagination: '.js-swiper-slider-tabs-1__pagination',
	paginationClickable: true,

	paginationBulletRender: function ( swiper, index, className ) {
		return '<div class="' + className + '' + '">' + '<span class="swiper-pagination-bullet__text">' + document.querySelectorAll('.js-swiper-slider-tabs-1__pagination-title')[ index ].innerHTML + '</span>' + '</div>';
	}
});




var swiper = new Swiper('.js-swiper-slider-3-items-1', {
	slidesPerView: 3,
	spaceBetween: 30,
	nextButton: '.js-swiper-slider-3-items-1__button-prev',
	prevButton: '.js-swiper-slider-3-items-1__button-next',
});




var swiper = new Swiper('.js-swiper-slider-1-items-1', {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,
	nextButton: '.js-swiper-slider-1-items-1__button-prev',
	prevButton: '.js-swiper-slider-1-items-1__button-next',
	pagination: '.js-swiper-slider-1-items-1__pagination',
	paginationClickable: true,
});