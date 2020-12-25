<h1>User Info</h1>
<?php $messages =  $errors->all('<p style="color:red">:message</p>') ?>
<?php 
foreach ($messages as $msg) 
{
	echo $msg;
}
?>
<?php echo Form::open() ?>
<?php echo Form::label('email', 'Email') ?>
<?php echo Form::text('email', Input::old('email')) ?>
<br>
<?php echo Form::label('password', 'Password') ?>
<?php echo Form::password('password') ?>
<?php echo Form::text('email_not', ‘’, array(‘style’ => ‘display:none’)) ?>
<br>
<?php echo Form::submit('Send it!') ?>
<?php echo Form::close() ?>

