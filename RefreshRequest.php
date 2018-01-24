<?php
    define('HOST','localhost');
	define('USER','id4269228_saurabh');
	define('PASSWORD','sunshine');
	define('DB','id4269228_srm_mall');
	
	$con = mysqli_connect(HOST,USER,PASSWORD,DB) or die;
	
	$SrNo = $_POST['SrNo'];
	
	$Name = $_POST['Name'];
	$mob = $_POST['Mob'];
	$Text = $_POST['Text'];
	$every_id = $_POST['every_id'];
	
	$sql = "delete from request where SrNo = '$SrNo'";
	mysqli_query($con , $sql);
	$sql = "insert into request (every_id , Name , Mob , Text ) values ( '$every_id' , '$Name' , 'mob' , '$Text' )";
	mysqli_query($con , $sql);
	mysqli_close($con);
?>