<?php
require_once('header.php');

$text = $_POST['text'];

?>

<?php
	if($text){
		
		echo "<h2>Results:</h2><div id='results'><textarea name='text' rows='20' cols='80'>";
		$words_array = explode(' ', $text);
		$num = 1;
	
		foreach($words_array as $word){
			$node = "<span class='word' id='".$num."'>".$word."</span> ";
			echo $node;
			$num++;
		}
		echo "</textarea></div>";
	}
?>

<h2>Print out spanned words</h2>

<p>Type or paste in the words you'd like to spanify:</p>
<form action='words.php' method='post'>
	<textarea name='text' rows='20' cols='80'></textarea>
	<br/>
	<button type='submit' name='submit'>Done</button>
</form>

<?php
require_once('footer.php');
?>