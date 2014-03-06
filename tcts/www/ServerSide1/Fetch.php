<?php

if($_POST)
	{	
			$LatT = $_POST['LatT'];
			$LagT = $_POST['LagT'];
			$LatF = $_POST['LatF'];
			$LagF = $_POST['LagF'];
			
			$result= array("#FF0000","#FFFF00","#00FF00","#0101DF");
			$randomNumber=rand(0,3);
			echo $result[$randomNumber];
	}
?>