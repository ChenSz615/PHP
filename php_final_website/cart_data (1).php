<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>訂單列表</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
            font-size: 18px; 
        }
        th {
            background-color: #f0f0f0;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        a {
            text-decoration: none;
            color: blue;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <table>
        <?php
    
    $link = @mysqli_connect( //加@->不要顯示錯誤訊息       
        'sql208.infinityfree.com',  // MySQL主機名稱 
        'if0_36649429',       // 使用者名稱 
        'DHX6Rhm2HVtPyqP',  // 密碼
        'if0_36649429__php_final');  // 預設使用的資料庫名稱

        mysqli_set_charset($link, "utf8");
    if(!$link)
    die("無法開啟資料庫!<br/>");
    else{
        //echo "資料庫開啟成功!";

        //SQL語法
        $SQL = "SELECT * FROM ticket";
        
        //送出查詢
        $result = mysqli_query($link, $SQL);
        
        //結果轉陣列
        echo "<table border = '1'>";
        echo "<tr>";
        echo "<td>訂單編號</td><td>景點名稱</td><td>門票日期</td><td>門票時間</td><td>票種</td><td>數量</td><td>訂票人</td><td>出貨狀態</td><br/>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row["No"]."</td><td>".$row["BookingAttractions"]."</td><td>".$row["BookingDate"]."</td><td>".$row["BookingTime"]."</td><td>".$row["BookingType"]."</td><td>".$row["BookingNumber"]."</td><td>".$row["BookerNo"]."</td><td>".$row["State"]."</td><td><a href = 'del.php?No=".$row["No"]."'>刪除</a></td><br/>";
            echo "</tr>";
        }
            echo "</table>";
        }
    
?>
    </table>
</body>
</html>




