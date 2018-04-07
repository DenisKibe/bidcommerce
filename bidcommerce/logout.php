<?php
session_start();
session_destroy();

setcookie("Login","1",time()-60,"/","",0);
setcookie("PhoneNumber",$PhoneNumber,time()-60,"/","",0);
setcookie("balance",$balac,time()-60,"/","",0);
header("location:http://localhost/bidcommerce/index.html");
?>