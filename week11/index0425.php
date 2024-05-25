<meta charset = "utf-8">

<?php   //從資料庫中取回資料並在網頁上顯示
    //連接資料庫
    $link = @mysqli_connect(
                'localhost',
                'root',
                'Hana3215321',
                'imeveningparty');
    if(!$link)
        die("無法開啟資料庫!<br/>");
    else
        echo "資料庫開啟成功!";

    //SQL語法 取回
    $SQL = "SELECT * FROM attendee";

    //送出查詢
    $result = mysqli_query($link, $SQL);

    //計算資料筆數
    $count = mysqli_num_rows($result);

    //結果轉陣列
    echo "<table border = '1'>";
    while($row = mysqli_fetch_assoc($result)){ //欄位值  row橫列
        
        echo "<tr>";
        echo "<td>".$row["sName"]."</td><td>".$row["sNumber"]."</td><td>".$row["sEmail"]."</td><td>"
        .$row["sJoined"]."</td><td>".$row["sPayed"]."</td><td>".$row["sActivity"]."</td><td>"
        .$row["sNum"]."</td><td>"."<a href='del0425.php '>刪除</a></td>"
        ."<td>修改</td><br/>";

        echo "</tr>";
    }

    echo "</table>";

    mysqli_close($link);

?>