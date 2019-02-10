<html>
<head>
	<link href="{{asset('css/forget1.css')}}" rel="stylesheet" type="text/css">
	<title>reset password | Page</title>
</head>
<body>
	<h1>
		<font color="orange">Edit User</font></h1>
	@if(count($errors)>0)
	@foreach($errors->all() as $error)
	<div class="col-md-20 alert alert-danger">{{$error}} </div>
	@endforeach
	@endif
	<form method="post" value="<%=id %>">
		{{@csrf_field()}}
		<div class="box">
		
		<table>

			
			<tr>
				<td>Password</td>
				<td><input type="password" placeholder="password" name="password" /></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="password" placeholder="confirm password" name="confirmpassword"/></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Update"/></td>
			</tr>
		</table>
     
	</form>


</body>
</html>