$(document).ready(function(){
	$('.top-book-wrapper .word').live('click', function(){
		//change appearance
		$('.word').removeClass('translated');
		$(this).addClass('translated');
		var word = $(this).text();
		var pagePos = $(this).parent().position();
			var pagePosX = pagePos.left;
			var pagePosY = pagePos.top - 35;
		var pos = $(this).position();
			var posX = pos.left + pagePosX;
			var posY = pos.top + pagePosY;
		var fromLanguage = 'fr';
		var toLanguage = 'en';
		alert("word: " + word);
		
		
		//VOCALS
			//get rid of punctuation
			soundWord = word.replace(',', '').replace('.', '').replace('!', '').replace('?', '').replace('à', 'a').replace('é', 'e').replace('è', 'e').replace('â', 'a').replace('ô', 'o');
			soundHandle = document.getElementById('soundHandle');
			soundHandle.src = '/storybooks/audio/words/french/' + soundWord + '.m4a';
			soundHandle.play();
		
		//GET THE TRANSLATION
		$.ajax({
			url: 'https://www.googleapis.com/language/translate/v2?key=' + google_key + '&source=' + fromLanguage + '&target=' + toLanguage + '&q=' + word + '&prettyprint=true',
		    type: 'GET',
		    crossDomain: true,
		    dataType: 'jsonp',
		    success: function(data) { 
				$('#translate-word-popup').fadeIn('fast').animate({
					'top' : posY,
					'left' : posX
				});
				$('#translate-word-popup').text(data.data.translations[0].translatedText);
			},
		    error: function(data) { alert('Failed!'); }
		
		});
		
	});
	/*, function(){
		$('#translate-word-popup').fadeOut('fast');
		$(this).removeClass('translated');
	});*/
});

function clearTranslator(){
	$('#translate-word-popup').fadeOut('fast');
	$('#translate-word-popup').animate({
		'top' : 200,
		'left' : 200
	});
}

