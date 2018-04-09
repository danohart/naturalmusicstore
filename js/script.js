$('.open-popup-link').magnificPopup ({
	type:'inline',
	preloader: false,
	showCloseBtn: false,
	closeOnBgClick: true,
	mainClass: 'mfp-fade mfp-fade-side'
});

function leaveFromTop(visitor) {
	if( visitor.clientY < 0 )
		if ($.cookie('shown-pop') != '1') {
			$.magnificPopup.open({ items: { src: '.popup' }, type: 'inline', mainClass: 'my-mfp-zoom-in' });		
			$.cookie('shown-pop', '1', { expires: 1 });
	}
}
$(document).on('mouseleave', leaveFromTop);