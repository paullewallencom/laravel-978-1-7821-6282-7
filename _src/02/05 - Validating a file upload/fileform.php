<h1>File Upload</h1>
<?php $messages =  $errors->all('<p style="color:red">:message</p>') ?>
<?php 
foreach ($messages as $msg) 
{
	echo $msg;
}
?>
<?php echo Form::open_for_files() ?>
<?php echo Form::label('myfile', 'My File (Word or Text doc)') ?>
<br>
<?php Form::file('myfile') ?>
<br>
<?php echo Form::submit('Send it!') ?>
<?php echo Form::close() ?>

