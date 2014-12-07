<html>
<head>
	<meta charset="utf-8">
	<title>理财树：账户管理</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<style type="text/css">
		.demo{width:400px; margin:40px auto 0 auto; min-height:250px;}
		.demo p{line-height:30px; padding:4px}
		.input{width:180px; height:20px; padding:1px; line-height:20px; border:1px solid #999}
		.btn{position: relative;overflow: hidden;display:inline-block;*display:inline;padding:4px 20px 4px;font-size:14px;line-height:18px;*line-height:20px;color:#fff;text-align:center;vertical-align:middle;cursor:pointer;background-color:#5bb75b;border:1px solid #cccccc;border-color:#e6e6e6 #e6e6e6 #bfbfbf;border-bottom-color:#b3b3b3;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px; margin-left:48px}
	</style>
</head>
<body>
<?php 
	session_start();
	echo '<h1>理财树：账户管理</h1>';
	if (!isset($_SESSION['valid_user'])) {
		echo '<p>You are not logged in.</p>';
		echo '<a href="logout.php">Log out</a>';
	} else {
		echo '<p>You are logged in as '.$_SESSION['valid_user'].'</p>';
		echo '<a href="login.php">Log in</a>';
	}
?>
<h2>理财树：账户管理</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
<div>
	<input type="hidden" name="MAX_FILE_SIZE" value="4194304"/>
	<label for="userfile">请上传你的身份证复印件</label>
	<input type="file" name="idFile" id="idFile"/>
	<input type="submit" value="上传"/>
</div>
</form>
</body>
</html>