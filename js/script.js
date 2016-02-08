jQuery(document).ready(function($) {

	var querystring = 'd4=1';

	$('a').each(function(){
		var href = $(this).attr('href');
		if (href) {
			href += (href.match(/\?/) ? '&' : '?') + querystring;
			$(this).attr('href', href);		
		}
	});

});
