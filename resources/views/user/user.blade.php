<?php
$dbhandle = new mysqli('localhost','root','','user_mgt');
echo $dbhandle->connect_error;
$query="select bloodgroup,sum(donar) from donate group by bloodgroup"; 

$res =$dbhandle->query($query);

?>


<html>
<body>

<title>camp</title>
<link href="{{asset('css/user.css')}}" rel="stylesheet" type="text/css">
<h1>welcome user<h1>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
       var data = google.visualization.arrayToDataTable([
          ['bloodgroup', 'donar'],
            <?php
    while ($row=$res->fetch_assoc()) {
    	echo "['".$row['bloodgroup']."',".$row['sum(donar)']."],";
    }

         ?>
        ]);

        var options = {
          title: 'bloodgroups'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    


<div class="topnav">
		<ul class="main-nuv">
	
		<li class="active">
	<h3>
	<li><a href="{{route('logout.index')}}">Logout</a></li>|
		
		<li><a href="{{route('user.showProfile',[$user[0]->id])}}">profile</a> </li>|
		<li><a href="{{route('user.donate',[$user[0]->id])}}">request as donor</a></li> |
		<li><a href="{{route('user.faculty_search')}}">search faculty</a></li>		
	</h3>
<div id="piechart" style="width: 900px; height: 500px;"></div>
	<br>


	@foreach($user[1] as $user)
  <tr align="center">
    <tr>
      <td>Username:</td>
      <td>{{$user->name}}</td>
      
    </tr><br>
    <tr>
      <td>Blood group:</td>
      <td>{{$user->bloodgroup}}</td> 
    </tr><br>
      <tr>
      <td>Date:</td>
      <td>{{$user->date}}</td> 
    </tr><br>
    <tr>
      <td>Address:</td>
      <td>{{$user->address}}</td> 
    </tr><br>
     <tr>
      <td>Mobile Number:</td>
      <td>{{$user->tel}}</td> 
    </tr><br>
  </tr><br>
		@endforeach
</div>
</body>
</html>