
<?php
include("include.inc");
if (!isset($_SESSION["check"]) || $_SESSION["check"]!=="author"){//若直接輸入網址則無法登入

    header("Location:index.php");

}

?>
<html>

<form action="showpaper.php" method="post">>
<h1><b>Author你好，歡迎進入論文投稿網頁</b></h1><br/>

論文標題:<br/>
<input type="text" name="paperTitle" value=""><br/>
作者姓名:
<input type="text" name="authorName" value=""><br/>
作者Email:<input type="email" name="email" value=""><br/>

<br/>
<br/>

論文摘要:<textarea row=50 col=50 name="comment">
</textarea>

<br/>
<br/>

<input type="submit" value="提交"> &nbsp <a href='logout.php'>登出</a>

</form>

</html>