<h1>Laravel Captcha</h1>
<?php echo Form::open() ?>
<?php echo Form::label('captcha', 'Type these letters:') ?>
<br>
<img src="<?php echo $cap ?>">
<br>
<?php echo Form::text('captcha') ?>
<br>
<?php echo Form::submit('Verify!') ?>
<?php echo Form::close() ?>
