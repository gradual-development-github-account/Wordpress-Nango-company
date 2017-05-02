$( document ).ready(function() {

	var svgFillGradient1Collection = document.querySelectorAll('.theme.modificators.gradients.svg-fill-gradient-1');

	_.forEach( svgFillGradient1Collection, function( item ) {
		var uID = _.uniqueId('gradient-fill-id-');

		item.querySelector('.svg-gradient').setAttribute( 'id', uID );
		item.querySelector('.svg-path').setAttribute( 'fill', 'url(#' + uID + ')' );
	});


	var svgFillGradient2Collection = document.querySelectorAll('.theme.modificators.gradients.svg-fill-gradient-2');

	_.forEach( svgFillGradient2Collection, function( item ) {
		var uID = _.uniqueId('gradient-fill-id-');

		item.querySelector('.svg-gradient').setAttribute( 'id', uID );
		item.querySelector('.svg-path').setAttribute( 'fill', 'url(#' + uID + ')' );
	});
	

	var svgStrokeGradient1Collection = document.querySelectorAll('.theme.modificators.gradients.svg-stroke-gradient-1');

	_.forEach( svgStrokeGradient1Collection, function( item ) {
		var uID = _.uniqueId('gradient-fill-id-');

		item.querySelector('.svg-gradient').setAttribute( 'id', uID );
		item.querySelector('.svg-path').setAttribute( 'fill', 'transparent' );
		item.querySelector('.svg-path').setAttribute( 'stroke', 'url(#' + uID + ')' );
	});

});