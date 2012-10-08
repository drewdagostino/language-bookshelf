<?php

require('database_connect.php');

$user = $_GET['user'];
$book = $_GET['book'];
$page = $_GET['page'];

$time = time();

$sq = "SELECT * FROM pages WHERE book_id='$book' AND pageNumber='$page'";
$qu = mysql_query($sq);
$ct = mysql_num_rows($qu);

if($ct > 0){
	$res = mysql_fetch_array($qu);
	$content = $res['content'];
	$wordCount = $res['wordCount'];
	$audioLength = $res['audioLength'];
	
	echo $content;
	echo '<div id="hidden-'.$page.'"><input class="wordCount" type="hidden" id="'.$page.'" value="'.$wordCount.'" />';
	echo '<input class="audioLength" type="hidden" id="'.$page.'" value="'.$audioLength.'" /></div>';
	
}
else {
	echo "No Page";
}


?>