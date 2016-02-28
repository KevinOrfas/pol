define(['jquery', 'velocity', 'domReady', 'velocityUi'], function($, velocity, domReady) {
  //Toggle off-canvas menu on/off
  domReady(function () {
    // Logic to prevent the off canvas nav from being cut if screen height is less then nav's height
    var vh = parseInt( $(window).height() );
    var offCanvasNavHeight = parseInt( $('.primary-nav').outerHeight() );

    if( offCanvasNavHeight > vh ) {
      $('.main-header').css({'position': 'static'});
    }

    // Logic for showing/hiding the off canvas nav
    $('.js-toggle-primary-nav-btn').click(function( event) {
      var element = $('#primary-nav');
      var elementDisplayStatus = element.css('display');

  	  switch(elementDisplayStatus) {
      case 'none':
        element.velocity('transition.slideLeftBigIn', 300);
        break;
      case 'block':
        element.velocity('transition.slideLeftBigOut', 500);
        break;
      default:
        element.velocity('transition.slideLeftBigIn', 300);
        break;
  		}
      event.preventDefault();
  	});

  }); // domReady end
});
