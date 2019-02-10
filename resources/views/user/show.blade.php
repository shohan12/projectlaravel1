	
<html>
<head>
	<link href="{{asset('css/profile.css')}}" rel="stylesheet" type="text/css">
	<title>Show|Page</title>
</head>
<body>
	<h1>Show Details</h1>
	<div class="topnov">
		<ul class="main-nuv">
	
		<li class="active">
	<h3>
		<li><a href="{{route('logout.index')}}">Logout</a></li> |
		<li><a href="{{route('user.edit',[$user->id])}}">Edit User</a></li> |
		<li><a href="{{route('user.delete',[$user->id])}}">Delete User</a></li>
		
	</h3>
	<br>
	<br>
	<br>
			
		<img align=" center" src="/public/{{$user->file}}" style="width:150px; height:150px; align-items: center;">
		<br>
		<br>
		<table align="center">
		<tr align="center">
			<td>Username:</td>
			<td>{{$user->username}}</td>
			
		</tr>

		<tr>
			<td>Password:</td>
			<td>{{$user->password}}</td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td>{{$user->gender}}</td>
		</tr>
		<tr>
			<td>Date of birth:</td>
			<td>{{$user->date}}</td>
		</tr>
		<tr>
			<td>Email:</td>
			<td>{{$user->email}}</td>
		</tr>
	</table>
<div>
</body>
</html>