<?php



$Username=$_POST['Num'];
$password=$_POST['PwordL'];

$data=array('username'=>$username,'password'=>$password);

$data=json_encode($data);

curl -X POST --header 'Content-Type: application/json' --header 'Accept: application/json' -d '{ \ 
   "username": $username, \ 
   "password": $password \ 
 }' 'http://api.pennyinc.co.ke/OAuth2/GetToken'
 
?>

