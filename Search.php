<?php
    define('HOST','localhost');
	define('USER','id4269228_saurabh');
	define('PASSWORD','sunshine');
	define('DB','id4269228_srm_mall');
	
	$con = mysqli_connect(HOST,USER,PASSWORD,DB) or die;
	
	$key = $_POST['Key'];
	
	if($key == "Packed" || $key == "packed" || $key == "Packed Food"){
		$sql = "select SrNo , every_id ,  ShopName  , mob , Product_Name , Image , isSaved , amount , Price , Packed , Cooked , station , electronic , Movie , drugs , others from account where Packed = 'true' ";
	}
	else if($key == "cooked" || $key == "Cooked" || $key == "Cooked Food" ){
		$sql = "select SrNo , every_id ,  ShopName , mob , Product_Name , Image , isSaved , amount , Price , Packed , Cooked , station , electronic , Movie , drugs , others from account where Cooked = 'true' ";
	}
	else if($key == "Stationary" || $key == "stationary" ){	
		$sql = "select SrNo , every_id ,  ShopName , mob , Product_Name , Image , isSaved , amount , Price , Packed , Cooked , station , electronic , Movie , drugs , others from account where station = 'true' ";
	}
	else if($key == "Electronic" || $key == "electronic" || $key == "Electronic goods" || $key == "Electronic Goods" || $key == "Electronic good" ){
		$sql = "select SrNo , every_id ,  ShopName , mob , Product_Name , Image , isSaved , amount , Price , Packed , Cooked , station , electronic , Movie , drugs , others from account where electronic = 'true' ";
	}
	else if($key == "movie" || $key == "games" || $key == "Movie" || $key == "software" ){
		$sql = "select SrNo , every_id ,  ShopName , mob , Product_Name , Image , isSaved , amount , Price , Packed , Cooked , station , electronic , Movie , drugs , others from account where Movie = 'true' ";
	}
	else if($key == "Drugs" || $key == "drugs" || $key == "marijuana" || $key == "cigarette" ){
		$sql = "select SrNo , every_id ,  ShopName , mob , Product_Name , Image , isSaved , amount , Price , Packed , Cooked , station , electronic , Movie , drugs , others  from account where drugs = 'true' ";
	}
	else if($key == "others" || $key == "Others" ){
		$sql = "select SrNo , every_id ,  ShopName , mob , Product_Name , Image , isSaved , amount , Price , Packed , Cooked , station , electronic , Movie , drugs , others  from account where others = 'true' ";
	}else{
		$sql = "select SrNo , every_id ,  ShopName , mob , Product_Name , Image , isSaved , amount , Price , Packed , Cooked , station , electronic , Movie , drugs , others from account where ShopName = '$key' or Product_Name Like '%$key%' or amount = '$key' or Price = '$key' order	by SrNo desc";
	}

	$result = mysqli_query($con , $sql);
	
	$array = array();
	$i=0;
	
	while($row = mysqli_fetch_assoc($result)){
		$temp = array();
		$temp[0] = $row['ShopName'];
		$temp[1] = $row['Product_Name'];
		$temp[2] = $row['Image'];
		$temp[3] = $row['isSaved'];
		$temp[4] = $row['amount'];
		$temp[5] = $row['Price'];
		$temp[6] = $row['every_id'];
			
		$temp[7] = $row['Packed'];
		$temp[8] = $row['Cooked'];
		$temp[9] = $row['station'];
		$temp[10] = $row['electronic'];
		$temp[11] = $row['Movie'];
		$temp[12] = $row['drugs'];
		$temp[13] = $row['mob'];
		$temp[14] = $row['others'];
		$temp[15] = $row['SrNo'];
			
		$array[$i] = $temp;
		$i++;
	}
	
	echo (json_encode($array));
?>