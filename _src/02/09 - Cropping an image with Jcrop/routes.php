<?php 

Route::get('imageform', function()
{
        return View::make('imageform');
});

Route::post('imageform', function()
{
    $rules = array(
        'image' => 'required|mime:jpg|max:10000'
    );

    $validation = Validator::make(Input::all(), $rules);

    if ($validation->fails())
    {
        return Redirect::to('imageform')->with_errors($validation);
    } 
    else 
    {
        $file = Input::file('image');
        if (Input::upload('image', 'public/images', $file['name'])) 
        {
            return Redirect::to('jcrop')->with('image', $file['name']);
        }
        else 
        {
            return "Error uploading file";
        }
    }
});

Route::get('jcrop', function()
{
    return View::make('jcrop')->with('image', 'images/' . Session::get('image'));
});

Route::post('jcrop', function()
{
    $quality = 90;

    $src  = Input::get('image');
    $img  = imagecreatefromjpeg($src);
    $dest = ImageCreateTrueColor(Input::get('w'), Input::get('h'));

    imagecopyresampled($dest, $img, 0, 0, Input::get('x'), Input::get('y'), Input::get('w'), Input::get('h'), Input::get('w'), Input::get('h'));
    imagejpeg($dest, 'public/' . $src, $quality);

    return "<img src='" . $src . "'>";
});
