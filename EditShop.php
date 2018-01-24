<?php
    define('HOST','localhost');
	define('USER','id4269228_saurabh');
	define('PASSWORD','sunshine');
	define('DB','id4269228_srm_mall');
	
	$con = mysqli_connect(HOST,USER,PASSWORD,DB) or die;
	
	$every_id = $_POST['Id'];
	$name = $_POST['Name'];
	$shop_name = $_POST['shop_name'];
	$hostel = $_POST['hostel'];
	$floor = $_POST['floor'];
	$mob = $_POST['Mob'];
	
	$sql = "update Seller set Name = '$name' , shop_name = '$shop_name' , hostel = '$hostel'  , floor = '$floor'  , mob = '$mob' where every_id = '$every_id' ";
	mysqli_query($con,$sql);
	$sql = "update account set Name = '$name' , ShopName = '$shop_name' , mob = '$mob'   where every_id = '$every_id' ";
	mysqli_query($con,$sql);
	mysqli_close($con);
?>