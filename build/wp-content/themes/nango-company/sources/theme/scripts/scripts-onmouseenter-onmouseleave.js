function postAnimation1Enter( e ) {

	e.parentElement.querySelector('.js-postAnimation1-hover-block')
			.style.transition = 'all 0.5s';
	e.parentElement.querySelector('.js-postAnimation1-hover-block')
			.style.transform = 'translate( 0, 0% )';
	e.parentElement.querySelector('.js-postAnimation1-hover-block')
			.style.opacity = '1';
}

function postAnimation1Leave( e ) {

	e.parentElement.querySelector('.js-postAnimation1-hover-block')
			.style.transition = 'all 0.5s';
	e.parentElement.querySelector('.js-postAnimation1-hover-block')
			.style.transform = 'translate( 0, -100% )';
	e.parentElement.querySelector('.js-postAnimation1-hover-block')
			.style.opacity = '0';
}