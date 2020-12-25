<?php 

Route::get('myform', function()
{
	return View::make('myapp');
});

Route::post('myform', function()
{
	$rules = array(
    	'email' => 'required|email|min:6',
    	'username' => 'required|min:6',
    	'password' => 'required'
	);

    $messages = array(
'min'    => 'Way too short! The :attribute must be at least :min characters in length.',
        'username_required' => 'We really, really need a Username.'        
    );

	$validation = Validator::make(Input::all(), $rules, $messages);

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

