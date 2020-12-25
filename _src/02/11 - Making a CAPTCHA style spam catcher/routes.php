<?php 

Route::get('captcha', function() 
{
    $captcha = new Captcha;
    $cap = $captcha->make();
    return View::make('captcha')->with('cap', $cap);
});

Route::post('captcha', function() 
{
    if (Session::get('my_captcha') !== Input::get('captcha'))
    {
        return 'No match!';
    }
    return 'They Match!';
});
