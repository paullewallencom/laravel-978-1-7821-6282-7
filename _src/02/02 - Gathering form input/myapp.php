<h1>User Info</h1>
<?php echo Form::open() ?>
<?php echo Form::label('username', 'Username') ?>
<?php echo Form::text('username') ?>
<br>
<?php echo Form::label('password', 'Password') ?>
<?php echo Form::password('password') ?>
<br>
<?php echo Form::label('color', 'Favorite Color') ?>
<?php echo Form::select('color', array('red' => 'red', 'green' => 'green', 'blue' => 'blue')) ?>
<br>
<?php echo Form::submit('Send it!') ?>
<?php echo Form::close() ?>
