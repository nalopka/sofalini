$(function() {
	$('.options').on('click', '.options-invite button', function(){
		$(this).closest('.options').addClass('options-opened');
	});
	$('.contacts').on('click', '.callback', function(){
		$(this).closest('.contacts').addClass('contacts-opened');
	});
});
