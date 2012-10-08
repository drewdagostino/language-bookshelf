$(document).ready(function(){
	$('.close-welcome, .popupClose, #bg-black').click(function(){
		$('#bg-black').fadeOut('slow');
		$('.welcome').fadeOut('slow');
		$('.feedback-form').fadeOut('slow');
	});
});

$(document).ready(function(){
	$('.feedback').click(function(){
		$('#bg-black').fadeIn('slow');
		$('.feedback-form').fadeIn('slow');
	});
	$('button#sendFeedback').click(function(){
		var name = $('input#feedbackName').val();
		var email = $('input#feedbackEmail').val();
		var feedback = $('textarea#feedbackContent').val();
		if(name == ''){
			alert("Please fill in your name.");
		}
		else if(email == ''){
			alert("Please fill in your email.");
		}
		else if(feedback == ''){
			alert("Please fill in your feedback.");
		}
		else {
			$.get('/storybooks/dynamic/feedback.php?action=send&name=' + name + '&email=' + email + '&feedback=' + feedback, function(){	
			});
			$('#bg-black').fadeOut('slow');
			$('.feedback-form').fadeOut('slow');
			$('textarea#feedbackContent').val('');
		}
	});
});