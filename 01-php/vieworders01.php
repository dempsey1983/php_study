<?php
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
<head>
	<title>Bob's Auto Parts - Customer Orders</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Customer Orders</h2>
<?php 
	$orders = file("$DOCUMENT_ROOT/../orders/orders.txt");
	$number_of_ofders = count($orders);
	if ($number_of_ofders ==0 ) {
		echo "<p><strong>No orders pending.Please try again later.</strong></p>";
		exit;
	}
	for($i = 0; $i < $number_of_ofders; $i++) {
		echo $orders[$i]."<br/>";
	}
?>
</body>
</html>