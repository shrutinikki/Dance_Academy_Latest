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
			<h2 class='heading'>Register</h2>
		</div>
		<div align="center">
			<form action="adduser.php" method="POST">
				<table class="tableform">
					<tr>
						<td>Name:</td>
						<td><input type="text" name="uname" required/></td>
					</tr>
					<tr>
						<td>Join Date:</td>
						<td><input type="date" name="jdate" required/></td>
					</tr>
					<tr>
						<td>Class Time:</td>
						<td><input type="time" name="classtime" required/></td>
					</tr>
					<tr>
						<td>Dance Type:</td>
						<td><input type="text" name="dancetype" required/></td>
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