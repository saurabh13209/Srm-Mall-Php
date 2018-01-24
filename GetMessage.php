<?php
    define('HOST','localhost');
	define('USER','id4269228_saurabh');
	define('PASSWORD','sunshine');
	define('DB','id4269228_srm_mall');
	
	$con = mysqli_connect(HOST,USER,PASSWORD,DB) or die;
	
	$to_name = $_POST['id'];
	
	$sql = "select from_name , text from Message where to_name = '$to_name' order by SrNo desc";
	
	$result = mysqli_query($con , $sql);
	
	$array = array();
	$i=0;
	
	while($row = mysqli_fetch_assoc($result)){
		$temp = array();
		$x = $row['from_name'];
		$s = "select Name from every where SrNo = '$x'";
		$res = mysqli_query($con  ,$s);
		$temp[0] = mysqli_fetch_assoc($res)['Name'];
		$temp[1] = $row['text'];
		
		$array[$i] = $temp;
		$i++;
	}
	
	echo (json_encode($array));
?>