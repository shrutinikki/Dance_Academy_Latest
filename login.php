<html>
	<head>
		<title>DANCE ACADEMY - Login In</title>
		<link rel="stylesheet" type="text/css" href="display.css">
	</head>
	<body>
		<?php
			include 'menus.inc.php';
		?>
		<div align="center">
			<h2 class='heading'>Login In</h2>
		</div>
		<div align="center">
			<form action="logincheck.php" method="POST">
				<table class="tableform">
					<tr>
						<td>Email ID:</td>
						<td><input type="text" name="email" required/></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="text" name="pass" required/></td>
					</tr>
					<tr>
						<td><input type="submit" value="Log IN"/></td>
						<td><input type="reset" value="Reset"/></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>