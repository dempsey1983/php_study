<html>
<head>
	<title>Book-O-Rama - New Book Entry Results</title>
</head>
<body>
    <h1>Book-O-Rama - New Book Entry Results.</h1>  
    <?php
		//create short variable names
		$isbn=$_POST['isbn'];
		$author=$_POST['author'];
		$title=$_POST['title'];
		$price=$_POST['price'];
		
		if(!$isbn || !$author || !$title || !$price) {
			echo "You have not entered all the required details.<br/>".
			     "Please go back and try again.";
			exit;
		}
		
		if (!get_magic_quotes_gpc()) {
			$isbn = addslashes($isbn);
			$author = addslashes($author);
			$title = addslashes($title);
			$price = addslashes($price);
		}
		
		$db = new mysqli('127.0.0.1', 'bookmgr', 'wa1234#1', 'books');
		
		if (mysqli_connect_error()) {
			echo "Error: Could not connect to database. Please try again latter.";
			exit;
		}
		echo "Success: connect to database.<br/>";
		
		$query = "insert into books values
				 ('".$isbn."', '".$author."', '".$title."', '".$price."')";
		echo $query."<br/>";
		
		$result = $db->query($query);
		
		if($result) {
			echo $db->affected_rows." book insert into database.";
		} else {
			echo "An error has occurred. The item was not added.";
		}

		$db->close();
	?>
</body>
</html>