(function($) {

    /*------------------------------------------------------------------------*/
    /*  ImgLiquid
    /*------------------------------------------------------------------------*/

    $(document).ready(function() {
    	$(".js-image-liquid").imgLiquid({
    		fill: true,
    		horizontalAlign: "85%",
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
    /*  Main Menu
    /*------------------------------------------------------------------------*/

    $('.c-nav-main-toggle').on('click', function(e) {
        $('.c-nav-main__list').toggleClass('is-visible');
        $('.c-nav-main-toggle').toggleClass('is-open');

        e.stopPropagation();
    });

    $(".c-nav-main__item a").click(function(){
        $(".c-nav-main__list").removeClass("is-visible");
    });

    $("body").click(function(){
        $(".c-nav-main__list").removeClass("is-visible");
    });

    /*------------------------------------------------------------------------*/
    /*  Make link of whole element block
    /*------------------------------------------------------------------------*/

    $(".js-block").click(function(){
        if($(this).find("a").length){
            window.location.href = $(this).find("a:first").attr("href");
        }
    });

    /*------------------------------------------------------------------------*/
    /*  Scroll to
    /*------------------------------------------------------------------------*/

    $("#js-scroll").click(function() {
    $('html, body').animate({
        scrollTop: $("#about").offset().top
    }, 750);
});

})(jQuery); // Fully reference jQuery after this point.
