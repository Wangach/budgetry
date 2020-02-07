<?php 
include 'scripts/master_query.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Budgetry Start Page</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	
	<nav class="navbar navbar-light bg-faded">
		<a class="navbar-brand" href="index.php">Budgetry</a>
		<ul class="nav navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			
		</ul>
	</nav>

	<div class="form-top">
		<h3>Budgetry</h3>
		<p>Please Fill In All Fields</p>
	</div>
	<form action="#" method="POST" class="budget">
		<div class="form-group">
			<label for="Type">Type: </label>
			<select name="direct" id="direction" class="form-control">
				<option value=""></option>
				<option value="earning" id="">Credit</option>
				<option value="spending" id="">Debit</option>
			</select>
		</div>
		<div class="form-group">
			<label for="amount"> Amount:</label>
			<input class="form-control" type="number" placeholder="Enter Amount..." name="kiwango">
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

	<script src="js/.jquery_3.4.1.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/all.js" type="text/javascript"></script>
	<script src="js/index.js" type="text/javascript"></script>
</body>
</html>