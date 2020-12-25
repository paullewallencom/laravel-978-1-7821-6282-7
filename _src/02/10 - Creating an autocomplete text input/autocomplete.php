<!DOCTYPE html>
<html>
	<head>	
		<title>Laravel Autocomplete</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script src="//code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
	</head>
	<body>
		<h2>Laravel Autocomplete</h2>

		<?php echo Form::open() ?>
		<?php echo Form::label('auto', 'Find a color: ') ?>
		<?php echo Form::text('auto', '', array('id' => 'auto')) ?>
		<br>
		<?php echo Form::label('response', 'Our color key: ') ?>
		<?php echo Form::text('response', '', array('id' => 'response', 'disabled' => 'disabled')) ?>
		<?php echo Form::close() ?>

		<script type="text/javascript">
			$(function() {
        		$("#auto").autocomplete({
        			source: "getdata",
            		minLength: 1,
            		select: function( event, ui ) {
            			$('#response').val(ui.item.id);
            		}
        		});
			});
		</script>
	</body>
</html>
