<html>
<head>
<meta charset="utf-8">
<title>文件夹扫描器02</title>
</head>

<body>
<h1>文件夹扫描器02</h1>
<?php
	$current_dir = 'd:/wamp/uploads/';
	$dir = dir($current_dir);
	
	echo "<p>Handler is $dir->handle</p>";
	echo "<p>Upload directory is $dir->path</p>";
	echo '<p>Directory Listing:</p><ul>';
	while(false !== ($file = $dir->read())) {
		if ($file != "." && $file != "..") {
			//echo "<li>$file</li>";
			echo '<a href="filedetails.php?file='.$file.'">'.$file.'</a><br/>';
		}
	}
	echo '</ul>';
	
	$dir->close();
?>
</body>
</html>