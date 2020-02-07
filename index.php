<?php 
//include 'scripts/master_query.php';
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
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">Budgetry</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#">Disabled</a>
		      </li>
		    </ul>
		    
		  </div>
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
	
	<footer>
		<p>Made By John Kimani &copy; <script>let current = new Date; document.write(current.getFullYear());</script></p>
	</footer>
	<script src="js/.jquery_3.4.1.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/all.js" type="text/javascript"></script>
	<script src="js/index.js" type="text/javascript"></script>
</body>
</html>