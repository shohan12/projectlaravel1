<html>
<head>
	<link href="{{asset('css/edit.css')}}" rel="stylesheet" type="text/css">
	<title>Delete|Page</title>
</head>
<body>
	<h1>Delete User</h1>
	<h3>
		<a href="{{route('logout.index')}}">Logout</a> |
		<a href="{{route('user.show',[$user->id])}}">Back</a> 
		
	
	</h3>

	<table>

		<tr>
			<td>Username:</td>
			<td>{{$user->username}}</td>
			
		</tr>

		
		<tr>
			<td>Password:</td>
			<td>{{$user->password}}</td>
		</tr>
		<tr>
			<td>Type:</td>
			<td>{{$user->type}}</td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td>{{$user->gender}}</td>
		</tr>
		<tr>
			<td>Email:</td>
			<td>{{$user->email}}</td>
		</tr>
	</table>

	<form method="post">
		{{@csrf_field()}}
		<input type="hidden" value="{{$user->id}}" name="uid">
		<h2>Are You Sure ??</h2>
		<input type="submit" value="Confirm"/>
	</form>
</body>
</html>