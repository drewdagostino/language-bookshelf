<style type='text/css'>

#body_wrapper {
	width:1150px;
	margin:0 auto;
}

</style>

<?

$evenPages = array();
$oddPages = array();
$lastpage = 0;

foreach($book['Page'] as $page){
	$pageNumber = $page['pageNumber'];
	if($odd = $pageNumber%2){
		array_push($oddPages, $page);
	}
	else {
		array_push($evenPages, $page);
	}
	
	$lastpage++;
}

?>

<script type='text/javascript'>
var lastPage = <? echo $lastpage; ?>;
var book_id = <? echo $book['Book']['id']; ?>

//fade bg in
$(document).ready(function(){
	$('.welcome').fadeIn('slow');
	$('#bg-black').fadeIn('slow');
});
</script>

<div class='instructions'>
	<h3><b>Tips:</b></h3>
	<ol>
		<li>Use the right and left arrows to flip the pages.</li>
		<li>Click on a word to view its translation.</li>
		<li>Click the button below to display the book in English.</li>
	</ol>
</div>

<div class='feedback'>
	<img src='/storybooks/img/landing/feedback.png'>
</div>

<div class='book-title'>
	<? echo $book['Book']['title']; ?>
</div>

<div class='book-language'>The Very Hungry Caterpillar - French Version</div>

<div class='controls-wrapper'>
	<?php echo $this->element('jplayer2'); ?>
</div>

<div class='top-book-wrapper'>
	
	<div class='book-wrapper'>

		<div class='left-arrow-wrapper' style='display:none'>
			<div class='left-arrow'></div>
			<input type='hidden' class='left-page-pageNumber' value='0' />
		</div>
		
		<div class='book-cover-wrapper'>
			<img src="/storybooks/img/pages/book-<? echo $book['Book']['id'];?>-cover.png">
		</div>

		<div class='book-pages-wrapper'>
			
			<div class='left-page-wrapper'>

				<? foreach($oddPages as $page){
					echo "<div class='left-page' id='p".$page['pageNumber']."' style='background-image:url(/storybooks/img/pages/book-".$book['Book']['id']."-page-".$page['pageNumber'].".png);background-repeat:no-repeat'>";
					echo '<div class="pageText '.$page['textClass'].'" style="height:'.$page['textHeight'].'px;width:'.$page['textWidth'].'px;top:'.$page['textTop'].'px;left:'.$page['textLeft'].'px;font-size:'.$page['textSize'].'px;">';
					echo str_replace("\\", '', $page['content']);
					echo '</div>';
					echo '<div id="hidden-'.$page['pageNumber'].'"><input class="wordCount" type="hidden" id="'.$page['pageNumber'].'" value="'.$page['wordCount'].'" />';
					echo '<input class="audioLength" type="hidden" id="'.$page['pageNumber'].'" value="'.$page['audioLength'].'" /></div>';
					echo "</div>";
				}
				?>
				
			</div>
			
			<div class='right-page-wrapper'>
				
				<? foreach($evenPages as $page){
					echo "<div class='right-page' id='p".$page['pageNumber']."' style='background-image:url(/storybooks/img/pages/book-".$book['Book']['id']."-page-".$page['pageNumber'].".png);background-repeat:no-repeat'>";
					echo '<div class="pageText '.$page['textClass'].'" style="height:'.$page['textHeight'].'px;width:'.$page['textWidth'].'px;top:'.$page['textTop'].'px;left:'.$page['textLeft'].'px;font-size:'.$page['textSize'].'px">';
					echo str_replace("\\", '', $page['content']);
					echo '</div>';
					echo '<div id="hidden-'.$page['pageNumber'].'"><input class="wordCount" type="hidden" id="'.$page['pageNumber'].'" value="'.$page['wordCount'].'" />';
					echo '<input class="audioLength" type="hidden" id="'.$page['pageNumber'].'" value="'.$page['audioLength'].'" /></div>';
					echo "</div>";
				}
				?>
				
			</div>
		
		</div>
		
		<div class='book-backcover-wrapper'>
			<img src="/storybooks/img/pages/book-<? echo $book['Book']['id'];?>-backcover.png">
		</div>

		<div class='right-arrow-wrapper'>
			<div class='right-arrow'></div>
			<input type='hidden' class='right-page-pageNumber' value='0' />
		</div>

	</div>
	
	<div class='next-page'>
	</div>
	
	<div class='prev-page'>
	</div>
	
</div>

<div class='clear'></div>
<br/>

<div id='display-bottom-book'>
	Display book in English
</div>

<div id='hide-bottom-book'>
	Hide book in English
</div>

<div class='clear'></div>

<!-- START BOOK IN NATIVE LANGUAGE -->

<div class='bottom-book-wrapper' style='display:none'>
	
	<div class='book-wrapper'>

		<div class='left-arrow-wrapper' style='display:none'>
			<div class='left-arrow'></div>
			<input type='hidden' class='left-page-pageNumber' value='0' />
		</div>
		
		<div class='book-cover-wrapper'>
			<img src="/storybooks/img/pages/book-<? echo $book['Book']['id'];?>-cover.png">
		</div>

		<div class='book-pages-wrapper'>
			
			<div class='left-page-wrapper'>

				<? foreach($oddPages as $page){
					echo "<div class='left-page' id='p".$page['pageNumber']."' style='background-image:url(/storybooks/img/pages/book-".$book['Book']['id']."-page-".$page['pageNumber'].".png);background-repeat:no-repeat'>";
					echo '<div class="pageText '.$page['textClass'].'" style="height:'.$page['textHeight'].'px;width:'.$page['textWidth'].'px;top:'.$page['textTop'].'px;left:'.$page['textLeft'].'px;font-size:'.$page['textSize'].'px;">';
					echo str_replace("\\", '', $page['native_content']);
					echo '</div>';
					echo '<div id="hidden-'.$page['pageNumber'].'"><input class="wordCount" type="hidden" id="'.$page['pageNumber'].'" value="'.$page['wordCount'].'" />';
					echo '<input class="audioLength" type="hidden" id="'.$page['pageNumber'].'" value="'.$page['audioLength'].'" /></div>';
					echo "</div>";
				}
				?>
				
			</div>
			
			<div class='right-page-wrapper'>
				
				<? foreach($evenPages as $page){
					echo "<div class='right-page' id='p".$page['pageNumber']."' style='background-image:url(/storybooks/img/pages/book-".$book['Book']['id']."-page-".$page['pageNumber'].".png);background-repeat:no-repeat'>";
					echo '<div class="pageText '.$page['textClass'].'" style="height:'.$page['textHeight'].'px;width:'.$page['textWidth'].'px;top:'.$page['textTop'].'px;left:'.$page['textLeft'].'px;font-size:'.$page['textSize'].'px">';
					echo str_replace("\\", '', $page['native_content']);
					echo '</div>';
					echo '<div id="hidden-'.$page['pageNumber'].'"><input class="wordCount" type="hidden" id="'.$page['pageNumber'].'" value="'.$page['wordCount'].'" />';
					echo '<input class="audioLength" type="hidden" id="'.$page['pageNumber'].'" value="'.$page['audioLength'].'" /></div>';
					echo "</div>";
				}
				?>
				
			</div>
		
		</div>
		
		<div class='book-backcover-wrapper'>
			<img src="/storybooks/img/pages/book-<? echo $book['Book']['id'];?>-backcover.png">
		</div>

		<div class='right-arrow-wrapper'>
			<div class='right-arrow'></div>
			<input type='hidden' class='right-page-pageNumber' value='0' />
		</div>

	</div>
	
	<div class='next-page'>
	</div>
	
	<div class='prev-page'>
	</div>
	
</div>

<div id='translate-word-popup'>
	Translate
</div>

<audio id="soundHandle" style="display: none;"></audio>
