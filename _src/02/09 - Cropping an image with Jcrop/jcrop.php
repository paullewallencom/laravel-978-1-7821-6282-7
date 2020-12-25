<!DOCTYPE html>
<html>
	<head>	
		<title>Laravel and Jcrop</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/jquery.Jcrop.min.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script src="js/jquery.Jcrop.min.js"></script>
	</head>
	<body>
		<h2>Image Cropping with Laravel and Jcrop</h2>
		<img src="<?php echo $image ?>" id="cropimage"> 

		<?php echo Form::open() ?>
		<?php echo Form::hidden('image', $image) ?>
		<?php echo Form::hidden('x', '', array('id' => 'x')) ?>
		<?php echo Form::hidden('y', '', array('id' => 'y')) ?>
		<?php echo Form::hidden('w', '', array('id' => 'w')) ?>
		<?php echo Form::hidden('h', '', array('id' => 'h')) ?>
		<?php echo Form::submit('Crop it!') ?>
		<?php echo Form::close() ?>

		<script type="text/javascript">
			$(function() {
				$('#cropimage').Jcrop({
					onSelect: updateCoords
				});
			});
			function updateCoords(c) {
				$('#x').val(c.x);
				$('#y').val(c.y);
				$('#w').val(c.w);
				$('#h').val(c.h);
			};
		</script>
	</body>
</html>
