<html>
<head>
<link href="{{asset('css/style3.css')}}" rel="stylesheet" type="text/css">
	<title>Login | Page</title>
	
	

</head>
<body>
	<form method="post">
		{{@csrf_field()}}
		<div class="login-box">
    <img src="/css/avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form>
            <p>Username</p>
            <input type="username" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="Login" value="Login">
            <a href="{{route('user.create')}}">Register here</a> <br>   
            <a href="{{route('login.forgetp')}}">forget password</a>  
            </form>
 
		

	</form>

	<p>{{session('message')}}</p>


</body>
</html>








   