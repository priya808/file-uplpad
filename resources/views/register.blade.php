<!DOCTYPE html>
<html>
	<head>
		<title>register</title>
	</head>
	<body>
		<form action="" method="POST">
			@csrf
			<lavel for="validationCustom01">Name</lavel>
			<input type="text" name="name" required>
			@if($errors->has('name'))
			
			@endif



			<lavel for="validationCustom02">phone</lavel>
			<input type="phone" name="phone" required>
			@if($errors->has('phone'))
			@endif
			


			<lavel for="validationCustom03">Email</lavel>
			<input type="email" name="email" required>
			@if($errors->has('email'))
			
			@endif


			<lavel for="validationCustom04">Address</lavel>
			<input type="text" name="Address" required>
			@if($errors->has('Address'))
			
		
			@endif


			<lavel for="validationCustom05">Password</lavel>
			<input type="password" name="password" required>
			@if($errors->has('password'))
		
			@endif



			<lavel for="validationCustom05">confirm password</lavel>
			<input type="Password" name="confirm password" required>
			@if($errors->has('confirm password'))
			
			
			@endif

			<input type="submit">




		</form>
	</body>
</html>