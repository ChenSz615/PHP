<html>
<meta charset="utf-8">
<form action="hw0314_check.php" method="POST">

--------若要填資管晚會表單請輸入資管系帳密(直接輸入表單網址無法進入表單)----------------------<br/>
帳號:<input type="text" name="uId"><br/>
密碼:<input type="password" name="uPwd"><br/>
<input type="submit" value="登入">  <input type="reset" value="重新輸入"><br/>

</form>

<?php

date_default_timezone_set("Asia/Taipei");
echo date("Y/m/d h:i:sa");

?>

</html>