<?php 

Route::get('myform', function()
{
	return View::make('myapp');
});

Route::post('myform', function()
{
	$rules = array(
    	'email' => 'required|email',
    	'password' => 'required',
         'email_not' => 'silly_bear'
	);
    $messages = array(
        'silly_bear' => 'Nothing should be there.'
    );
	$validation = Validator::make(Input::all(), $rules, $messages);

	if ($validation->fails())
    {
        return Redirect::to('myform')->with_errors($validation)->with_input();
    }

	return Redirect::to('myresults')->with_input();
});

Validator::register('silly_bear', function($attribute, $value, $parameters)
{
    return $value == '';
});

Route::get('myresults', function()
{
	return dd(Input::old());
});
