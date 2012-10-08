<h1>Edit Your Book</h1>

<h2>Basic Information for <? echo $book['Book']['title']; ?></h2>

<?
echo $this->Form->create('Book');
echo $this->Form->input('title');
echo $this->Form->input('coverImage');
echo $this->Form->input('description', array('rows' => 7));
echo $this->Form->input('price');
echo $this->Form->input('language');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Update Book');

?>

<h2>Pages</h2>

	
	<? foreach($book['Page'] as $page){ ?>
	
		<p><? echo $this->Html->link($page['pageNumber'], array('action' => 'editpage', $page['id'])); ?> </p>

	<? } ?>
	
