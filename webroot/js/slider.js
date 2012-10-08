$(document).ready(function(){
	setTimeout('sliderOne()', 3000);
});

function sliderOne(){
	$('#slide-1').fadeOut('slow');
	$('#slide-2').fadeIn('slow');
	setTimeout('sliderTwo()', 3000);
}

function sliderTwo(){
	$('#slide-2').fadeOut('slow');
	$('#slide-3').fadeIn('slow');
	setTimeout('sliderThree()', 3000);
}

function sliderThree(){
	$('#slide-3').fadeOut('slow');
	$('#slide-4').fadeIn('slow');
	setTimeout('sliderFour()', 3000);
}

function sliderFour(){
	$('#slide-4').fadeOut('slow');
	$('#slide-1').fadeIn('slow');
	setTimeout('sliderOne()', 3000);
}

//Hover effect for try sticker
$(document).ready(function(){
	$('.homepage-slider, .try-inv-link').hover(function(){
		$('.try-sticker').html("<img src='/storybooks/img/landing/try-hover.png'>");
	}, function(){
		$('.try-sticker').html("<img src='/storybooks/img/landing/try.png'>");
	});
	$('.try-inv-link').click(function(){
		window.location.href='/storybooks/books/view1/2';
	});
});