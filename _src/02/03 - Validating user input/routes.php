<?php 


Route::get('myform', function()
{
	return View::make('myapp');
});

Route::post('myform', function()
{
	$rules = array(
    	'email' => 'required|email|different:username',
    	'username' => 'required|min:6',
    	'password' => 'required|same:password_confirm'
	);
	$validation = Validator::make(Input::all(), $rules);

	if ($validation->fails())
    {
        return Redirect::to('myform')->with_errors($validation)->with_input();
    }

	return Redirect::to('myresults')->with_input();

});

Route::get('myresults', function()
{
	return dd(Input::old());
});
