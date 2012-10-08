<?php

require('../database_connect.php');

$user = $_GET['user'];
$username = db_input($_GET['name']);
$book_id = $_GET['book'];
$chapter = $_GET['chapter'];
$section = $_GET['section'];
$content = db_input($_GET['content']);

$time = time();

$note = '<span class="note_name">'.$username.' at '.$time.'</span><div class="listed_note">'.$content.'</div>';

$s = "SELECT * FROM notes WHERE book='$book_id' AND chapter='$chapter' AND section='$section'";
$q = mysql_query($s);
$count = mysql_num_rows($q);

if($count == 0){
	$sql = "INSERT INTO notes (book, chapter, section, content) VALUES ('$book_id', '$chapter', '$section', '$note')";
	mysql_query($sql) or die(mysql_error());
	echo "INSERTED";
}

else {
	$row = mysql_fetch_array($q);
	$id = $row['id'];
	$old_content = $row['content'];
	$new_content = db_input($old_content.$note);
	
	$nsql = "UPDATE notes SET content='$new_content' WHERE id='$id'";
	mysql_query($nsql) or die(mysql_error());
	echo "UPDATED";
}

?>