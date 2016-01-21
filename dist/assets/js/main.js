requirejs.config({
  //baseUrl: 'assets/js',
  paths: {
    jquery: 'lib/jquery',
    propertyParser: 'plugins/require/propertyParser',
    domReady: 'plugins/require/domReady',
    async: 'plugins/require/async',
    velocity: 'lib/velocity',
    velocityUi: 'lib/velocity.ui',
    matchHeight: 'plugins/jquery.matchHeight',
    fastclick: 'plugins/fastclick',
    offCanvasMenu: 'modules/offCanvasMenu',
    picturefill: 'plugins/picturefill',
    PhotoSwipe: 'plugins/photoswipe',
    PhotoSwipeUI_Default: 'plugins/photoswipe-ui-default',
    photoswipeGallery: 'modules/photoswipe-gallery',
    modernizr: 'plugins/modernizr',
    appendAround: 'plugins/appendaround'
  },
  shim: {
    "velocity": {
      deps: [ "jquery" ]
    },
    "velocityUi": {
      deps: [ "velocity" ]
    },
    "font": {
      deps: [ "propertyParser" ]
    },
    "appendAround": {
      deps: [ "jquery" ]
    }
  }
});

define(function(require) {
  var $                     = require('jquery');
  var domReady              = require('domReady');
  var FastClick             = require('fastclick');
  var PhotoSwipe            = require('PhotoSwipe');
  var PhotoSwipeUI_Default  = require('PhotoSwipeUI_Default');
  var appendAround          = require('appendAround');
                              require('propertyParser');
                              require('velocity');
                              require('velocityUi');
                              require('matchHeight');
                              require('offCanvasMenu');
                              require('picturefill');
                              require('photoswipeGallery');

  //Fastclick
  $(function() {
    FastClick.attach(document.body);
  });
  domReady(function() {
    //matchHeight
    $('.js-mh').matchHeight();

    //  appendAround project-info
    $( ".project-info" ).appendAround();

    //$('.project-thumbs').velocity("transition.fadeIn", 1000);

  }); // domReady end
}); // define end
