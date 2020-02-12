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
			//XSince in this case we are earning, the credit value should be +
			$moneyIn = $cash;
			$moneyOut = 0;
			$totals = $moneyIn + $moneyOut;
			//Generate A Random Value
			$random = ["a", "b", "c", "d", "e", "F", "1", "2", "3", "5", "6"];
			$holder = "";

			for ($i=0; $i < 8; $i++) {
				$val1 = rand(0, 9);
				$genVal = $random[$val1];
				$holder = $holder.$genVal;
			}
			//Using the values gotten from the query above
			$earnQuery = "INSERT INTO cash(id, description, credit, debit, amount, cashid) VALUES('', '$descr', '$moneyIn', '$moneyOut', '$totals', '$holder')";
			$confirmation = mysqli_query($dbcon, $earnQuery);
			if ($confirmation) {
				$output = "<script";
				$output .= "alert('The Transaction Has Been Recorded Successfully');";
				$output .= "</script>";

				echo $output;
			}else{
				$output = "<script";
				$output .= "alert('Sorry! There Has Been An Error!');";
				$output .= "</script>";

				echo $output;
			}
			break;
			case 'spending':
				//XSince in this case we are earning, the credit value should be +
				$moneyIn = 0;
				$moneyOut = $cash;
				$totals = $moneyIn +- $moneyOut;
				//Generate A Random Value
				$random = ["a", "b", "c", "d", "e", "F", "1", "2", "3", "5", "6"];
				$holder = "";

				for ($i=0; $i < 8; $i++) {
					$val1 = rand(0, 9);
					$genVal = $random[$val1];
					$holder = $holder.$genVal;
				}
				//Using the values gotten from the query above
				$earnQuery = "INSERT INTO cash(id, description, credit, debit, amount, cashid) VALUES('', '$descr', '$moneyIn', '$moneyOut', '$totals', '$holder')";
				$confirmation = mysqli_query($dbcon, $earnQuery);
				if ($confirmation) {
					$output = "<script";
					$output .= "alert('The Transaction Has Been Recorded Successfully');";
					$output .= "</script>";

					echo $output;
				}else{
					$output = "<script";
					$output .= "alert('Sorry! There Has Been An Error!');";
					$output .= "</script>";

					echo $output;
				}
			break;
		
		default:
			
			break;
	}
}
function getCashAtHand()
{	include 'db.php';
	$todaysDates = date('Y-m-d');
	$getData = "SELECT * FROM cash WHERE description LIKE '%cash at hand%' AND trans_tym LIKE '$todaysDates%'";
	$specify = mysqli_query($dbcon, $getData);
	if (mysqli_num_rows($specify) > 0) {
		while ($row = mysqli_fetch_assoc($specify)) {
			#get the data from the rows
			$value = $row['amount'];
			echo "KES ".$value;
		}
	}else{
		echo "No Record Found!";
	}
}

//Get Cash Made
function getCashMade()
{	include 'db.php';
	$todaysDates = date('Y-m-d');
	$getData = "SELECT SUM(credit) AS earnings FROM `cash` WHERE trans_tym LIKE '$todaysDates%' AND description NOT LIKE '%cash at hand%'";
	$specify = mysqli_query($dbcon, $getData);
	if (mysqli_num_rows($specify) > 0) {
		while ($row = mysqli_fetch_assoc($specify)) {
			#get the data from the rows
			$value = $row['earnings'];
			echo "KES ".$value;
		}
	}else{
		echo "No Record Found!";
	}
}
//Get Cash Spent
function getCashSpent()
{	include 'db.php';
	$todaysDates = date('Y-m-d');
	$getData = "SELECT SUM(debit) AS spendings FROM `cash` WHERE trans_tym LIKE '$todaysDates%' AND description NOT LIKE '%cash at hand%'";
	$specify = mysqli_query($dbcon, $getData);
	if (mysqli_num_rows($specify) > 0) {
		while ($row = mysqli_fetch_assoc($specify)) {
			#get the data from the rows
			$value = $row['spendings'];
			echo "KES ".$value;
		}
	}else{
		echo "No Record Found!";
	}
}
//Get Profit
function getProfit()
{	include 'db.php';
	$todaysDates = date('Y-m-d');
	$getData = "SELECT SUM(amount) AS profit FROM `cash` WHERE trans_tym LIKE '$todaysDates%' AND description NOT LIKE '%cash at hand%'";
	$specify = mysqli_query($dbcon, $getData);
	if (mysqli_num_rows($specify) > 0) {
		while ($row = mysqli_fetch_assoc($specify)) {
			#get the data from the rows
			$value = $row['profit'];
			echo "KES ".$value;
		}
	}else{
		echo "No Record Found!";
	}
}
 ?>