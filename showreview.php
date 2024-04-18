<?php

//session限制
include("include.inc");
if (!isset($_SESSION["check"]) || $_SESSION["check"]!=="reviewer"){//若直接輸入網址則無法登入

    header("Location:index.php");
}

$decision=$_POST["decision"];
echo "<br/>論文評審決定 Accept:".$decision."<br/><br/>";



echo"評論內容:<br/>";
echo nl2br($_POST["comment"]);
?>

<html>
<a href='logout.php'>登出</a>
</html>