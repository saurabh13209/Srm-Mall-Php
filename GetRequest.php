<?php
    define('HOST','localhost');
	define('USER','id4269228_saurabh');
	define('PASSWORD','sunshine');
	define('DB','id4269228_srm_mall');
	
	$con = mysqli_connect(HOST,USER,PASSWORD,DB) or die;
	
	$sql = "select Name , Mob , Text from request order by SrNo desc";
	$result = mysqli_query($con,$sql);
	$array = array();
	$i=0;
	while($row = mysqli_fetch_assoc($result)){
		$temp = array();
		$temp[0] = $row['Name'];
		$temp[1] = $row['Mob'];
		$temp[2] = $row['Text'];
		$array[$i] = $temp;
		$i++;
	}
	echo json_encode($array);
	mysqli_close($con);
?>