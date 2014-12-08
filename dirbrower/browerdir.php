<html>
<head>
<meta charset="utf-8">
<title>文件夹扫描器01</title>
</head>

<body>
<h1>文件夹扫描器01</h1>
<?php
	$current_dir = 'd:/wamp/uploads/';
	$dir = opendir($current_dir);
	
	echo "<p>Upload directory is $current_dir</p>";
	echo '<p>Directory Listing:</p><ul>';
	while(false !== ($file = readdir($dir))) {
		if ($file != "." && $file != "..") {
			echo "<li>$file</li>";
		}
	}
	echo '</ul>';
	
	closedir($dir);
?>
</body>
</html>