<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<?php

echo $this->Html->charset();

echo $this->Html->meta('keywords', 'Learn New Language, French, Language Learning');
echo $this->Html->meta('description', 'Learn a new language from the children\'s books you already know and love.');

echo $this->Html->css(array('default', 'master', 'book', 'display', 'gradients', 'shadows', 'mobile_book', 'landing', 'text', 'player'));

?>

<script type="text/javascript">
var google_key = 'AIzaSyADfBGK1i0yu5F_-UYcYRv30oJbciVNT34';
var user = 1;
var userName = 'Drew';
var lastPage = 30;
</script>

<?
echo $this->Html->script('jquery', array('block' => 'jqueryScript'));
echo $this->Html->script(array('jquery.min', 'jquery-ui.min', 'jPlayer/jquery.jplayer.min', 'book-read', 'welcome', 'controls', 'effects-hover', 'effects-pages', 'slider', 'translate'), array('block' => 'jsScripts'));
4
?>

</head>
<body>

<div id="page_wrapper">
	<div id="header_wrapper">
		<div id="header">
			<div id="top_nav">
				<ul>
					<li class="left"><a href="/storybooks/books">All Books</a></li>
					<li><a href="#">Sign In</a></li>
				</ul>
			</div>
			<a href="/storybooks/">
				<div id="logo">
					<? echo $this->Html->image('logo-languagebookshelf.png', array('height' => '60px')); ?>
				</div>
			</a>
		</div>
	</div>

	<div id="body_wrapper">
		
	<?php echo $content_for_layout; ?>

	</div>
</div>

<div class='welcome'>
	<div class='popupClose'>X</div>
	<h2 class='orange'>Thanks for trying out our demo!</h2>
	<p>The Language Bookshelf is just getting started, and this book is the extent of our library.</p>
	<p>We're trying to create the best way to learn a new language, and we can't do that without honest user feedback. So try out the book. See what it does, what it doesn't do, what you like about it, and what you don't like.</p>
	<p><b>Click the "feedback" tab on the left side of the screen to let us know how to improve before we launch with more books and languages.</b></p>
	<p>Your help is definitely appreciated.</p>
	<p>- Drew</p>
	<button class='close-welcome blue'>Get Started</button>
</div>

<div class='feedback-form'>
	<div class='popupClose'>X</div>
	<h2>Send your feedback!</h2>
	<table>
		<tr><td>Name: </td><td><input type='text' name='name' id='feedbackName' /></td></tr>
		<tr><td>Email: </td><td><input type='text' name='email' id='feedbackEmail' /></td></tr>
		<tr><td>Feedback: </td><td></td></tr>
	</table>
	<textarea name='feedback' cols='20' rows='3' id='feedbackContent'></textarea>
	<button id='sendFeedback' class='blue'>Send</button>
</div>

<div id="bg-black"></div>

<div id="footer">
	<div id="footer_block_left" class='footer_block'>
		
	</div>
	<div class='footer_block'>
	</div>
	<div class='footer_block' style="text-align:left;">
		<ul>
			<li><a href="#">Browse All Books</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Request New Book</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
		<p style='margin:60px 0 0 40px;'>Copyright 2011, The Language Bookshelf.</p>
	</div>
</div>
</body>
</html>