<?php 

Route::get('redactor', function() 
{
	return View::make('redactor');
});

Route::post('redactorupload', function()
{
	$rules = array(
		'file' => 'image|max:10000'
	);
	$validation = Validator::make(Input::all(), $rules);
	$file = Input::file('file');
	if ($validation->fails())
    {
        return FALSE;
    } 
    else 
    {
    	if (Input::upload('file', 'public/images', $file['name'])) 
    	{
            return Response::json(array('filelink' => 'images/' . $file['name']));

    	}
    	else 
    	{
    		return FALSE;
    	}
    }
});

Route::post('redactor', function() 
{
    return dd(Input::all());
});
