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
		<th>Title</th>
		<th>Edit</th>
		<th>Delete</th>
		<th>Image</th>
	</tr>
	
	<? foreach($books as $book){ ?>
	
	<tr>
		<td><? echo $book['Book']['id']; ?> </td>
		<td><? echo $this->Html->link($book['Book']['title'], array('action' => 'view1', $book['Book']['id'])); ?>
		</td>
		<td><? echo $this->Html->link('Edit', array('action' => 'edit', $book['Book']['id'])); ?></td>
		<td><? echo $this->Form->postLink('Delete', array(
			'action' => 'delete', $book['Book']['id']), array(
			'confirm' => 'Are you sure you want to delete this post?')); ?></td>
		<td><? echo $book['Book']['coverImage']; ?></td>
	</tr>
	<? } ?>
	
</table>