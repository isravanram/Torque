<?php 


	$con = mysqli_connect("localhost", "root", "", "torque");
	
	if (!$con) {
		echo "mysqli Error :" . mysqli_connect_errno();
		exit();
	}



?>