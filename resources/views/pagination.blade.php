
<h1>Pagination</h1>
<table>
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Email</td>
		<td>Designation</td>
	</tr>
@foreach($datas as $data)
<tr>
	<td>{{$data['id']}}</td>
	<td>{{$data['name']}}</td>
	<td>{{$data['email']}}</td>
	<td>{{$data['designation']}}</td>
</tr>
@endforeach
</table>
<span>
	{{$datas->links()}}
</span>












<!-- <h1>pagination</h1>
<table>
		<tr>
		<td>id</td>
		<td>name</td>
		<td>email</td>
		<td>designation</td>
	</tr>
	@foreach($datas as $data)
	<tr>
		<td>{{$data['id']}}</td>
		<td>{{$data['name']}}</td>
		<td>{{$data['email']}}</td>
		<td>{{$data['designation']}}</td>
	</tr>
	@endforeach

</table>

<span>
	{{$datas->links()}}
</span> -->