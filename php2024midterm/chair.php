
<?php
include("include.inc");
if (!isset($_SESSION["check"]) || $_SESSION["check"]!=="chair"){//若直接輸入網址則無法登入

    header("Location:index.php");
}

?>

<html>
<h1><b>Chair你好，歡迎進入論文網頁</b></h1><br/><br/>
<a href='logout.php'>登出</a>

</html>
