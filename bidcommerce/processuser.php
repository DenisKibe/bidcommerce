<?php


$PhoneNumber=$_REQUEST['PhoneNumber'];
$PassWord=$_REQUEST['PassWord'];

if($PhoneNumber && $PassWord==""){
	echo "no data available";
}

$PhoneNumber=htmlspecialchars($PhoneNumber);
$PassWord=htmlspecialchars($PassWord);

$mysqli=mysqli_connect("localhost","root","","db_test");
	if(!$mysqli){
		die('could not connect:'.mysqli_error());
	}
	$sql="SELECT * FROM tb_user WHERE L1='$PhoneNumber' AND L2='$PassWord'";
	$result=mysqli_query($mysqli,$sql);
	if(!$result){
		die('error doing query'.mysqli_error($mysqli));
	}
	if (mysqli_num_rows($result) >0) {
		while($bal=mysqli_fetch_assoc($result)){
			$PhoneNumber=$bal['L1'];
			$balac=$bal['balc'];
		}
		Setcookie("Login","1",time()+3600,"/","",0);
		Setcookie("PhoneNumber",$PhoneNumber,time()+3600,"/","",0);
		session_start();
		$_SESSION['login']="1";
		$_SESSION['PhoneNumber']=$PhoneNumber;
		$_SESSION['balance']=$balac;
		print ("login successful");
	}
	else{
		session_start();
		$_SESSION['login']="";
		print ("Failed");
	
	}
	mysqli_close($mysqli);
	

?>
