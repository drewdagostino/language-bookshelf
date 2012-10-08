$(document).ready(function(){
	$('.right-arrow, .ff-button').click(function(){
		var currentPage = $('span.currentPage').text();
		if(currentPage == '- Cover'){
			pageTurnForward();
		}
		else if(parseInt(currentPage)%2 == '0'){
			pageTurnForward();
		}
		else {
			$('.next-page').trigger('click');
		}
	});
	$('.left-arrow, .rw-button').click(function(){
		var currentPage = $('span.currentPage').text();
		if(currentPage == '- Cover'){
		}
		else if(parseInt(currentPage)%2 == '0'){
			$('.prev-page').trigger('click');
		}
		else {
			pageTurnBackward();
		}
	});
	//VIEW BOTTOM BOOK
	$('#display-bottom-book').click(function(){
		$('.bottom-book-wrapper').show();
		$('#hide-bottom-book').show();
		$('#top-book-wrapper').css('margin-bottom', '0px');
		$(this).hide();
	});
	$('#hide-bottom-book').click(function(){
		$('.bottom-book-wrapper').hide();
		$('#display-bottom-book').show();
		$('#top-book-wrapper').css('margin-bottom', '80px');
		$(this).hide();
	});
	//ARROW KEYS
	$('body').keydown(function(event) {
		if(event.keyCode === 39) { 
			$('.ff-button').trigger('click');
		}
		else if(event.keyCode === 37) { 
			$('.rw-button').trigger('click');
		}
	});
	//Instructions pop in
	$('.instructions').delay(2000).animate({
		'right' : '0px'
	}, 500);
});
