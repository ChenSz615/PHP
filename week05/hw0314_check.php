<meta charset="utf-8">
<?php
session_start();

$sId="nukim";
$sPwd="nuknuk116";

$uId=$_POST["uId"];
$uPwd=$_POST["uPwd"];

if($sId==$uId  &&  $sPwd==$uPwd){
    $_SESSION["check"]="yes";
    header("Location:hw0314_form.php");//要空一格
}
else{
    $_SESSION["check"]="no";
    header("Location:hw0314_fail.php");
}








?>
