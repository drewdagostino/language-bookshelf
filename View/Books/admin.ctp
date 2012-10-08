<?
$this->Html->meta('carousel', array('inline' => false));
$this->Html->script('carousel', array('inline' => false));
$this->Html->css('carousel', null, array('inline' => false));
?>

<h1>All Books</h1>

<p>All the books are displayed here.</p>

<? echo $this->Html->link('Add Book', array('controller' => 'books', 'action' => 'add')); ?>

<table>
	<tr>
		<th>ID</th>
		<th>Edit</th>
		<th>Title</th>
		<th>Image</th>
		<th>Price</th>
		<th># Pages</th>
		<th>Language</th>
		<th>Delete</th>
	</tr>
	
	<? foreach($books as $book){ 
		$id = $book['Book']['id'] - 1;
		$pageCounter = 0;
		 
		foreach($book['Page'] as $pageId){
			$pageCounter++;
		}
						
		?>
	
	<tr>
		<td><? echo $book['Book']['id']; ?> </td>
		<td><? echo $this->Html->link('Edit', array('action' => 'edit', $book['Book']['id'])); ?></td>
		<td><? echo $this->Html->link($book['Book']['title'], array('action' => 'view', $book['Book']['id'])); ?></td>
		<td><? echo $book['Book']['coverImage']; ?></td>
		<td><? echo $book['Book']['price']; ?></td>
		<td><? echo $pageCounter; ?></td>
		<td><? echo $book['Book']['language']; ?></td>
		<td><? echo $this->Form->postLink('Delete', array(
			'action' => 'delete', $book['Book']['id']), array(
			'confirm' => 'Are you sure you want to delete this post?')); ?></td>
	</tr>
	<? } ?>
	
</table>