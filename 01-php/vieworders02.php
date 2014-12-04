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
	echo "<table border=\"1\">\n";
	echo "<tr>
			<th bgcolor=\"#CCCCFF\">Order Date</th>
			<th bgcolor=\"#CCCCFF\">Tires</th>
			<th bgcolor=\"#CCCCFF\">Oil</th>
			<th bgcolor=\"#CCCCFF\">Spark Plugs</th>
			<th bgcolor=\"#CCCCFF\">Total</th>
			<th bgcolor=\"#CCCCFF\">Address</th>
		  </tr>";
/*
	for($i = 0; $i < $number_of_ofders; $i++) {
		//echo $orders[$i]."<br/>";
		//split up each line
		$line = explode("\t", $orders[$i]);
		//keep only the number of items orderd
		$line[1] = intval($line[1]);
		$line[2] = intval($line[2]);
		$line[3] = intval($line[3]);
		//output each order.
		echo "<tr>
				<td>".$line[0]."</td>
				<td align=\"center\">".$line[1]."</td>
				<td align=\"center\">".$line[2]."</td>
				<td align=\"center\">".$line[3]."</td>
				<td>".$line[4]."</td>
				<td>".$line[5]."</td>
			</tr>";
	}
*/
	$each = end($orders);
	while($each) {
		//split up each line
		$line = explode("\t", $each);
		//keep only the number of items orderd
		$line[1] = intval($line[1]);
		$line[2] = intval($line[2]);
		$line[3] = intval($line[3]);
		//output each order.
		echo "<tr>
				<td>".$line[0]."</td>
				<td align=\"center\">".$line[1]."</td>
				<td align=\"center\">".$line[2]."</td>
				<td align=\"center\">".$line[3]."</td>
				<td>".$line[4]."</td>
				<td>".$line[5]."</td>
			</tr>";
		$each = prev($orders);
	}
?>
</body>
</html>