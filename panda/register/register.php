<?php
include_once("connect.php");

$username = stripslashes(trim($_POST['username']));
$password = md5(trim($_POST['password']));
$email = trim($_POST['email']);
$regtime = time();

//检测用户名是否存在
$query = mysql_query("select email from tb_registers where email='$email'");
$num = mysql_num_rows($query);
if($num != 0){
	echo '<script>alert("邮箱已存在，请换个其他的邮箱");window.history.go(-1);</script>';
	exit;
}


$token = md5($username.$password.$regtime); //创建用于激活识别码
$token_exptime = time()+60*60*24;//过期时间为24小时后

$sql = "insert into `tb_registers` (`username`,`password`,`email`,`token`,`token_exptime`,`regtime`) values ('$username','$password','$email','$token','$token_exptime','$regtime')";

mysql_query($sql);

if(mysql_insert_id()){//写入成功，发邮件
	include_once("smtp.class.php");
	$smtpserver = "smtp.163.com"; 	//SMTP服务器
    $smtpserverport = 25; 			//SMTP服务器端口
    $smtpusermail = "dempsey1983@163.com"; //SMTP服务器的用户邮箱
    $smtpuser = "dempsey1983"; 		//SMTP服务器的用户帐号
    $smtppass = "wa1234#1"; 		//SMTP服务器的用户密码
    
    //这里面的一个true是表示使用身份验证,否则不使用身份验证.
    $smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); 
    $emailtype = "HTML"; //信件类型，文本:text；网页：HTML
    $smtpemailto = $email;
    $smtpemailfrom = $smtpusermail;
    $emailsubject = "用户帐号激活";
    $emailbody = "亲爱的".$username."：<br/>
    			感谢您在\"理财树\"注册了新帐号。<br/>
    			请点击链接激活您的帐号。<br/>
    			<a href='http://127.0.0.1/panda/register/active.php?verify=".$token."' target='_blank'>http://127.0.0.1/panda/register/active.php?verify=".$token."</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。<br/>如果此次激活请求非你本人所发，请忽略本邮件。<br/><p style='text-align:right'>-------- www.njtu.edu.cn 敬上</p>";
    $rs = $smtp->sendmail($smtpemailto, $smtpemailfrom, $emailsubject, $emailbody, $emailtype);
	if($rs==1){
		$msg = '恭喜您，注册成功！<br/>请登录到您的邮箱及时激活您的帐号！';	
	}else{
		$msg = $rs;	
	}
	echo $msg;
}
?>