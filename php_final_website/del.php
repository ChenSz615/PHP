<meta charset ="utf-8">

<?php
    $No = $_GET["No"];
    echo $No;
                            
    //連接資料庫
    $link = @mysqli_connect( //加@->不要顯示錯誤訊息
         'sql208.infinityfree.com',  // MySQL主機名稱 
        'if0_36649429',       // 使用者名稱 
        'DHX6Rhm2HVtPyqP',  // 密碼
        'if0_36649429__php_final');  // 預設使用的資料庫名稱
        
    //SQL語法
    $SQL = "DELETE FROM ticket WHERE No = '$No'";

    //送出查詢
    if($result = mysqli_query($link, $SQL)){
        echo "<br/>刪除成功";
    }
    echo "<br/><a href = 'cart.php'>查看購物車</a>"
?>