<?php

		$server="localhost";
		$unm="root";
		$pwd="";
		$db="hotel";

		$con=mysql_connect($server,$unm,$pwd);
		mysql_select_db($db,$con);

		// Check connection
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
?>