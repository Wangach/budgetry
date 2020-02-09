<?php 
include 'db.php';
$output = '';

//Once The Submit button is clicked
if (isset($_POST['register'])) {
	//Get The Type Of Cash
	$aina = mysqli_real_escape_string($dbcon, $_POST['direct']);
	//Get The Values And Description
	$descr = mysqli_real_escape_string($dbcon, $_POST['maelezo']);
	$cash = mysqli_real_escape_string($dbcon, $_POST['kiwango']);

	//We Fill The Data In THe Database Depending on the type eof cash
	switch ($aina) {
		case 'earning':
			//Using the values gotten from the query above
			$earnQuery = "INSERT INTO cash(id, description, credit, debit, amount, cashid) VALUES()"
			break;
			case 'spending':
			
			break;
		
		default:
			
			break;
	}
}
 ?>