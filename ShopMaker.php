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
	
	$sql = "insert into Seller (every_id , Name , shop_name , hostel , floor , mob ) values ( '$every_id' , '$name' , '$shop_name' , '$hostel' , '$floor'  , '$mob') ; ";
	mysqli_query($con,$sql);
	mysqli_close($con);
?>