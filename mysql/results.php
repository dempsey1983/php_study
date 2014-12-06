<html>
<head>
	<title>Book-O-Roma Search Results</title>
</head>
<body>
	<h1>Book-O-Roma Search Results</h1>
	<?php
		$searchtype = $_POST["searchtype"];
		$searchterm = trim($_POST["searchterm"]);
		if(!$searchtype || !$searchterm) {
			echo "You have not enter search details. Please go back and try again.";
			exit;
		}
		
		if(!get_magic_quotes_gpc()) {
			$searchtype = addslashes($searchtype);
			$searchterm = addslashes($searchterm);
		}
			
		$db = new mysqli('127.0.0.1', 'bookmgr', 'wa1234#1', 'books');
		if(mysqli_connect_errno()) {
			echo 'Error: Could not connect to database. Please try again later.';
			exit;
		}
		
		echo 'Success: connect to database.';
		$query = "select * from books where ".$searchtype." like '%".$searchterm."%'";
		$result = $db->query($query);
		$num_result = $result->num_rows;
		echo "<p>Number of books found: ".$num_result."</p>";
		
		for($i = 0; $i < $num_result; $i++) {
			$row = $result->fetch_assoc();
			echo "<p><strong>".($i+1).". Title: ";
			echo htmlspecialchars(stripslashes($row['title']));
			echo "</strong></p>";
		}

		$result->free();
		$db->close();
	?>
</body>
</html>
