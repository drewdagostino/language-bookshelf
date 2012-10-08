<?
$this->Html->meta('carousel', array('inline' => false));
$this->Html->script('carousel', array('inline' => false));
$this->Html->css('carousel', null, array('inline' => false));
?>

<h1>All Pages</h1>

<? echo $this->Html->link('Add Page', array('controller' => 'Pages', 'action' => 'add')); ?>

<table>
	<tr>
		<th>ID</th>
		<th>book_id</th>
		<th>pageNumber</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	
	<? foreach($pages as $page){ ?>
	
	<tr>
		<td><? echo $page['Page']['id']; ?> </td>
		<td><? echo $this->Html->link($page['Page']['book_id'], array('action' => '/books/view', $page['Page']['book_id'])); ?>
		</td>
		<td><? echo $page['Page']['pageNumber']; ?>
		</td>
		<td><? echo $this->Html->link('Edit', array('action' => 'edit', $page['Page']['id'])); ?></td>
		<td><? echo $this->Form->postLink('Delete', array(
			'action' => 'delete', $page['Page']['id']), array(
			'confirm' => 'Are you sure you want to delete this page?')); ?></td>
	</tr>
	<? } ?>
	
</table>