<!DOCTYPE html>
<html>
<head>
	<title> Registration Form </title>
</head>
<body>
	<h1> Registration Form </h1>
	<form name="register" method="post" action="action_reg.php">
		<table>
			<tr>
				<td>
					Name : 
				</td>
				<td>
					<input type="txt" placeholder="ex: John kabir" name="">
				</td>
			</tr>
			<tr>
				<td>
					Username : 
				</td>
				<td>
					<input type="Username" placeholder="ex: john" name="un">
				</td>
			</tr>
			<tr>
				<td>
					Email : 
				</td>
				<td>
					<input type="Email" placeholder="john@exapmle.com" name="">
				</td>
			</tr>
			<tr>
				<td>
					Gender : 
				</td>
				<td>
					<input type="radio" name="Gender"> Male
					<input type="radio" name="Gender"> Female
					<input type="radio" name="Gender"> Other
				</td>
			</tr>
			<tr>
				<td>
					Date of Birth : 
				</td>
				<td>
					<input type="date" name="">
				</td>
			</tr>
			<tr>
				<td>
					Phone No : 
				</td>
				<td>
					<input type="Phone" placeholder="01*********" name="">
				</td>
			</tr>
			<tr>
				<td>
					Password : 
				</td>
				<td>
					<input type="txt" name="pa">
				</td>
			</tr>
			<tr>
				<td>
					Confirm Password : 
					
				</td>
				<td>
					<input type="txt" name="">
				</td>
			</tr>
			<tr>
					<td>
						<input type="Reset" value="Cancel" name="reset">
					</td>
					<td>
						<input type="Submit" value="Submit" name="submit">
					</td>
				</tr>

		</table>
	</form>
</body>
</html>