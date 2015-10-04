(function($) {

    /*------------------------------------------------------------------------*/
    /*  Toggle <pre>
    /*------------------------------------------------------------------------*/

    $('.c-code-block button').on('click', function(){
        $(this).siblings('pre').slideToggle('visible');
    });

})(jQuery); // Fully reference jQuery after this point.
