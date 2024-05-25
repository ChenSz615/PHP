<meta charset="UTF-8">
<html>
<?php
//只有勾選的會傳值
echo "表單回應:"."<br/>";
$sName=$_POST["sName"];
echo "你的姓名:".$sName."<br/>";
$sNumber=$_POST["sNumber"];
echo "你的學號:".$sNumber."<br/>";
$sEmail=$_POST["sEmail"];
echo "你的電子郵件:".$_POST['sEmail']."<br/>";
$sJoined=$_POST["sJoined"];
echo "是否參加:".$_POST['sJoined']."<br/>";
$sPayed=$_POST['sPayed'];
echo "是否有繳系費:".$sPayed."<br/>";

$sActivity=$_POST['sActivity']; //只有勾選的會傳值

echo "對哪些活動有興趣:";
    foreach($sActivity as $value){
        echo $value." ";
    }

$sNum=$_POST["sNum"];//這裡不須用sNum[]
echo "禮物編號:";
$count=count($sNum);
for($i= 0;$i<$count;$i++){
    if($i<$count-1){
        echo "$sNum[$i]"." ";
    }
    else{
        echo "$sNum[$i]";
    }
}


//將數組轉換為字串
$sActivityString=implode(", ",$sActivity);
$sNumString=implode(", ",$sNum);

echo "<br/>";
echo "<a href='hw0314_logout.php'>登出</a><br/>";


//----------
//連接資料庫
$link = @mysqli_connect(
    'localhost',
    'root',
    'Hana3215321',
    'imeveningparty');

    if(!$link){
    die("無法開啟資料庫!<br/>");
    }
        else{
        echo "資料庫開啟成功!";
        }

//SQL語法
$SQL = "INSERT INTO attendee(sName,sNumber,sEmail,sJoined,sPayed,sActivity,sNum) VALUES('$sName','$sNumber','$sEmail','$sJoined','$sPayed','$sActivityString','$sNumString')";

//送出查詢
if($result = mysqli_query($link, $SQL)){
    echo "<br/>新增成功";
    echo "<br/><a href='index0425.php'>查看資料庫資料</a>";
}



?>

</html>