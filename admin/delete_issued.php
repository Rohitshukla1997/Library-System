<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"project");
	$query = "delete from issued_books where book_no = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Book Deleted...");
	window.location.href = "admin_dashboard.php";
</script>