/*Video content scripts ( begin )*/
  function playPause( buttonEvent ) {

		var video = document.querySelector( '.theme.components.video-contents.video-content-1' ).querySelector('.video-content-1__video');

		var iconPlay  = document.querySelector( '.theme.components.video-contents.video-content-1' ).querySelector('.button__icon--play');
		var iconPause = document.querySelector( '.theme.components.video-contents.video-content-1' ).querySelector('.button__icon--pause');


		if ( video.paused ) {
			video.play();
			iconPlay. classList.remove('active');
			// iconPause.classList.add('active');

		} else if ( video.played ) {
			video.pause();
			iconPlay. classList.add('active');
			// iconPause.classList.remove('active');
		}

  }
/*Video content scripts ( end )*/


