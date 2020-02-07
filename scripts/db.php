<?php 
//database connection
$db_con = mysqli_connect("localhost", "root", "", "budget");
if (!$db_con) {
	echo "The Connection Is Not Successful! Here's The Problem:" . mysqli_errno($db_con);
}
 ?>