<h1>Edit Page <? echo $page['Page']['pageNumber']; ?> in Book #<? echo $page['Page']['book_id']; ?></h1>

<?
$nextpage = $page['Page']['id'] + 1;
?>

<h3><a href='/storybooks/Pages/edit/<? echo $nextpage; ?>'>Next Page</a></h3>
<h3><a href='/storybooks/Pages'>Back to all pages</a></h3>
<?
echo $this->Form->create('Page');
echo $this->Form->input('pageNumber', array('width' => 4));
echo $this->Form->input('content', array('rows' => 7));
echo $this->Form->input('native_content', array('rows' => 7));
echo $this->Form->input('textSize');
echo $this->Form->input('textClass');
echo $this->Form->input('textTop');
echo $this->Form->input('textLeft');
echo $this->Form->input('textHeight');
echo $this->Form->input('textWidth');

echo $this->Form->input('wordCount');
echo $this->Form->input('audioLength');
echo $this->Form->end('Update Page');

?>

	
