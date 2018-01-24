<?php
    define('HOST','localhost');
	define('USER','id4269228_saurabh');
	define('PASSWORD','sunshine');
	define('DB','id4269228_srm_mall');
	
	$con = mysqli_connect(HOST,USER,PASSWORD,DB) or die;
	
	$to_name = $_POST['to_name'];
	$from_name = $_POST['from_name'];
	
	$sql = "select from_name , to_name , text from Message where (to_name = '$to_name' and from_name = '$from_name') or (from_name = '$to_name' and to_name = '$from_name') order by SrNo desc";
	
	$result = mysqli_query($con , $sql);
	
	$array = array();
	$i=0;
	
	while($row = mysqli_fetch_assoc($result)){
		$temp = array();
		$temp[0] = $row['from_name'];
		$temp[1] = $row['to_name'];
		$temp[2] = $row['text'];
		
		$array[$i] = $temp;
		$i++;
	}
	
	echo (json_encode($array));
?>