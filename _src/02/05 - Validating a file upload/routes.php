<?php 

Route::get('fileform', function()
{
	return View::make('fileform');
});

Route::post('fileform', function()
{
	$rules = array(
		'myfile' => 'mimes:doc,docx,pdf,txt|max:1000'
	);
	$validation = Validator::make(Input::all(), $rules);
	
	if ($validation->fails())
    {
        return Redirect::to('fileform')->with_errors($validation)->with_input();
    } 
    else 
    {
		$file = Input::file('myfile');
    	if (Input::upload('myfile', 'files', $file['name'])) 
    	{
    		return "Success";
    	}
    	else 
    	{
    		return "Error";
    	}
    }
});
