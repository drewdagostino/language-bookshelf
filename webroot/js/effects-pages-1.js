function pageTurnForward(){
	var currentLeftPage = $('input.left-page-pageNumber').val();
	var leftPage = parseInt(currentLeftPage) + 2;
	var rightPage = leftPage + 1;
	var highPage = 31;
	if(leftPage > lastPage){
		alert('END');
	}
	else if(currentLeftPage == '0'){
		var leftPage = 1;
		var rightPage = 2;
		$('.book-cover-wrapper').animate({
				'width' : '0%',
				'padding-left' : '0px',
				'padding-right' : '0px'
		}, 500);
		$('.book-pages-wrapper').animate({
				'width' : '78%',
				'padding-left' : '10px',
				'padding-right' : '10px'
		});
		$('.right-page-nextBack, .left-page-nextBack').animate({
				'padding-right' : '20px'
		}, 500);
		//$('.right-page-nextBack, .left-page-nextBack').css('border', '1px solid #878787');
		$('.right-page, .left-page').animate({
				'padding' : '10px'
		});
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
	            m4a: "/storybooks/audio/samplebook/" + book_id + "-" + leftPage + "-english.m4a"
		});
		//PLAY AUDIO
		setTimeout('playAudio()', 3000);
	}
	else {
		//ANIMATION
		$('.right-page #' + rightPage).css('float', 'left').animate({
				'width' : '0%',
				'padding-left' : '0px',
				'padding-right' : '0px'
			}, 500).animate({
				'width' : '100%',
				'padding-left' : '10px',
				'padding-right' : '10px'
			}, 0);
		$('.left-page').css('float', 'left').delay(500).animate({
				'width' : '0%',
				'padding-left' : '0px',
				'padding-right' : '0px'
			}, 500).animate({
				'width' : '100%',
				'padding-left' : '10px',
				'padding-right' : '10px'
			}, 0);
		//NEXT AND PREV BUTTONS
		$('.next-page').css('display', 'block');
		$('.prev-page').css('display', 'none');
		//GET CONTENT
		$.get('/storybooks/dynamic/readBook.php?book=' + book_id + '&page=' + leftPage, function(data){
			$('.left-page').delay(1000).html(data);
			$('.left-page').css('background-image', 'url(/storybooks/img/pages/book-2-page-' + leftPage + '.png)');
		});
		$.get('/storybooks/dynamic/readBook.php?book=' + book_id + '&page=' + rightPage, function(data){
			$('.right-page').delay(1000).html(data);
			$('.right-page').css('background-image', 'url(/storybooks/img/pages/book-2-page-' + rightPage + '.png)');
		});
		//MAKE PAGE STAND OUT
		focusLeft();
		//CLEAR ACCESSORIES
		clearTranslator();
		//SET NUMBERS
		$('input.left-page-pageNumber').val(leftPage);
		$('input.right-page-pageNumber').val(rightPage);
		$('.currentPage').text(leftPage);
		$('.left-page').attr('id', leftPage);
		$('.right-page').attr('id', rightPage);
		//SET AUDIO
		$("#jquery_jplayer_1").jPlayer("setMedia", {
	            m4a: "/storybooks/audio/samplebook/" + book_id + "-" + leftPage + "-english.m4a"
		});
		//PLAY AUDIO
		setTimeout('playAudio()', 3000);
	}
}

function pageTurnBackward(){
	var currentLeftPage = $('input.left-page-pageNumber').val();
	var leftPage = parseInt(currentLeftPage) - 2;
	var rightPage = leftPage + 1;
	//IF ITS THE FIRST PAGE FLIP TO COVER
	if(currentLeftPage == '1'){
		var leftPage = 0;
		var rightPage = 0;
		$('.book-cover-wrapper').animate({
				'width' : '39%',
				'padding-left' : '10px',
				'padding-right' : '10px'
		}, 500);
		$('.book-pages-wrapper').animate({
				'width' : '0%',
				'padding-left' : '0px',
				'padding-right' : '0px'
		});
		$('.right-page-nextBack, .left-page-nextBack').animate({
				'padding-right' : '0px'
		}, 500);
		//$('.right-page-nextBack, .left-page-nextBack').css('border', '1px solid #878787');
		$('.right-page, .left-page').animate({
				'padding' : '0px'
		});
		//NEXT AND PREV BUTTONS
		$('.next-page').css('display', 'none');
		//GET CONTENT
		$('.left-page').delay(1000).html('');
		$('.right-page').delay(1000).html('');
		//MAKE PAGE STAND OUT
		focusLeft();
		//CLEAR ACCESSORIES
		clearTranslator();
		//SET NUMBERS
		$('input.left-page-pageNumber').val(leftPage);
		$('input.right-page-pageNumber').val(rightPage);
		$('.currentPage').text(leftPage);
		$('.left-page').attr('id', leftPage);
		$('.right-page').attr('id', rightPage);
		//SET AUDIO
		$("#jquery_jplayer_1").jPlayer("setMedia", {
	            m4a: "/storybooks/audio/samplebook/" + book_id + "-" + leftPage + "-english.m4a"
		});
		//PLAY AUDIO
		setTimeout('playAudio()', 3000);
	}
	else{
		//ANIMATION
		$('.left-page').animate({
				'width' : '0%',
				'margin-left' : '100%'
			}, 500).animate({
				'width' : '100%',
				'margin-left' : '0%',
				'padding-left' : '10px',
				'padding-right' : '10px'
			}, 0).css('float', 'left');
		$('.right-page').css('float', 'right').delay(500).animate({
				'width' : '0%',
				'margin-left' : '100%',
				'padding-left' : '0px',
				'padding-right' : '0px'
			}, 500).animate({
				'width' : '100%',
				'margin-left' : '0%',
				'padding-left' : '10px',
				'padding-right' : '10px'
			}, 0).css('float', 'left');
		//NEXT AND PREV BUTTONS
		$('.next-page').css('display', 'block');
		$('.prev-page').css('display', 'none');
		//GET CONTENT
		$.get('/storybooks/dynamic/readBook.php?book=' + book_id + '&page=' + rightPage, function(data){
			$('.right-page').delay(1000).html(data);
			$('.right-page').css('background-image', 'url(/storybooks/img/pages/book-2-page-' + rightPage + '.png)');
			
		});
		$.get('/storybooks/dynamic/readBook.php?book=' + book_id + '&page=' + leftPage, function(data){
			$('.left-page').delay(1000).html(data);
			$('.left-page').css('background-image', 'url(/storybooks/img/pages/book-2-page-' + leftPage + '.png)');
		});
		//MAKE PAGE STAND OUT
		focusRight();
		//CLEAR ACCESSORIES
		clearTranslator();
		//SET NUMBERS
		$('input.left-page-pageNumber').val(leftPage);
		$('input.right-page-pageNumber').val(rightPage);
		$('.currentPage').text(leftPage);
		$('.left-page').attr('id', leftPage);
		$('.right-page').attr('id', rightPage);
		//SET AUDIO
		$("#jquery_jplayer_1").jPlayer("setMedia", {
	            m4a: "/storybooks/audio/samplebook/" + book_id + "-" + leftPage + "-english.m4a"
		});
		//PLAY AUDIO
		setTimeout('playAudio()', 3000);
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