<meta charset="UTF-8">
<html>
<?php

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

$sActivity=$_POST['sActivity'];

echo "對哪些活動有興趣:";
    foreach($sActivity as $value){
        echo $value." ";
    }



$sNum=$_POST["sNum"];//這裡不須用sNum[]
echo "禮物編號:";
$count=count($sNum);
for($i= 0;$i<$count;$i++){
    if($i<$count-1){
        echo "$sNum[$i]".",";
    }
    else{
        echo "$sNum[$i]";
    }
}

echo "<br/>";
echo "<a href='hw0314_logout.php'>登出</a>";
?>

</html>