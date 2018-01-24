<?php
	define('HOST','localhost');
	define('USER','id4269228_saurabh');
	define('PASSWORD','sunshine');
	define('DB','id4269228_srm_mall');
	
	$con = mysqli_connect(HOST,USER,PASSWORD,DB) or die;
	
	$from_name = $_POST['from_name'];
	$to_name = $_POST['to_name'];
	$text = $_POST['text'];
	
	$sql = "insert into Message (from_name , to_name , text) values ('$from_name' , '$to_name' , '$text')";
	mysqli_query($con,$sql);
	$sql = "update every set isMessage = 'true' where SrNo = '$to_name' ";
	mysqli_query($con , $sql);
	
	mysqli_close($con);
?>