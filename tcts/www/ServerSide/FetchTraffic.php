<?php
header('Access-Control-Allow-Origin: *');
//if($_POST)
//	{	
		class vehicle{
       			public $id = "";
       			public $lat  = 0.0;
       			public $lng = 0.0;
       			public $speed = 0;
   		}
		$time = $_POST['time'];	
		$con = mysqli_connect("localhost","lolism_admin","GoogleMap789","lolism_tcts");
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else{
		  //echo "Connected";
		}
		$result = mysqli_query($con,"SELECT * FROM tracks_recent Where time(gps_datetime) = time('".$time."')");
		$data = array();
		$i = 0;
		while($row = mysqli_fetch_array($result))
		  {
			  $v = new vehicle();
			  $v->id= $row['veh_id'];
			  $v->lat= $row['lat'];
			  $v->lng= $row['lng'];
			  $v->speed= $row['speed'];
		  	  $data[$i] = $v;
   			  $i++;
   		
		  
		  //echo $row['veh_id'] . " " . $row['lat'] . " " . $row['lng'];
		  //echo "<br>";
		  }
		  
		echo json_encode($data, JSON_FORCE_OBJECT);
		mysqli_close($con);
		
//	}
?>