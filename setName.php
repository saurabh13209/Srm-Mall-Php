<?php
    define('HOST','localhost');
	define('USER','id4269228_saurabh');
	define('PASSWORD','sunshine');
	define('DB','id4269228_srm_mall');
	
	$con = mysqli_connect(HOST,USER,PASSWORD,DB) or die;
	
	$basic = $_POST['basic'];
	$name = $_POST['name'];
	
	$sql = "update every set Name = '$name' where basic_id = '$basic' ";
	mysqli_query($con,$sql);
	mysqli_close($con);
?>