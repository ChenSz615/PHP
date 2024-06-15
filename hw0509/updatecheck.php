<meta charset='utf8'>

<?php
$No=$_POST["No"];
$sName=$_POST["sName"];
$Dept=$_POST["Dept"];
$sNo=$_POST["sNo"];
$Ads=$_POST["Ads"];

//連接資料庫
$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    'Hana3215321',  // 密碼
    'school');  // 預設使用的資料庫名稱
//SQL語法
$SQL="UPDATE  student SET sName='$sName',Dept='$Dept',sNo='$sNo',Ads='$Ads' WHERE No='$No'";
if($result = mysqli_query($link, $SQL)){
    echo "更新成功";
}
echo "<br/><a href='index.php'>查看資料庫資料</a>";
?>