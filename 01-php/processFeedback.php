<?php
//create short variable names;
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

//清除多余的空格
$name = trim($name);
$email = trim($email);
$feedback = trim($feedback);

//set up some static information
$toaddress = "dengping.niu@163.com";
$subject = "Feedback from website.";
$mailcontent = "Customer name: ".$name."\n".
			   "Customer email: ".$email."\n".
			   "Customer comments:\n".$feedback."\n";
$fromaddress = "From:dempsey1983@163.com";

//send mail
//mail($toaddress, $subject, $mailcontent, $fromaddress);
?>
<html>
<head>
	<title>Bob's Auto Parts - Feedback Submitted</title>
</head>
<body>
	<h1>Feedback submitted</h1>
	<p>Your feedback has been sent.</p>
	<p><?php echo nl2br($mailcontent)?></p>
</body>
</html>