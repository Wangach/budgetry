<?php 
//database connection
$dbcon = mysqli_connect("localhost", "root", "", "budget");
if (!$dbcon) {
	echo "The Connection Is Not Successful! Here's The Problem:" . mysqli_errno($db_con);
}
 ?>