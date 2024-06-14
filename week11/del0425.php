<meta charset ="utf-8">

<?php //從資料庫刪除指定紀錄
    
    $id = $_GET["id"];


    //連接MySQL資料庫
    $link = @mysqli_connect( //加@->不要顯示錯誤訊息
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        'Hana3215321',  // 密碼
        'imeveningparty');  // 預設使用的資料庫名稱

        if (!$link) {
            echo("無法開啟資料庫!<br/>");
        }

    //SQL語法
    $SQL = "DELETE FROM attendee WHERE id = '$id'";

    //送出執行SQL查詢
    if($result = mysqli_query($link, $SQL)){
        echo "<br/>刪除成功";
    }
    
    echo "<br/><a href = 'index0425.php'>查看資料庫資料</a>";

    mysqli_close($link);
?>
