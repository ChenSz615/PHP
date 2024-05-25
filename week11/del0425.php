<meta charset ="utf-8">

<?php //從資料庫刪除指定紀錄
    
    $No = $_GET["No"]; // 接受參數
    echo $No;
    //htmlspecialchars($sNum) 將字符轉成html實體 

    //連接MySQL資料庫
    $link = @mysqli_connect( //加@->不要顯示錯誤訊息
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        'Hana3215321',  // 密碼
        'imeveningparty');  // 預設使用的資料庫名稱

    //SQL語法
    $SQL = "DELETE FROM attendee WHERE No = '$No'";

    //送出執行SQL查詢
    if($result = mysqli_query($link, $SQL)){
        echo "<br/>刪除成功";
    }
    
    echo "<br/><a href = 'index0425.php'>查看資料庫資料</a>"
?>