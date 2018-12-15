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
			<h2 class='heading'>Batch Register</h2>
		</div>
		<div align="center">
			<form action="addbatch.php" method="POST">
				<table class="tableform">
					<tr>
						<td>From Date:</td>
						<td><input type="date" name="fromdata" required/></td>
					</tr>
					<tr>
						<td>To Date:</td>
						<td><input type="date" name="to" required/></td>
					</tr>
					<tr>
						<td>Time:</td>
						<td><input type="time" name="classtimes" required/></td>
					</tr>
					<tr>
						<td>Seats:</td>
						<td><input type="number" name="seats" required/></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email" required/></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="text" name="pass" required/></td>
					</tr>
					<tr>
						<td>Student or Teacher:</td>
						<td>
							<input type = "radio" name = "role" value = "student" required> Student
        				 	<input type = "radio" name = "role" value = "teacher" required> Teacher
     					</td>
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