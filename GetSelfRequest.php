<?php
    define('HOST','localhost');
	define('USER','id4269228_saurabh');
	define('PASSWORD','sunshine');
	define('DB','id4269228_srm_mall');
	
	$con = mysqli_connect(HOST,USER,PASSWORD,DB) or die;
	
	$every_id = $_POST['Id'];
	
	$sql = "select SrNo , Name , Mob , Text from request where every_id = '$every_id' order by SrNo desc";
	$result = mysqli_query($con,$sql);
	$array = array();
	$i=0;
	while($row = mysqli_fetch_assoc($result)){
		$temp = array();
		$temp[0] = $row['Name'];
		$temp[1] = $row['Mob'];
		$temp[2] = $row['Text'];
		$temp[3] = $row['SrNo'];
		$array[$i] = $temp;
		$i++;
	}
	echo json_encode($array);
	mysqli_close($con);
?>