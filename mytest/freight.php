<html>
	<body>
		<table border = "0" cellpadding = "3">
			<tr>
				<td bgcolor = "#cccccc" align = "center">Distance</td>
				<td bgcolor = "#cccccc" align = "center">Cost</td>
			</tr>
			<?php
/*
			$distance = 50;
			while($distance <= 250) {
				echo "<tr>
					  	<td aligin=\"right\">".$distance."</td>
					  	<td aligin=\"right\">".($distance/10.0)."</td>
					  </tr>";
				$distance += 50;
			}
*/
			for($distance = 50; $distance <= 250; $distance += 50) {
				echo "<tr>
					  	<td aligin=\"right\">".$distance."</td>
					  	<td aligin=\"right\">".($distance/10.0)."</td>
					  </tr>";
			}
			?>
		</table>
	</body>
</html>

