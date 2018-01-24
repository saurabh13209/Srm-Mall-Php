<?php
	define('HOST','localhost');
	define('USER','id4269228_saurabh');
	define('PASSWORD','sunshine');
	define('DB','id4269228_srm_mall');
	
	$con = mysqli_connect(HOST,USER,PASSWORD,DB) or die;
	
	$id = $_POST['id'];
	$sql = "select isMessage , isAllowed from every where SrNo = '$id' ; ";
	$res = mysqli_query($con  ,$sql);
	$row = mysqli_fetch_assoc($res);
	$ans = $row['isMessage'];
	if ($row['isAllowed'] == null){
	    $sql = "select ShopName , mob ,  Product_Name , Image , isSaved , amount , Price , every_id , Packed , Cooked , station , electronic , Movie , drugs , others from account order	by SrNo desc";
		$ans = $row['isMessage'];
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
			$temp[6] = $row['every_id'];; 
			$temp[7] = $row['Packed'];
			$temp[8] = $row['Cooked'];
			$temp[9] = $row['station'];
			$temp[10] = $row['electronic'];
			$temp[11] = $row['Movie'];
			$temp[12] = $row['drugs'];
			$temp[13] = $row['mob'];
			$temp[14] = $row['others'];
			
			$array[$i] = $temp;
			$i++;
		}
		
		$array[$i] = $ans;
		$sql = "update every set isMessage = 'false' where SrNo = '$id' ";
		mysqli_query($con , $sql);
		echo (json_encode($array));    
	}else{
		echo (json_encode(array("No")));
	}
	
?>