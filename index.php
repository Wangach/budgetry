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
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">My Budget</a>
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
	<div class="row">
		<div class="col-md-6 col-lg-6 col-xl-12 col-sm-12">
			<div class="form-top">
				<h3>Budgetry</h3>
				<p>Please Fill In All Fields</p>
			</div>
			<form action="index.php" method="POST" class="budget">
				<div class="form-group">
					<label for="Type">Type: </label>
					<select name="direct" id="direction" class="form-control">
						<option value=""></option>
						<option value="spending" id="cr">Credit</option>
						<option value="earning" id="db">Debit</option>
					</select>
				</div>
				<div class="form-group">
					<label for="desc"> Description:</label>
					<input class="form-control" type="text" placeholder="Describe Expenditure..." name="maelezo">
				</div>
				<div class="form-group">
					<label for="amount"> Amount:</label>
					<input class="form-control" type="number" placeholder="Enter Amount..." name="kiwango">
				</div>

				<button type="submit" class="btn btn-primary" name="register">Submit</button>
			</form>
		</div><!--end of column-->
		<div class="col-md-6 col-lg-6 col-xl-12 col-sm-12">
			<div class="row">
				<div class="col-md-12 col-lg-12 col-xl-12 col-sm-3" id="cat">
					<div class="cashathand"></div><!--cash-->
					<p>Cash At Hand</p>
					<h6><?php getCashAtHand(); ?></h6>
				</div><!--End Of Column/-->
				<div class="col-md-12 col-lg-12 col-xl-12 col-sm-3" id="cmd">
					<div class="cashmade"></div><!--cash-->
					<p>Cash Made</p>
					<h6><?php getCashMade(); ?></h6>
				</div><!--End Of Column/-->
				<div class="col-md-12 col-lg-12 col-xl-12 col-sm-3" id="csp">
					<div class="cashspent"></div><!--cash-->
					<p>Cash Spent</p>
					<h6><?php getCashSpent(); ?></h6>
				</div><!--End Of Column/-->
				<div class="col-md-12 col-lg-12 col-xl-12 col-sm-3" id="pmd">
					<div class="profitmade"></div><!--cash-->
					<p>Profit Made</p>
					<h6><?php getProfit(); ?></h6>
				</div><!--End Of Column/-->
			</div><!--End of row-->
		</div><!--end of column-->
	</div><!--End of row-->
	
	<footer>
		<p>Made By John Kimani &copy; <script>let current = new Date; document.write(current.getFullYear());</script></p>
	</footer>
	<script src="js/.jquery_3.4.1.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/bootstrap.bundle.js" type="text/javascript"></script>
	<script src="js/all.js" type="text/javascript"></script>
	<script src="js/index.js" type="text/javascript"></script>
</body>
</html>