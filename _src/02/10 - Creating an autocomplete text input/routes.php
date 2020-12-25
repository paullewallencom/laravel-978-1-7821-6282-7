<?php 

Route::get('autocomplete', function()
{
	return View::make('autocomplete');
});

Route::get('getdata', function()
{
	$term = Str::lower(Input::get('term'));
	$data = array(
		'R' => 'Red',
		'O' => 'Orange',
		'Y' => 'Yellow',
		'G' => 'Green',
		'B' => 'Blue',
		'I' => 'Indigo',
		'V' => 'Violet',
	);
	$return_array = array();

	foreach ($data as $k => $v) {
		if (strpos(Str::lower($v), $term) !== FALSE) {
			$return_array[] = array('value' => $v, 'id' => $k);
		}
	}
	return Response::json($return_array);
});
