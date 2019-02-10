<html>
<head>
	<link href="{{asset('css/donate.css')}}" rel="stylesheet" type="text/css">
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
	<h1>Donar Registration</h1>

	@if(count($errors)>0)
	@foreach($errors->all() as $error)
	<div class="col-md-20 alert alert-danger">{{$error}} </div>
	@endforeach
	@endif
	<form method="post" enctype="multipart/form-data">
		{{@csrf_field()}}
		<div class="box">

		<table>
			<tr>
				<td>name</td>
				<td><input type="name" placeholder="name" name="name"/></td>
			</tr>
			<tr>
			<td>bloodgroup</td>
			<td>
			<select name='bloodgroup' required>
			 <option value="">bloodgroup </option>	
             <option value="A+">A+</option>
             <option value="A-">A-</option>
             <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
             <option value="O-">O-</option>
             <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
           </select>
           </td>
			<tr>
				<td>Donate date</td>
				<td><input type="date" placeholder="date" name="date"/></td>

			</tr>
				<tr>
				<td>Donation address</td>
				<td><input type="address" placeholder="address" name="address"/></td>
				</tr>
				<tr>
				<td>Mobile number</td>
				<td><input type="tel"  Placeholde="Mobile number"name="tel"
                  ></td>
               
			</tr>
               <tr>
				<td></td>
				<td><input type="submit" value="submit" name="submit"/></td>
			</tr>
		</table>

	</form>
	


</body>
</html>