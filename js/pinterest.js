var flag;
var min_width = 480;
function check() {
    if ( jQuery('html').width() < min_width ) {
        if ( flag ) {
            jQuery('#pinterest-wrap').masonry('destroy');
            flag = 0;
        }
    } else {
		jQuery( '#pinterest-wrap' ).masonry({
			itemSelector: '.grid',
			// isFitWidth: true,
			columnWidth: function( containerWidth ) {
		    	return containerWidth / 4;
			}
		});
		flag = 1;
	}
}


jQuery(function(){
    check();
});
 
jQuery(window).resize(function () {
    check();
});

