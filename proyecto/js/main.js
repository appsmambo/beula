$(document).ready(function() {
	$('#myTabs a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	})
	$.fancybox({
		href		: '#formulario',
		width		: 600,
		fitToView	: false,
		autoHeight	: true,
		closeClick	: false,
		closeBtn	: false,
		scrolling	: 'no',
		helpers     : { 
			overlay : {closeClick: false} // prevents closing when clicking OUTSIDE fancybox
		}
	});
});