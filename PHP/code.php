<?php
	
	session_start();

	$width = 60;
	$height = 30;
	$img = imagecreate($width, $height);

	$bg_color = imagecolorallocate($img, 255, 255, 255);
	$border_color = imagecolorallocate($img, 0, 0, 0);
	imagerectangle($img, 0, 0, $width-1, $height-1, $border_color);

	$num = rand();
	$code = md5($num);
	$code_num = 5;
	$str = strtoupper(substr($code, 0,$code_num));

	$_SESSION['code'] = $str;

	for ($i=0; $i <$code_num ; $i++) { 
		$char_color = imagecolorallocate($img, rand(0,255), rand(0,255), rand(0,255));
		$char_x = $width/$code_num*$i+rand(0,5);
		$char_y = rand(0,$height/2);
		$font_size = rand(10,15);
		$angle = rand(-45,45);
		imagechar($img, $font_size, $char_x, $char_y, $str[$i], $char_color);
	}

	$disturb_point_num = 150;

	for ($i=0; $i < $disturb_point_num; $i++) { 
		$point_color = imagecolorallocate($img, rand(0,255), rand(0,255), rand(0,255));
		$point_x = rand(0,$width);
		$point_y = rand(0,$height);
		imagesetpixel($img, $point_x, $point_y, $point_color);
	}

	$disturb_line_num = 3;
	for ($i=0; $i <$disturb_line_num ; $i++) { 
		$line_color = imagecolorallocate($img, rand(0,255), rand(0,255), rand(0,255));
		$line_x1 = rand(0,$width/4);
		$line_x2 = rand($width/4*3,$width);
		$line_y1 = rand(0,$height);
		$line_y2 = rand(0,$height);
		imageline($img, $line_x1, $line_y1, $line_x2, $line_y2, $line_color);
	}

	header("Content-type:image/png");
	imagepng($img);
	imagedestroy($img);
?>