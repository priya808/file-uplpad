<h1>upload file</h1>
<form action="sszupload" method="POST" enctype="multipart/form-data">
	@csrf
	<input type="file" name="name" >
	<button type="submit">submit</button>

</form>