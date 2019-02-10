<html>
<head>
	<link href="{{asset('css/edit.css')}}" rel="stylesheet" type="text/css">
	<title>Edit | Page</title>
</head>
<body>
	<h1>Edit Your Profile</h1>
	@if(count($errors)>0)
	@foreach($errors->all() as $error)
	<div class="col-md-20 alert alert-danger">{{$error}} </div>
	@endforeach
	@endif
	<form method="post" value="<%=id %>">
		{{@csrf_field()}}
		
		<table>
			
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{$user->password}}"/></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="password"  name="confirmpassword" value="{{$user->confirmpassword}}"/></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email"  name="email" value="{{$user->email}}"/></td>
			</tr>
			<tr>
				<td>Date of birth</td>
				<td><input type="date"  name="date" value="{{$user->date}}"/></td>
			</tr>
			
			


			<tr>
				<td></td>
				<td><input type="submit" value="Update"/></td>
			</tr>
		</table>
     
	</form>


</body>
</html>