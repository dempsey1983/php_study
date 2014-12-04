<?php
	for ($i = 1; $i <= 44; $i++) {
		$pictures[$i - 1] = "chinaz".$i.".png";
	}
	shuffle($pictures);
?>
<html>
<head>
	<title>Bob's Auto Parts</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<div align="center">
		<table width = 100%>
			<tr>
			<?php 
				for ($i = 0; $i < 3; $i++) {
					echo "<td align=\"center\"><img src=\"./pic/";
					echo $pictures[$i];
					echo "\"/></td>";
				}
			?>
		</table>
	</div>
	<br/>
	<div align="center">
		<table width = 100%>
			<tr>
			<?php 
				for ($i = 3; $i < 6; $i++) {
					echo "<td align=\"center\"><img src=\"./pic/";
					echo $pictures[$i];
					echo "\"/></td>";
				}
			?>
		</table>
	</div>
	<br/>
	<div align="center">
		<table width = 100%>
			<tr>
			<?php 
				for ($i = 6; $i < 9; $i++) {
					echo "<td align=\"center\"><img src=\"./pic/";
					echo $pictures[$i];
					echo "\"/></td>";
				}
			?>
		</table>
	</div>
</body>
</html>