<?php
    define('HOST','localhost');
	define('USER','id4269228_saurabh');
	define('PASSWORD','sunshine');
	define('DB','id4269228_srm_mall');
	
	$con = mysqli_connect(HOST,USER,PASSWORD,DB) or die;
	
	$SrNo = $_POST['SrNo'];	
	
	$sql = "delete from request where SrNo = '$SrNo' ";
	mysqli_query($con , $sql);
	mysqli_close($con);
?>