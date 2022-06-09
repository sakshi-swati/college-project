<?php

$conn =@mysqli_connect("localhost","root","","chhatralay");
	if(!$conn)
	{
		echo "Connection failed".mysqli_error($conn);
		exit();
	}
?>
