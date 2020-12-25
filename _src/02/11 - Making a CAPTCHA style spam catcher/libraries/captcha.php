<?php
class Captcha {
	public function make() 
	{
	    $string = Str::random(6, 'alpha');
	    Session::put('my_captcha', $string);
	    
		$width      = 100;
		$height     = 25;
		$image      = imagecreatetruecolor($width, $height);
		$text_color = imagecolorallocate($image, 130, 130, 130);
		$bg_color   = imagecolorallocate($image, 190, 190, 190);
	    
	    imagefilledrectangle($image, 0, 0, $width, $height, $bg_color);	    
	    imagestring($image, 5, 16, 4, $string, $text_color);

		ob_start();
		imagejpeg($image);
		$jpg = ob_get_clean();
		return "data:image/jpeg;base64," . base64_encode($jpg);
	}
}
