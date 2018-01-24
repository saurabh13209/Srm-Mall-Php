<?php
    define('HOST','localhost');
	define('USER','id4269228_saurabh');
	define('PASSWORD','sunshine');
	define('DB','id4269228_srm_mall');
	
	$con = mysqli_connect(HOST,USER,PASSWORD,DB) or die;
	
	$Name = $_POST['Name'];
	$Mob = $_POST['Mob'];
	$Text = $_POST['Text'];
	$every_id = $_POST['every_id'];
	
	$sql = "insert into request ( every_id , Name , Mob , Text ) values ( '$every_id' ,  '$Name' , '$Mob' , '$Text')";
	mysqli_query($con,$sql);
	mysqli_close($con);
?>