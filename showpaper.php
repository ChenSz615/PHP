
<?php

//session限制
include("include.inc");
if (!isset($_SESSION["check"]) || $_SESSION["check"]!=="author"){//若直接輸入網址則無法登入

    header("Location:index.php");
}

$sName=$_POST["sName"];
echo "你的姓名:".$sName."<br/>";

echo"投稿內容:<br/>";
$paperTitle=$_POST["paperTitle"];
echo"論文標題:".$paperTitle."<br/>";

$authorName=$_POST["authorName"];
echo"作者姓名:".$paperTitle."<br/>";

$email=$_POST["email"];
echo"作者Email:".$paperTitle."<br/><br/>";


echo "論文摘要:";
echo nl2br($_POST["comment"]);

?>
<html>
<a href='logout.php'>登出</a>
</html>