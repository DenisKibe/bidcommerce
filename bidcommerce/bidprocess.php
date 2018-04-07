<?php

$ProdName=$_REQUEST['ProductName'];
$bidmount=$_REQUEST['bidmount'];
$pPrice=$_REQUEST['pPrice'];
session_start();
$Name=$_SESSION['PhoneNumber'];

$mysqli=mysqli_connect("localhost","root","","db_test");
	if(!$mysqli){
		die('could not connect:'.mysqli_error($mysqli));
	}
	$sql="SELECT * FROM tb_user WHERE L1='$Name'";
	$result=mysqli_query($mysqli,$sql);
	if(!$result){
		die('error doing query'.mysqli_error($mysqli));
	}
	if (mysqli_num_rows($result) >0) {
	while($bal=mysqli_fetch_assoc($result)){
	$PhoneNumber=$bal["L1"];
	$balac=$bal["balc"];
	}
	if($bidmount<=$balac){
	$newbalc=$balac-$bidmount;
	$sql="UPDATE tb_user SET balc='$newbalc' WHERE L1=$Name";
	$matokeo=mysqli_query($mysqli,$sql);
	if($matokeo){
		
		$_SESSION['balance']=$newbalc;
		
	print ("BID placed successful");
	}
	}
	else{
	echo ("Insufficient balance");
	}
	}

	mysqli_close($mysqli);
	
	
?>