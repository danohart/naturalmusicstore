function leaveFromTop(visitor) {
	if( visitor.clientY < 0 )
		if ($.cookie('shown-pop') != '1') {
			$.magnificPopup.open({ items: { src: '.popup' }, type: 'inline', mainClass: 'mfp-fade' });		
			$.cookie('shown-pop', '1', { expires: 1 });
	}
}
$(document).on('mouseleave', leaveFromTop);