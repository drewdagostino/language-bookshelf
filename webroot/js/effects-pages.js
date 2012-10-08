function pageTurnForward(){
	var currentPage = $('input.left-page-pageNumber').val();
	var currentLeftPage = parseInt(currentPage);
	var currentRightPage = parseInt(currentPage) + 1;
	var leftPage = parseInt(currentPage) + 2;
	var rightPage = leftPage + 1;
	var lastPage = 27;
	if(leftPage > lastPage){
		alert('END');
	}
	else if(currentPage == '0'){
		var leftPage = 1;
		var rightPage = 2;
		
		//ANIMATE
		
		//shrink cover and cover picture to 0 width
		$('.book-cover-wrapper').animate({
				'width' : '0px',
				'padding-left' : '0px',
				'padding-right' : '0px',
				'margin-left' : '3px'
		}, 500);
		$('.book-cover-wrapper img').animate({
				'width' : '0px',
				'height' : '400px'
		}, 500);
		//grow pages wrapper and each page backer to fill the whole book space
		$('.book-pages-wrapper').animate({
				'width' : '920px'
		});
		$('.right-page-wrapper').animate({
				'width' : '460px'
		}, 500);
		$('.left-page-wrapper').delay(500).animate({
				'width' : '460px'
		}, 500);
		//display the first two pages. make them wide enough.
		$('.left-page#p' + leftPage).css({
			'width' : '90%',
			'padding' : '5%'
		});
		$('.right-page#p' + rightPage).css	({
			'width' : '90%',
			'padding' : '5%'
		});
		
		//LEFT ARROW APPEAR
		$('.left-arrow-wrapper').fadeIn('fast');
		
		//NEXT AND PREV BUTTONS
		$('.next-page').css('display', 'block');
		
		//MAKE PAGE STAND OUT
		focusLeft();
		//CLEAR ACCESSORIES
		clearTranslator();
		//SET NUMBERS
		$('input.left-page-pageNumber').val(leftPage);
		$('input.right-page-pageNumber').val(rightPage);
		$('.currentPage').text(leftPage);
		
		//SET AUDIO
		$("#jquery_jplayer_1").jPlayer("setMedia", {
	            m4a: "/storybooks/audio/pages/" + book_id + "-" + leftPage + "-french.m4a"
		});
		//PLAY AUDIO
		setTimeout('playAudio()', 2000);
	}
	else if(leftPage == lastPage){

		//ANIMATE
		//Make backcover and backcover picture 100%
		$('.book-backcover-wrapper').animate({
				'width' : '460px'
		}, 500);
		$('.book-backcover-wrapper img').animate({
				'width' : '100%',
				'height' : '400px'
		}, 500);
		//shrink pages wrapper and each page backer
		$('.book-pages-wrapper').animate({
				'width' : '0px'
		});
		$('.left-page-wrapper').animate({
				'width' : '0px',
				'padding-left' : '0px'
		}, 500);
		$('.right-page-wrapper').animate({
				'width' : '0px',
				'padding-right' : '0px'
		}, 500);
		
		$('.right-page#p' + rightPage).css	({
			'width' : '0%',
			'padding' : '0%'
		});
		
		//RIGHT ARROW DISAPPEAR
		$('.right-arrow-wrapper').fadeOut('fast');

		//NEXT AND PREV BUTTONS
		$('.next-page').css('display', 'block');
		
		//MAKE PAGE STAND OUT
		focusLeft();
		//CLEAR ACCESSORIES
		clearTranslator();
		//SET NUMBERS
		$('input.left-page-pageNumber').val(leftPage);
		$('input.right-page-pageNumber').val(rightPage);
		$('.currentPage').text(leftPage);
		
		//SET AUDIO
		$("#jquery_jplayer_1").jPlayer("setMedia", {
	            m4a: "/storybooks/audio/pages/" + book_id + "-" + leftPage + "-french.m4a"
		});
		//PLAY AUDIO
		setTimeout('playAudio()', 2000);
	}
	else {
		//Set new right background to static, old right background to percent, new left background to percent, old left background to static
		
		//shrink current right page inward while expanding new right page, then shrink current left page outward while expanding new left page
		//current right page
		$('.right-page#p' + currentRightPage).css('float', 'left').animate({
			'width' : '0%',
			'padding-right' : '0%',
			'padding-left' : '0%'
		}, 500);
		//new right page
		$('.right-page#p' + rightPage).css('float', 'right').delay(40).animate({
			'width' : '90%',
			'padding' : '5%'
		}, 500);
		//current left page
		$('.left-page#p' + currentLeftPage).css('float', 'left').delay(500).animate({
			'width' : '0%',
			'padding-right' : '0%',
			'padding-left' : '0%'
		}, 500);
		//new left page
		$('.left-page#p' + leftPage).css('float', 'right').delay(540).animate({
			'width' : '90%',
			'padding' : '5%'
		}, 500);

		//NEXT AND PREV BUTTONS
		$('.next-page').css('display', 'block');
		$('.prev-page').css('display', 'none');

		//MAKE PAGE STAND OUT
		focusLeft();
		//CLEAR ACCESSORIES
		clearTranslator();
		//SET NUMBERS
		$('input.left-page-pageNumber').val(leftPage);
		$('input.right-page-pageNumber').val(rightPage);
		$('.currentPage').text(leftPage);

		//SET AUDIO
		$("#jquery_jplayer_1").jPlayer("setMedia", {
	            m4a: "/storybooks/audio/pages/" + book_id + "-" + leftPage + "-french.m4a"
		});
		//PLAY AUDIO
		setTimeout('playAudio()', 2000);
	}
}


function pageTurnBackward(){
	var currentPage = $('input.left-page-pageNumber').val();
	var currentLeftPage = parseInt(currentPage);
	var currentRightPage = parseInt(currentPage) + 1;
	var leftPage = parseInt(currentPage) - 2;
	var rightPage = leftPage + 1;
	var lastPage = 27;
	if(currentPage == '1'){
		var leftPage = 1;
		var rightPage = 2;
		
		//ANIMATE
		//Make cover and cover picture 100%
		$('.book-cover-wrapper').animate({
				'width' : '460px',
				'margin-left' : '110px'
		}, 500);
		$('.book-cover-wrapper img').animate({
				'width' : '100%',
				'height' : '400px'
		}, 500);
		//shrink pages wrapper and each page backer
		$('.book-pages-wrapper').animate({
				'width' : '0px',
				'padding-left' : '0px',
				'padding-right' : '0px'
		});
		$('.left-page-wrapper').animate({
				'width' : '0px',
				'padding-left' : '0px'
		}, 500);
		$('.right-page-wrapper').animate({
				'width' : '0px',
				'padding-right' : '0px'
		}, 500);
		/*
		//make the first two pages disappear
		$('.left-page#p' + leftPage).css({
			'width' : '0%',
			'padding' : '0%'
		});
		*/
		$('.right-page#p' + rightPage).css	({
			'width' : '0%',
			'padding' : '0%'
		});
		
		//LEFT ARROW DISAPPEAR
		$('.left-arrow-wrapper').fadeOut('fast');
		
		//NEXT AND PREV BUTTONS
		$('.next-page').css('display', 'block');
		
		//MAKE PAGE STAND OUT
		focusLeft();
		//CLEAR ACCESSORIES
		clearTranslator();
		//SET NUMBERS
		$('input.left-page-pageNumber').val('0');
		$('input.right-page-pageNumber').val('0');
		$('.currentPage').text('- Cover');
		
		//SET AUDIO
		$("#jquery_jplayer_1").jPlayer("setMedia", {
	            m4a: "/storybooks/audio/pages/" + book_id + "-" + leftPage + "-french.m4a"
		});
		//PLAY AUDIO
		setTimeout('playAudio()', 2000);
	}
	else if(currentPage == lastPage){
		
		//ANIMATE
		//shrink backcover and backcover picture to 0 width
		$('.book-backcover-wrapper').css('float', 'left').animate({
				'width' : '0px',
				'padding-left' : '0px',
				'padding-right' : '0px'
		}, 500);
		$('.book-backcover-wrapper img').animate({
				'width' : '0px',
				'height' : '400px'
		}, 500);
		//grow pages wrapper and each page backer to fill the whole book space
		$('.book-pages-wrapper').animate({
				'width' : '920px'
		});
		$('.right-page-wrapper').animate({
				'width' : '460px'
		}, 500);
		$('.left-page-wrapper').delay(500).animate({
				'width' : '460px'
		}, 500);
		//display the first two pages. make them wide enough.
		$('.left-page#p' + leftPage).css({
			'width' : '90%',
			'padding' : '5%'
		});
		$('.right-page#p' + rightPage).css	({
			'width' : '90%',
			'padding' : '5%'
		});
		
		//RIGHT ARROW APPEAR
		$('.right-arrow-wrapper').fadeIn('fast');
		
		//NEXT AND PREV BUTTONS
		$('.next-page').css('display', 'block');
		
		//MAKE PAGE STAND OUT
		focusLeft();
		//CLEAR ACCESSORIES
		clearTranslator();
		//SET NUMBERS
		$('input.left-page-pageNumber').val(leftPage);
		$('input.right-page-pageNumber').val(rightPage);
		$('.currentPage').text(leftPage);
		
		//SET AUDIO
		$("#jquery_jplayer_1").jPlayer("setMedia", {
	            m4a: "/storybooks/audio/pages/" + book_id + "-" + leftPage + "-french.m4a"
		});
		//PLAY AUDIO
		setTimeout('playAudio()', 2000);
	}
	else {
		//shrink current left page inward while expanding new left page, then shrink current right page outward while expanding new right page
		//current left page
		$('.left-page#p' + currentLeftPage).css('float', 'right').animate({
			'width' : '0%',
			'padding-right' : '0%',
			'padding-left' : '0%'
		}, 500);
		//new left page
		$('.left-page#p' + leftPage).css('float', 'left').delay(40).animate({
			'width' : '90%',
			'padding' : '5%'
		}, 500);
		//current right page
		$('.right-page#p' + currentRightPage).css('float', 'right').delay(500).animate({
			'width' : '0%',
			'padding-right' : '0%',
			'padding-left' : '0%'
		}, 500);
		//new right page
		$('.right-page#p' + rightPage).css('float', 'left').delay(540).animate({
			'width' : '90%',
			'padding' : '5%'
		}, 500);

		//NEXT AND PREV BUTTONS
		$('.next-page').css('display', 'block');
		$('.prev-page').css('display', 'none');

		//MAKE PAGE STAND OUT
		focusRight();
		//CLEAR ACCESSORIES
		clearTranslator();
		//SET NUMBERS
		$('input.left-page-pageNumber').val(leftPage);
		$('input.right-page-pageNumber').val(rightPage);
		$('.currentPage').text(rightPage);

		//SET AUDIO
		$("#jquery_jplayer_1").jPlayer("setMedia", {
	            m4a: "/storybooks/audio/pages/" + book_id + "-" + rightPage + "-french.m4a"
		});
		//PLAY AUDIO
		setTimeout('playAudio()', 2000);
	}
}


function focusRight(){
	//MAKE RIGHT PAGE STAND OUT
	$('.left-page').removeClass('page-bright');
	$('.right-page').addClass('page-bright');
}

function focusLeft(){
	//MAKE LEFT PAGE STAND OUT
	$('.right-page').removeClass('page-bright');
	$('.left-page').addClass('page-bright');
}

$(document).ready(function(){
	$('.book-title').click(function(){
		$('.left-page#3').slideToggle();
	});
});