<html>
	<head>
		<title></title>
	</head>
	<body>
		<a href="index.php" >Display</a><br><br>
		<a href="index.php" >Search</a><br><br>
		<a href="index.php" >Edit</a><br><br>
		<p>You Can Add Movies Here</p>
		<form method="post" action="index.php">
			<table>
				<tr>
					<td>Enter Title:</td>
					<td><input type="text" name="title" required ></td>
				</tr>
				<tr>
					<td>Enter Genre:</td>
					<td><input type="text" name="genre"></td>
				</tr>
				<tr>
					<td>Enter Release Year:</td>
					<td><input type="text" name="release_year" ></td>
				</tr>
				<tr>
					<td>Enter Cast:</td>
					<td><input type="text" name="cast" ></td>
				</tr>
				<tr>
					<td><input type="submit" value="Add" name="save"></td>
				</tr>
			</table>
		</form>
	</body>
</html> 