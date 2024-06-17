<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員資料管理</title>
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
<?php
    $link = @mysqli_connect(
        'sql208.infinityfree.com',  // MySQL主機名稱 
        'if0_36649429',             // 使用者名稱 
        'DHX6Rhm2HVtPyqP',          // 密碼
        'if0_36649429__php_final'   // 預設使用的資料庫名稱
    );
    mysqli_set_charset($link, "utf8");
    if(!$link)
        die("無法開啟資料庫!<br/>");
    else {
        //echo "資料庫開啟成功!";
        //SQL語法
        $SQL = "SELECT * FROM member";
        //送出查詢
        $result = mysqli_query($link, $SQL);
        //結果轉陣列
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>會員編號</td><td>ID</td><td>密碼</td><td>姓名</td><td>性別</td><td>電話</td><td>Email</td><td>地址</td>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row["No"]."</td><td>".$row["Id"]."</td><td>".$row["Password"]."</td><td>".$row["Name"]."</td><td>".$row["Gender"]."</td><td>".$row["Phone"]."</td><td>".$row["Email"]."</td><td>".$row["Address"]."</td><td><a href='del.php?No=".$row["No"]."'>刪除</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
?>
</body>
</html>
