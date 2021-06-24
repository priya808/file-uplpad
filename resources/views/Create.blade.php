<!DOCTYPE html>
<html>
	<head>
		<title>create</title>
	</head>
	<body>
		<form action="" method="POST">
			@csrf

			Name: <input type="text" name="name"/>
			Email: <input type="email" name="email"/>
			Designation:<input type="text" name="designation"/>
			<input type="submit"/>
		</form>
	</body>
</html>