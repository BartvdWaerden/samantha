(function($) {

    /*------------------------------------------------------------------------*/
    /*  ImgLiquid
    /*------------------------------------------------------------------------*/

    $(document).ready(function() {
    	$(".js-image-liquid").imgLiquid({
    		fill: true,
    		horizontalAlign: "80%",
        	verticalAlign: "50%"
    	});
	});

	/*------------------------------------------------------------------------*/
    /*  Headroom
    /*------------------------------------------------------------------------*/

	// NOTE: init() is implicitly called with the plugin
	$("header").headroom( {
		"offset": 320,
		"tolerance": 5,
		"classes": {
			"initial": "c-banner",
			"pinned": "c-banner--pinned",
			"unpinned": "c-banner--unpinned",
			"top": "c-banner--top",
        	"notTop" : "c-banner--not-top"
		}		
	});

	/*------------------------------------------------------------------------*/
    /*  jQuery One Page Nav
    /*------------------------------------------------------------------------*/	

    $('#nav').onePageNav({
    	currentClass: 'c-nav-main__item--active',
    	changeHash: false,
    	scrollSpeed: 750,
    	scrollThreshold: 0.5,
    	filter: '',
    	easing: 'swing',
    	begin: function() {
        //I get fired when the animation is starting
    	},
    	end: function() {
        //I get fired when the animation is ending
    	},
    	scrollChange: function($currentListItem) {
        //I get fired when you enter a section and I pass the list item of the section
    	}
	});

    /*------------------------------------------------------------------------*/
    /*  jQuery MatchHeight
    /*------------------------------------------------------------------------*/        

    $(function() {
        $('.c-card__content').matchHeight();
    });


    /*------------------------------------------------------------------------*/
    /*  jQuery Visible
    /*------------------------------------------------------------------------*/        

    (function($) {

      /**
       * Copyright 2012, Digital Fusion
       * Licensed under the MIT license.
       * http://teamdf.com/jquery-plugins/license/
       *
       * @author Sam Sehnert
       * @desc A small plugin that checks whether elements are within
       *     the user visible viewport of a web browser.
       *     only accounts for vertical position, not horizontal.
       */

      $.fn.visible = function(partial) {
        
          var $t            = $(this),
              $w            = $(window),
              viewTop       = $w.scrollTop(),
              viewBottom    = viewTop + $w.height(),
              _top          = $t.offset().top,
              _bottom       = _top + $t.height(),
              compareTop    = partial === true ? _bottom : _top,
              compareBottom = partial === true ? _top : _bottom;
        
        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

      };
        
    })(jQuery);

    var win = $(window);

    var allMods = $(".o-section img");

    allMods.each(function(i, el) {
      var el = $(el);
      if (el.visible(true)) {
        el.addClass("already-visible"); 
      } 
    });

    win.scroll(function(event) {
      
      allMods.each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
          el.addClass("come-in"); 
        } 
      });
      
    });  

})(jQuery); // Fully reference jQuery after this point.
