<h1>Add Page</h1>

<h3><a href='/storybooks/Pages'>Back to all pages</a></h3>
<?
echo $this->Form->create('Page');
echo $this->Form->input('book_id', array('type' => 'text'));
echo $this->Form->input('pageNumber');
echo $this->Form->input('content', array('rows' => 7));
echo $this->Form->input('native_content', array('rows' => 7));
echo $this->Form->input('textSize', array('value' => '14'));
echo $this->Form->input('textClass', array('value' => 'auto'));
echo $this->Form->input('textTop', array('value' => 'auto'));
echo $this->Form->input('textLeft', array('value' => 'auto'));
echo $this->Form->input('textHeight', array('value' => 'auto'));
echo $this->Form->input('textWidth', array('value' => 'auto'));

echo $this->Form->input('wordCount', array('value' => '0'));
echo $this->Form->input('audioLength', array('value' => '0'));
echo $this->Form->end('Create Page');

?>

	
