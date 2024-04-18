<meta charset="utf-8">
<title>高大資管論文投稿系統</title>

<form action="check.php" method="post">
<html><h1><b>高大資管論文投稿系統</b></h1><br/>

請選擇你的角色:<select name="sNum[]">
    <option value="chair">Chair</option>
    <option value="reviewer">Reviewer</option>
    <option value="author">Author</option>
</select>

<br/>
帳號:<input type="text" name="uId" value=""><br/>
密碼:<input type="text" name="uPwd" value=""><br/>

<?php
//cookie(舊的使用者名稱會被新的取代)
if(isset($_COOKIE["userName"])){
    echo $_COOKIE["userName"]."歡迎回來";

}else{
    echo "這是你第一次進入網站!";
}
?>

<br/>
<input type="submit" value="提交"> 


</form>
</html>
