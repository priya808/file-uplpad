
<!DOCTYPE html>
<html>
	<head>
		<title>update</title>
	</head>
	<body>
		<h2>update</h2>
		<form action="/update" method="POST">
			@csrf
			<input type="hidden" name="id" value="{{$datakey['id']}}"><br><br>
			Name : <input type="text" name="name" value="{{$datakey['name']}}"><br><br>
			Email : <input type="email" name="email" value="{{$datakey['email']}}"><br><br>
			Designation : <input type="text" name="designation" value="{{$datakey['designation']}}"><br><br>
			<input type="submit">
		</form>
	</body>
</html>

