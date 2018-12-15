<html>
	<head>
		<title>DANCE ACADEMY - Inquire</title>
		<link rel="stylesheet" type="text/css" href="display.css">
	</head>
	<body>
		<?php
			include 'menus.inc.php';
		?>
		<div align="center">
			<h2 class='heading'>Inquire Form about the dances and classes availablity:</h2>
		</div>
		<div align="center">
			<form action="inquiresubmition.php" method="POST">
				<table class="tableform">
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name" required/></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email" requried/></td>
					</tr>
					<tr>
						<td>Dance Type:</td>
						<td>
							<select name="dancetype" required>
								<option value="jazz">Jazz</option>
								<option value="salsa">Salsa</option>
								<option value="ballet">Ballet</option>
								<option value="bharatanatyam">Bharatanatyam</option>
								<option value="odissi">Odissi</option>
								<option value="kathak">Kathak</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Classes:</td>
						<td>
							<select name="classes" required>
								<option value="7:15-8:45">7:15 am to 8:45 am</option>
								<option value="9:00-10:30">9:00 am to 10:30 am</option>
								<option value="11:00-12:30">11:00 am to 12:30 pm</option>
								<option value="16:00-17:30">4:00 pm to 5:30 pm</option>
								<option value="17:45-19:30">5:45 pm to 7:15 pm</option>
								<option value="19:30-21:00">7:30 pm to 9:00 pm</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Other Questions</td>
						<td><textarea name="questions"></textarea></td>
					</tr>
					<tr>
						<td><input type="submit" name="Send Inquire"/></td>
						<td><input type="reset" value="reset"/></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>