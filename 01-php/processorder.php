<?php 
	//常量定义
	define('TIREPRICE', 100);
	define('OILPRICE', 10);
	define('SPARKPRICE', 4);
	//变量定义
	$tireqty = $_POST['tireqty'];
	$oilqty = $_POST['oilqty'];
	$sparkqty = $_POST['sparkqty'];
	$find = $_POST['find'];
	$address = $_POST['address'];

	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
<head>
	<title>Bob's Auto Parts - Order Results</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Order Results</h2>
	<?php 
		echo '<p>Order Results</p>';
		$date = date('H:i, jS F Y');
		echo "<P>Order processed at ".$date."</p>";
/*		
		echo '<p>Price is as follows: </p>';
		echo "TirePrice: ".TIREPRICE. '<br/>';
		echo "OilPrice: ".OILPRICE. '<br/>';
		echo "SparkPrice: ".SPARKPRICE. '<br/>';
		echo '<br/>';
*/		
		$totalqty = 0;
		$totalqty = $tireqty + $oilqty + $sparkqty;
		echo "Items ordered: ".$totalqty."<br/>";
		
		if ($totalqty == 0) {
			echo "You did not not order anything on the previous page!<br/>";
			exit;
		} else {
			echo '<p>Your order is as follows: </p>';
			if ($tireqty > 0) {
				echo $tireqty. ' tires<br/>';
			}
			if ($oilqty > 0) {
				echo $oilqty. ' bottles of oil<br/>';
			}
			if ($sparkqty > 0) {
				echo $sparkqty. ' spark plugs<br/>';
			}
		}
		$totalemount = 0.00;
		$taxrate = 0.1; //local sales tax is 10%
		$discount = 0.0; //Discount
		if ($tireqty < 10) {
			$discount = 0.0;
		} else if (($tireqty >= 10) && ($tireqty <= 49)) {
			$discount = 0.05;
		} else if (($tireqty >= 50) && ($tireqty <= 99)) {
			$discount = 0.1;
		} else if ($tireqty >= 100) {
			$discount = 0.15;
		} 
		$totalemount = TIREPRICE*$tireqty*(1 - $discount) + OILPRICE*$oilqty + SPARKPRICE*$sparkqty;
		echo "subTotal incude tax: $".number_format($totalemount, 2)."<br/>";
		
		$totalemount = $totalemount *(1 + $taxrate);
		$totalemount = number_format($totalemount, 2);
		
		echo "<p>Total incude tax: $".$totalemount."</p>";
		echo "<p>Address to ship is: ".$address."</P>";
		
		switch($find) {
			case "a":
				echo "<p>Regular customer.</p>";
				break;
			case "b":
				echo "<p>Customer referred by TV advert.</p>";
				break;
			case "c":
				echo "<p>Customer referred by phone directory.</p>";
				break;
			case "d":
				echo "<p>Customer referred by word of mouth.</p>";
				break;
			default:
				echo "<p>We do not know how this customer found us.</p>";
				break;
		}
		
		//文件操作
		$outputstring = $date."\t".$tireqty." tires\t".$oilqty." oil\t".$sparkqty." spark plugs\t\$".
						$totalemount."\t".$address."\n";
		@ $fp = fopen("$DOCUMENT_ROOT/../orders/orders.txt", "ab");
		flock($fp, LOCK_EX);
		if (!$fp) {
			echo "<p><strong> Your order could not be processed at this time. Please try again later.</strong></p></body></html>";
			exit;
		}
		fwrite($fp, $outputstring, strlen($outputstring));
		flock($fp, LOCK_UN);
		fclose($fp);
		echo "<p>Order writen.</p>";
	?>
</body>
</html>