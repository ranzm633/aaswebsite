/* Script for smooth nav property transition */
(function($){
	
	window.onscroll = function() {
		smoothNav();
	};

function smoothNav() {
    if ($(window).scrollTop() >= 10 ) {
        $("#site-navigation").addClass("sticky-aasnav");
    } else {
    	$("#site-navigation").removeClass("sticky-aasnav");
    }
};

})(jQuery);
