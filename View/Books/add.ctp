<h1>Add Book</h1>

<?
echo $this->Form->create('Book');
echo $this->Form->input('title');
echo $this->Form->input('coverImage');
echo $this->Form->end('Save Book');
?>
