<?php
 	require('functions.php');
	session_start();
    if(empty($_SESSION['email']))
{
	header('location:index.php');
} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
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
				<a class="navbar-brand" href="admin_dashboard.php">Library System(LS)</a>
			</div>
			<font style="color: white"><span><strong>Welcome : <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email : <?php echo $_SESSION['email'];?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_profile.php"> Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
		<div class="container-fluid">
			<ul class="nav navbar-nav navbar-center">
				<li class="nav-item">
					<a href="admin_dashboard.php" class="nav-link">Dashboard</a>
				</li>	
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
					<div class="dropdown-menu">
						<a href="add_book.php" class="dropdown-item">Add New Book</a>
						<a href="manage_book.php" class="dropdown-item">Manage Book</a>
					</div>	
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
					<div class="dropdown-menu">
						<a href="add_cat.php" class="dropdown-item">Add New Category</a>
						<a href="manage_cat.php" class="dropdown-item">Manage Category</a>
					</div>	
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">Authors</a>
					<div class="dropdown-menu">
						<a href="add_author.php" class="dropdown-item">Add New Authors</a>
						<a href="manage_author.php" class="dropdown-item">Manage Authors</a>
					</div>	
				</li>
				<li class="nav-item">
					<a href="issue_book.php" class="nav-link">Issue Book</a>
				</li>	
			</ul>
	</nav>
		<h1 style="text-align: center;"><u>WELCOME TO LIBRARY SYSTEM</u></h1>
			<h5 style="text-align:center;"><u><?php echo $_SESSION['name']; ?> Profile</u></h5>

	<span><marquee>This is Library System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-3">
		<div class="card bg-light" style="width: 300px;">
			<div class="card-header">Registered Users </div>
			<div class="card-body">
				<p class="card-text">No. Of Total Users : <?php echo get_user_count();?> </p>
				<a href="regusers.php" class="btn btn-danger" target="_blank">View Registered User </a>
			</div>	
		</div>	
	</div>

	<div class="col-md-3">
		<div class="card bg-light" style="width: 300px;">
			<div class="card-header">Registered Books </div>
			<div class="card-body">
				<p class="card-text">No. Of Availbale Books : <?php echo get_book_count();?> </p>
				<a href="regbooks.php" class="btn btn-primary" target="_blank">View Registered Books </a>
			</div>	
		</div>	
	</div>

<div class="col-md-3">
		<div class="card bg-light" style="width: 300px;">
			<div class="card-header">Registered Category </div>
			<div class="card-body">
				<p class="card-text">No. Of Books Category : <?php echo get_category_count();?> </p>
				<a href="regcat.php" class="btn btn-warning" target="_blank">View Registered Categories </a>
			</div>	
		</div>	
	</div>

<div class="col-md-3">
		<div class="card bg-light" style="width: 300px;">
			<div class="card-header">Registered Authors </div>
			<div class="card-body">
				<p class="card-text">No. Of Availbale Authors : <?php echo get_author_count();?> </p>
				<a href="regauth.php" class="btn btn-info" target="_blank">View Authors </a>
			</div>	
		</div>	
	</div>

	<div class="col-md-3"><br>
		<div class="card bg-light" style="width: 300px; ">
			<div class="card-header">Issued Books </div>
			<div class="card-body">
				<p class="card-text">No. Of Issued Books : <?php echo get_issued_book_count();?> </p>
				<a href="view_issued_book.php" class="btn btn-success" target="_blank">View Issued Books</a>
			</div>	
		</div>	
	</div>
</div>
<br><br>
	<div style="text-align: center;"><label>&copy; Copyright Rohit Shukla </label>
	</div>

</body>
</html>