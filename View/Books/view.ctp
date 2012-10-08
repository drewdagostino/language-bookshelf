<style type='text/css'>

#body_wrapper {
	min-width:1200px;
	width:85%;
	padding:20px;
	float:left;
	margin:0;
}

</style>

<?php echo $this->element('jplayer'); ?>

<? echo $book['Page'][0]['content'];

$evenPages = array();
$oddPages = array();

foreach($book['Page'] as $page){
	$pageNumber = $page['pageNumber'];
	if($odd = $pageNumber%2){
		array_push($oddPages, $page);
	}
	else {
		array_push($evenPages, $page);
	}
}

?>

<div class='book-title'>
	<? echo $book['Book']['title']; ?>
</div>

<div class='book_wrapper'>
	
	<div class='left-arrow-wrapper'>
		<div class='left-arrow'></div>
		<input type='hidden' class='left-page-pageNumber' value='0' />
	</div>
	
	<div class='book-cover-wrapper'>
		<img src="/storybooks/img/covers/<? echo $book['Book']['coverImage']; ?>" style='width:100%;'>
	</div>

	<div class='book-pages-wrapper'>
	
		<div class='left-page-wrapper'>
		
			<? foreach($oddPages as $page){
				echo "<div class='left-page' id='".$page['pageNumber']."'>";
				echo $page['content'];
				echo "</div>";
			}
			?>
		
		</div>
	
		<div class='right-page-wrapper'>
		
			<? foreach($evenPages as $page){
				echo "<div class='right-page' id='".$page['pageNumber']."'>";
				echo $page['content'];
				echo "</div>";
			}
			?>
		
		</div>
	
	</div>
	
	<div class='right-arrow-wrapper'>
		<div class='right-arrow'></div>
		<input type='hidden' class='right-page-pageNumber' value='0' />
	</div>
	
</div>

<div id='translate-word-popup'>
	Translate
</div>