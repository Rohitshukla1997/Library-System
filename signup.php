<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LIBRARY SYSTEM</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">LIBRARY SYSTEM (LS)</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="admin/index.php">Admin Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">User Login</a>
				</li><li class="nav-item">
					<a class="nav-link" href="signup.php">Register</a>
				</li>
			</ul>
		</div>
	</nav> <br>
	<span><marquee>This is Library System. Library opens at 8:00 AM and close at 8:00 PM.</marquee></span>

	<div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>Library Timing</h5>
			<ul>
				<li>Opening Timing: 8:00 AM</li>
				<li>Closing Timing: 8:00 PM</li>
				<li>Sunday Off</li>
			</ul>
			<h5>What We Provides?</h5>
			<ul>
				<li>Full Furnitures</li>
				<li>Free Wi-fi</li>
				<li>News Papers</li>
				<li>Discussion Room</li>
				<li>RO Water Filter</li>
				<li>Peacefull Environment</li>
			</ul>
		</div>
		<div class="col-md-8" id="min_content">
		<center><h3>User Registration From</h3></center>
		<form action="register.php" method="post">
			<div class="form-group">
				<label for="name">Full Name:</label>
				<input type="text" name="name" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="name">Email ID:</label>
				<input type="email" name="email" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="name">Password:</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="name">Mobile Number:</label>
				<input type="text" name="mobile" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="name">Address:</label>
				<textarea rows="3" cols="40" class="form-control" name="address"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Register</button>
		</form>
	</div>
	</div>
	<br><br>
	<div style="text-align: center;"><label>&copy; Copyright Rohit Shukla </label>
	</div>
</body>
</html>