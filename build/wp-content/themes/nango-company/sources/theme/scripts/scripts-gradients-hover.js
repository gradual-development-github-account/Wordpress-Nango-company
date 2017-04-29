$( document ).ready(function() {

	var fillCollection = $('.theme.modificators.gradients.svg-fill-gradient-1');
	

	_.forEach( fillCollection, function( item ) {
		var uID = _.uniqueId('gradient-fill-id-');

		$(
		_.find( item.children,
			function( el ) {
			  return  $(el).hasClass('svg-gradient') ;
			})
		).attr( 'id', uID );


		$(
		  _.find( item.children,
			  function( el ) {
				  return  $(el).hasClass('svg-path') ;
			})
		).attr( 'fill', 'url(#' + uID + ')' );

	});


	
	
	var strokeCollection = $('.theme.modificators.gradients.svg-stroke-gradient-1');

	_.forEach( strokeCollection, function( item ) {
		var uID = _.uniqueId('gradient-stroke-id-');

		$(
				_.find( item.children,
						function( el ) {
							return  $(el).hasClass('svg-gradient') ;
						})
		).attr( 'id', uID );


		$(
				_.find( item.children,
						function( el ) {
							return  $(el).hasClass('svg-path') ;
						})
		).attr( 'stroke', 'url(#' + uID + ')' ).attr( 'fill', 'transparent' );

	});

});