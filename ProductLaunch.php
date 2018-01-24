<?php
    define('HOST','localhost');
	define('USER','id4269228_saurabh');
	define('PASSWORD','sunshine');
	define('DB','id4269228_srm_mall');
	
	$con = mysqli_connect(HOST,USER,PASSWORD,DB) or die;
	
	$every_id = $_POST['every_id'];
	$name = $_POST['Name'];
	$shop_name = $_POST['shop_name'];
	$mob = $_POST['Mob'];
	$product_name = $_POST['Product_name'];
	$isSaved = $_POST['isSaved'];
	$Amount = $_POST['amount'];
	$Price = $_POST['price'];
	
	$packed = $_POST["packed"];
    $cooked = $_POST["cooked"];
    $station = $_POST["station"];
    $electronic = $_POST["electronic"];
    $movie = $_POST["movie"];
    $drug = $_POST["drug"];
	$others = $_POST["others"];	
	$image = $_POST['image_data'];
		
	
	if($isSaved == "true"){
		$sql = "insert into account (every_id , Name , ShopName , mob , Product_Name , Image ,  isSaved , amount , Price  , Packed , Cooked , station , electronic , Movie , drugs , others ) values ( '$every_id' , '$name' , '$shop_name' , '$mob' , '$product_name' , '$image' , '$isSaved' , '$Amount' , '$Price' , '$packed' , '$cooked' , '$station' , '$electronic' , '$movie' , '$drug' , '$others' ); ";
	}else{
		$path = $_POST['path'];
		file_put_contents($path , base64_decode($image));
		$sql = "insert into account (every_id , Name , ShopName , mob , Product_Name , Image , isSaved , amount , Price  , Packed , Cooked , station , electronic , Movie , drugs , others ) values ( '$every_id' , '$name' , '$shop_name' , '$mob', '$product_name' , '$path' ,  '$isSaved' , '$Amount' , '$Price' , '$packed' , '$cooked' , '$station' , '$electronic' , '$movie' , '$drug'  , '$others'); ";
	
	}
	
	
	mysqli_query($con,$sql);
	mysqli_close($con);
?>