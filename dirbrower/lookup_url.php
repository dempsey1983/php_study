<html>
<head>
<meta charset="utf-8">
<title>Stock Ali From Baidu</title>
</head>

<body>
<h1>Stock Ali From Baidu</h1>
<?php
	$symbol = 'baidu';
	echo '<h1>Stock quote for '.$symbol.'</h1>';
	$url = 'http://stockpage.10jqka.com.cn/300114/';
	if (!($contents = file_get_contents($url))) {
		//die('Failure to open '.$url);
		echo 'Failure to open '.$url;
		exit;
	}
	echo 'Success to open '.$url.'<br/>';
	//echo $contents;
	//list($symbol, $quote, $date, $time) = explode(',', $contents);
	//$date = trim($date, '"');
	//$time = trim($time, '"');
	
	echo '<p>'.$symbol.' was last sold at: '.$quote.'</p>';
	echo '<p>Quote current as of '.$data.' at '.$time.'</p>';
	
	echo '<p>This infomation retrieved from <br/><a href="'.$url.'">'.$url.'</a></p>';
?>
</body>
</html>