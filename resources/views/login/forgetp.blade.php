<html>
<head>
    <link href="{{asset('css/forget.css')}}" rel="stylesheet" type="text/css">

    <title>reset | Page</title>
    
    

</head>
<body>
    <form method="post">
        {{@csrf_field()}}
    
        <h1><font color="orange"> Reset Your Password</font></h1>
        <div class="box">
            <form>
            <p>
                <font size="6" face="arial" color="Red">Username</font></p>
            <input type="username" name="username" placeholder="Enter Username">
            
            <input type="submit" name="Login" value="submit">
              
            </form>
 
        

    </form>

   <p>{{session('message')}}</p>


</body>
</html>








   