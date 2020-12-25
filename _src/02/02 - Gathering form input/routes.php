<?php 


Route::get('myform', function()
{
	return View::make('myapp');
});

Route::post('myform', function()
{
	// Process the data here
	return Redirect::to('myresults')->with_input('only', array('username', 'color'));
});

Route::get('myresults', function()
{
	return 'Your username is: ' . Input::old('username') . '<br>Your favorite color is: ' . Input::old('color');
});

