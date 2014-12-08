<?php
	$height = 200;
	$width = 200;
	//$im = imagecreatetruecolor($width, $height);
	$im = imagecreatefromjpeg('019.jpg');
	$white = imagecolorallocate($im, 255, 255, 255);
	$blue = imagecolorallocate($im, 0, 0, 255);
	
	imagefill($im, 0, 0, $blue);
	//imageline($im, 0, 0, $width, $height, $white);
	imagestring($im, 5, 650, 450, 'Bei Jing', $white);
	
	Header('Content-type: image/png');
	imagepng($im);
	
	imagedestroy($im);
?>