<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="utf-8">
    <title>購物車</title>
    <?php
    session_start();
    if (!isset($_SESSION["check"]) || $_SESSION["check"] != "Yes") {
        echo "<script>alert('請先登入會員！');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
        exit();
    }
    
    ?>
    <style>
        /* 品牌 */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            position: relative; /* 使 body 為 .brand 定位的相對參照點 */
            background: linear-gradient(to bottom, #ffffff 10%, #B7CBEB 10%); /* 使用線性漸變背景 */
        }
        .brand {
            position: absolute; /* 設置 .brand 為絕對定位 */
            top: 20px; /* 調整 .brand 的垂直位置 */
            left: 20px; /* 調整 .brand 的水平位置 */
            font-family: 'Noto Sans', sans-serif;
            font-size: 30px;
        }
        .brand .ticket {
            color: #4285F4;
            font-weight: bold;
        }
        .brand .y {
            color: #737973;
            font-weight: bold;
        }
        .brand .tour {
            color: #8C52FF;
            font-weight: bold;
        }

        /* 導覽列和背景 */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #ffffff 10%, #B7CBEB 10%); /* 使用線性漸變背景 */
            display: flex;
            flex-direction: column;
        }
        .navigation {
            background-color: #ffffff;
            padding: 8px 10px; /* 調整導覽行的内邊距 */
            margin-right: 30px;
        }
        .navigation ul {
            list-style-type: none;
            margin: 30px 0 0; /* 數字大越往下 */
            padding: 0;
            text-align: center;
        }
        .navigation ul li {
            display: inline;
            margin: 20px;
        }
        .navigation ul li a {
            text-decoration: none;
            color: #333333;
        }
        .navigation ul li a:hover {
            background-color: #dddddd;
        }
        /* 表格樣式 */
        table {
            width: 80%;
            margin: 50px auto;
            border-collapse: collapse;
            box-shadow: 0 2px 3px rgba(0,0,0,0.1);
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #4285F4;
            color: white;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e0e0e0;
        }
        td a {
            color: #4285F4;
            text-decoration: none;
        }
        td a:hover {
            text-decoration: underline;
        }

        /* 按鈕樣式 */
        .btn {
            display: block;
            width: 150px;
            margin: 20px auto;
            padding: 10px 20px;
            text-align: center;
            color: white;
            background-color: #4285F4;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #8C52FF;
        }
    </style>
  
</head>
<body>

    <div class="brand">
        <span class="ticket">Ticket</span><span class="y">y</span><span class="tour">Tour</span>
    </div>

    <div class="navigation">
        <ul>
            <?php
            if (isset($_SESSION["check"]) && $_SESSION["check"] == "Yes") {
                echo '<li><a href="http://ticketytour.infinityfreeapp.com/tourwebsite/index.php">景點導覽</a></li>';
            } else {
                echo '<li><a href="http://ticketytour.infinityfreeapp.com/">景點導覽</a></li>';
            }
            ?>
            <li><a href="http://ticketytour.infinityfreeapp.com/tourwebsite/cart.php">購物車</a></li>
            <li><a href="http://ticketytour.infinityfreeapp.com/tourwebsite/register_member.php">會員專區</a></li>
            <li><a href="http://ticketytour.infinityfreeapp.com/tourwebsite/aboutus.php">關於我們</a></li>
        </ul>
    </div>

    <?php
        // 連接資料庫
        $link = @mysqli_connect(
                    'sql208.infinityfree.com',
                    'if0_36649429',
                    'DHX6Rhm2HVtPyqP',
                    'if0_36649429__php_final'
                );
                mysqli_set_charset($link, "utf8");
                
        // SQL 語法
        $SQL = "SELECT * FROM ticket";
        
        //送出查詢
        $result = mysqli_query($link, $SQL);

        //結果轉陣列
        echo "<table>";
        echo "<tr>";
        echo "<th>景點名稱</th><th>旅遊日期</th><th>旅遊時間</th><th>票種</th><th>數量</th><th>操作</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row["BookingAttractions"]."</td><td>".$row["BookingDate"]."</td><td>".$row["BookingTime"]."</td><td>".$row["BookingType"]."</td><td>".$row["BookingNumber"]."</td><td><a href='del.php?No=".$row["No"]."'>刪除</a></td>";
            echo "</tr>";
        }
        echo "</table>";

        echo "<a href='pay.php' class='btn'>立即付款</a>";
    ?>
</body>
</html>
