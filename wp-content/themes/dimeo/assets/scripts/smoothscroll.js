jQuery(document).ready(function(){
	jQuery('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    jQuerytarget = jQuery(target);

	    jQuery('html, body').stop().animate({
	        'scrollTop': jQuerytarget.offset().top - 250
	    }, 900, 'swing', function () {
	       // window.location.hash = target;
	    });
	});
});
