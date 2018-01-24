<?php
    define('HOST','localhost');
	define('USER','id4269228_saurabh');
	define('PASSWORD','sunshine');
	define('DB','id4269228_srm_mall');
	
	$con = mysqli_connect(HOST,USER,PASSWORD,DB) or die;
	
	$id = $_POST['id'];
	
	$sql = "select SrNo , Name from every where basic_id = '$id'";
	$res = mysqli_query($con , $sql);
	$row = mysqli_fetch_assoc($res);
	if($row['SrNo']!=null){
	    $array = array();
	    $array[0] = 'OLD';
	    $array[1] = $row['SrNo'];
	    $array[2] = $row['Name'];
	    $sql = "select shop_name , hostel , floor  , mob from Seller where every_id = '$array[1]' ; ";
	    $res = mysqli_query($con , $sql);
	    $row = mysqli_fetch_assoc($res);
	    if($row['shop_name']!=null){
	       $array[3] = $row['shop_name'];
	       $array[4] = $row['hostel'];
	       $array[5] = $row['floor'];
		   $array[6] = $row['mob'];
	       echo (json_encode($array));
	    }else{
	       echo (json_encode($array));	
	    }
	}else{
	    $sql = "insert into every (basic_id) values ('$id')";
	    $result = mysqli_query($con , $sql);
	
	    $sql = "select SrNo from every where basic_id = '$id'";
	    $result = mysqli_query($con , $sql);
	    $array = array();
	    $array[0] = "NEW";
	    $array[1] = mysqli_fetch_assoc($result)['SrNo'];
	    echo (json_encode($array));	
	}
	
	mysqli_close($con);
?>