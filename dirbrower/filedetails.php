<html>
<head>
<meta charset="utf-8">
<title>文件夹扫描器04</title>
</head>

<body>
<h1>文件夹扫描器04</h1>
<?php
	$dir = 'd:/wamp/uploads/';
	$file = basename($file);
	echo '<h1>Details of file: '.$file.'</h1>';
	
	
	echo '<h2>File data</h2>';
	echo 'File last accessed: '.date('j F Y H:i', fileatime($file)).'<br/>';
	echo 'File last modified: '.date('j F Y H:i', filemtime($file)).'<br/>';
	
	//$user = posix_getpwuid(fileowner($file));
	//echo 'File owner: '.$user['name'].'<br/>';
	
	//$group = posix_getgrgid(filegroup($file));
	//echo 'File owner: '.$group['name'].'<br/>';
	
	
	echo 'File permissions: '.decoct(fileperms($file)).'<br/>';
	echo 'File type: '.filetype($file).'<br/>';
	echo 'File size: '.filesize($file).'<br/>';
	 
?>
</body>
</html>