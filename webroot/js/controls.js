$(document).ready(function(){
      $("#jquery_jplayer_1").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
            m4a: "/storybooks/audio/pages/" + book_id + "-cover-french.m4a",
			oga: "/storybooks/audio/pages/" + book_id + "-cover-french.m4a",
			wmode:"window",
          });
        },
        swfPath: "/js",
        supplied: "m4a"
	  });
	
	//LEFT TO RIGHT PAGE
	$('.next-page').click(function(){
		$(this).css('display', 'none');
		$('.prev-page').css('display', 'block');
		var rightPage = $('input.right-page-pageNumber').val();
		$('.currentPage').text(rightPage);
		//SET AUDIO
		$("#jquery_jplayer_1").jPlayer("setMedia", {
	            m4a: "/storybooks/audio/pages/" + book_id + "-" + rightPage + "-french.m4a"
		}).jPlayer('play');
		highlightWords();
		focusRight();
		fixPauseButton();
	});
	//RIGHT TO LEFT PAGE
	$('.prev-page').click(function(){
		$(this).css('display', 'none');
		$('.next-page').css('display', 'block');
		var leftPage = $('input.left-page-pageNumber').val();
		$('.currentPage').text(leftPage);
		//SET AUDIO
		$("#jquery_jplayer_1").jPlayer("setMedia", {
	            m4a: "/storybooks/audio/pages/" + book_id + "-" + leftPage + "-french.m4a"
		}).jPlayer('play');
		highlightWords();
		focusLeft();
		fixPauseButton();
	});
	
 	  $("#jumpToTime").click( function() {
	     	$("#jquery_jplayer_1").jPlayer("play", 3);
	  });
	
	$("#jquery_jplayer_1").bind($.jPlayer.event.timeupdate, function(event) { // Add a listener to report the time play began
		highlightWords(event.jPlayer.status.currentTime);
	});
	
	//THIS FIXES THE DISPLAY OF THE PLAY BUTTON
	$("#jquery_jplayer_1").bind($.jPlayer.event.play, function(event) {
		fixPauseButton();
	});
	
	//SPACE BAR TO PLAY/PAUSE
	$(this).keypress(function(e){
		if(e.which == 32){
			playAudio();
		}
	});
});

//FUNCTIONS

function playAudio(){
	fixPauseButton();
	$("#jquery_jplayer_1").jPlayer('play');
	highlightWords();
}

function pauseAudio(){
	$("#jquery_jplayer_1").jPlayer('pause');
}

function highlightWords(currentTime){
	//Highlighting
	var page = $('.currentPage').text();
	var wordCount = $('div#hidden-' + page + ' input.wordCount').val();
	var wordCountLimit = parseInt(wordCount) + 1;
	var audioSeconds = $('div#hidden-' + page + ' input.audioLength').val();
	
	//var startWord = wordCount*(parseInt(start));
	
	var secondsPerWord = parseInt(audioSeconds)/wordCount;
	
	var pageTest = (parseInt(page) + 1).toString();
		
	$('span.word').css('background-color', 'transparent');
	$('div.book-pages-wrapper div#p' + page + '  span.word').each(function(){
		var id = $(this).attr('id');
		var delayTime = (parseInt(id)-1)*secondsPerWord;
		
		if(delayTime < currentTime){
			$(this).css('background-color' , '#FFEA9C');
		}
	});
}

function fixPauseButton(){
	$('.pause-button, li#jp-pause').css('display', 'block');
}