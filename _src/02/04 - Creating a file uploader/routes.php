<?php 


Route::get('fileform', function()
{
	return View::make('fileform');
});

Route::post('fileform', function()
{
	$file = Input::file('myfile');
	$ext = File::extension($file['name']);
	if (Input::upload('myfile', 'files', 'newfilename.' . $ext)) 
	{
		return "Success";
	}
	else 
	{
		return "Error";
	}
});

