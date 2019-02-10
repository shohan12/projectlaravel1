<?php
$dbhandle = new mysqli('localhost','root','','user_mgt');
echo $dbhandle->connect_error;
$query="select type,sum(tp) from users group by type"; 

$res =$dbhandle->query($query);

?>

<html>
<head>
	<title>Home|Page</title>
	<link href="{{asset('css/home.css')}}" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
       var data = google.visualization.arrayToDataTable([
          ['type', 'tp'],
            <?php
    while ($row=$res->fetch_assoc()) {
    	echo "['".$row['type']."',".$row['sum(tp)']."],";
    }

         ?>
        ]);

        var options = {
          title: 'type'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</head>
<body>
	<header>
	<h1></h1>
	<div class="row">
		<ul class="main-nuv">
	
		<li class="active">
	    <a href="{{route('home.index')}}">Home</a></li> |
		<li><a href="{{route('logout.index')}}">Logout</a></li> |
		
		<li><a href="{{route('user.user_search')}}"> search user</a></li>
	</ul>
</div>
<br>
<br>
<br>
<br>
<div id="piechart" style="width: 1500px; height: 600px;"></div>
<style>
td{

color: white;	
}
a{
	color: white;
}
th{
	color: skyblue;
	padding: 30px 125px;
}
td{
text-align: center;	

}
</style>
<br>
	<table border="1"align="center">
		<tr>
			<th>Username</th>
			<th>Gender</th>
			<th>Type</th>
			<th>Email</th>
			<th>Date</th>
		</tr>

		@foreach($users as $user)
		<tr>
			
			<td><a href="{{route('user.show',[$user->id])}}">{{$user->username}}</a></td>
			<td>{{$user->gender}}</td>
			<td>{{$user->type}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->date}}</td>

		</tr>
		@endforeach
	</table>
	</header>
</body>
</html>