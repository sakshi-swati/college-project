<?php

$conn =@mysqli_connect("localhost","root","","zoyozo_db");
	if(!$conn)
	{
		echo "Connection failed".mysqli_error($conn);
		exit();
	}
?>
