<h1>File Upload</h1>
<?php echo Form::open_for_files() ?>
<?php echo Form::label('myfile', 'My File') ?>
<br> 
<?php Form::file('myfile') ?>
<br>
<?php echo Form::submit('Send it!') ?>
<?php echo Form::close() ?>

