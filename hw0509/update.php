<meta charset = "utf-8">
<?php
$link = @mysqli_connect( 
    'localhost',    // MySQL主機名稱 
    'root',         // 使用者名稱 
    'Hana3215321',  // 密碼
    'school');      // 預設使用的資料庫名稱


if (!$link) {
    die('連接數據庫失敗: ' . mysqli_connect_error());
}

$No = $_GET["No"];

// SQL
$SQL = "SELECT * FROM student WHERE No='$No'";
if($result = mysqli_query($link, $SQL)){
    $row = mysqli_fetch_assoc($result);
    $sName = $row["sName"];
    $sNo = $row["sNo"];
    $Dept = $row["Dept"];
    $Ads = $row["Ads"];
}


?>

<form action="updatecheck.php" method="post">
    編號: <?php echo $No ?><input type="hidden" name="No" value="<?php echo $No ?>"><br/>
    學號: <input type="text" name="sNo" value="<?php echo $sNo; ?>"><br/>
    姓名: <input type="text" name="sName" value="<?php echo $sName; ?>"><br/>
    系所: <input type="text" name="Dept" value="<?php echo $Dept; ?>"><br/>
    地址: <input type="text" name="Ads" value="<?php echo $Ads; ?>"><br/>
    <input type="submit" value="提交">
</form>
<?php
mysqli_close($link);
?>