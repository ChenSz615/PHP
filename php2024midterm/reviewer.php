
<?php
include("include.inc");
if (!isset($_SESSION["check"]) || $_SESSION["check"]!=="chair"){//若直接輸入網址則無法登入

    header("Location:index.php");

}

?>
<html>
<h1><b>Reviewer你好，歡迎進入論文評論網頁</b></h1><br/>
<form action="showreview.php" method="post">
論文評審決定: Accept<input type="radio" name="decision" value="Minor Revision">Minor Revision
<input type="radio" name="decision" value="Major Revision">Major Revision
<input type="radio" name="decision" value="Reject">Reject
<br/><br/>

論文評論評語:<textarea row=50 col=50 name="comment">
</textarea>

<br/>
<br/>

<input type="submit" value="提交"> 

<a href='logout.php'>登出</a>
</form>
</html>