(function() {
	var progress = document.querySelectorAll( '.js-progress-bars' );

	_.forEach( progress, function( item ) {
		var progressValue = item.querySelector('.js-progress-bars__value').innerHTML;
												item.querySelector('.js-progress-bars__progress').style.width = '' + progressValue + '%';
	});

})();