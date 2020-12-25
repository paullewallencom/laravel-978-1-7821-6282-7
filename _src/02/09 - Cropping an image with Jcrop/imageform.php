<h1>Laravel and Jcrop</h1>
<?php echo Form::open_for_files() ?>
<?php echo Form::label('image', 'My Image') ?>
<br>
<?php echo Form::file('image') ?>
<br>
<?php echo Form::submit('Upload!') ?>
<?php echo Form::close() ?>

