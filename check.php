
<?php

include("include.inc");
$chairId="chair";
$chairPwd="123";

$reviewerId="reviewer";
$reviewerPwd="234";

$authorId="author";
$chairPwd="345";

$uId=$_POST["uId"];
$uPwd=$_POST["uPwd"];
$sNum=$_POST["sNum"];

if($uId==$chairId && $uPwd==$chairPwd && $sNum =="chair"){
    
    $_SESSION["check"]="chair";

    // 設置cookie(舊的紀錄會被新的取代)
    if(isset($_COOKIE['userName'])) {
        setcookie("userName", "", time() - 3600, "/");
    }
    setcookie("userName",$uId,time()+60*24*7);
    header("Location:chair.php");
    

}elseif($uId==$reviewerId && $uPwd==$reviewerPwd && $sNum=="reviewer"){
    $_SESSION["check"]="reviewer";

    // 設置cookie(舊的紀錄會被新的取代)
    if(isset($_COOKIE['userName'])) {
        setcookie("userName", "", time() - 3600, "/");
    }
    setcookie("userName",$uId,time()+60*24*7);

    header("Location:reviewer.php");

}elseif($uId==$authorId && $uPwd==$authorPwd && $sNum=="author"){

    $_SESSION["check"]="author";

    // 設置cookie(舊的紀錄會被新的取代)
    if(isset($_COOKIE['userName'])) {
        setcookie("userName", "", time() - 3600, "/");
    }
    setcookie("userName",$uId,time()+60*24*7);

    header("Location:author.php");
}else{
    $_SESSION["check"]="no";
    header("Location:fail.php");
}




    