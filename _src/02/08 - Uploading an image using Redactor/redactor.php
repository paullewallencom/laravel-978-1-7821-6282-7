<!DOCTYPE html>
<html>
	<head>	
		<title>Laravel and Redactor</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/redactor.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script src="js/redactor/redactor.min.js"></script>
	</head>
	<body>
		<?php echo Form::open() ?>
		<?php echo Form::label('mytext', 'My Text') ?>
		<br>
		<?php echo Form::textarea('mytext', '', array('id' => 'mytext')) ?>
		<br>
		<?php echo Form::submit('Send it!') ?>
		<?php echo Form::close() ?>
		<script type="text/javascript">
			$(function() {
				$('#mytext').redactor({ 
					imageUpload: 'redactorupload'
				});
			});
		</script>
	</body>
</html>

