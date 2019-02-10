<html>
<head>
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
	<title>Create | Page</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Bootstrap Core CSS -->
    <link href="http://ijeer.net/assets/author/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">  

    <!-- MetisMenu CSS -->
    <link href="http://ijeer.net/assets/author/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://ijeer.net/assets/author/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://ijeer.net/assets/author/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	

	@if(count($errors)>0)
	@foreach($errors->all() as $error)
	<div class="col-md-20 alert alert-danger" role="alert">{{$error}}

	 </div>
	@endforeach
	@endif
	<form method="post" enctype="multipart/form-data">
		{{@csrf_field()}}
		<div class="box">
		<table>
			
			<tr>
				<td>Username</td>
				<td><input type="username" placeholder="username" name="username"/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" placeholder="password" name="password"/></td>
			</tr>
			
			<tr>
				<td>Confirm Password</td>
				<td><input type="password" placeholder="confirm password" name="confirmpassword"/></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" placeholder="email" name="email"/></td>
			</tr>
			
            <tr>
				<td>Date of birth</td>
				<td><input type="date"  name="date"/></td>
			</tr>
			<tr>
			<td>Choose your gender</td>
			<td>
			<select name="gender"   required>
               <option value="">choose your gender </option>
               <option value="male"  > Male </option>
               <option value="female"  > Female </option>
              
            </select>
           </td>
			</tr>
			
            
            <tr>
			<td>image</td>
				<td><input type="file"  name="file"/></td>
			</tr>

			
			

			<tr>
				<td></td>
				<td><input type="submit" value="submit" name="submit"/></td>
			</tr>
		</table>

	</form>
	


</body>
</html>