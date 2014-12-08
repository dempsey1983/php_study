<html>
<head>
<meta charset="utf-8">
<title>文件夹扫描器03</title>
</head>

<body>
<h1>文件夹扫描器03</h1>
<?php
	$dir = 'd:/wamp/uploads/';
	$file1 = scandir($dir);
	$file2 = scandir($dir, 1);
	
	echo "<p>Upload directory is $dir->path</p>";
	echo '<p>Directory Listingin alphabetical order, ascending:</p><ul>';
	foreach ($file1 as $file) {
		if ($file != "." && $file != "..") {
			echo "<li>$file</li>";
		}
	}
	echo '</ul>';
	
	echo '<p>Directory Listingin alphabetical order, descending:</p><ul>';
	foreach ($file2 as $file) {
		if ($file != "." && $file != "..") {
			echo "<li>$file</li>";
		}
	}
	echo '</ul>';
?>
</body>
</html>