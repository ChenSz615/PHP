<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <style>
        /* 品牌 */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            position: relative; /* 使 body 成為 .brand 定位的相對參照點 */
            overflow-y: scroll;
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
            background: linear-gradient(to bottom, #ffffff 10%, #ffffff 10%); /* 使用線性漸變背景 */
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
        .full-width-image {
            height: 600px;
            width: 100%; /* 設置圖片的寬度 */
            display: block;
        }

        /* 縣市方  */
        .container {
            width: 300px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: absolute; /* 設置為絕對定位 */
            top: 300px; /* 與頂部的距離 */
            right: 600px; /* 與右側的距離 */
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label, select, input[type="submit"] {
            margin-bottom: 10px;
        }
        select {
            width: 200px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            max-width: 200px;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* 景點資訊卡片樣式 */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px;
        }
        .card {
            width: 300px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(64, 64, 64, 0.1);
            margin: 20px;
            text-align: center;
            border-top: 10px solid #4285F4; /* 加入藍色邊框 */
        }
        .card h3 {
            margin: 10px 0;
            font-size: 20px;
            color: #4285F4; /* 使用藍色字體 */
        }
        .card p {
            margin: 5px 0;
            color: #666;
        }
        .card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
          
        }
        .existing-account-link {
    
            margin-left:1350px;
            font-size: 16px;
        }
        .admin {
            margin-left: 10px; /* 調整管理者介面連結的位置 */
            font-size: 16px;
        }

    </style>
</head>
<body>
<div class="brand">
    <span class="ticket">Ticket</span><span class="y">y</span><span class="tour">Tour</span>
</div>
<div class="navigation">
        <ul>
            <li><a href="http://ticketytour.infinityfreeapp.com/">景點導覽</a></li>
            <li><a href="http://ticketytour.infinityfreeapp.com/tourwebsite/cart.php">購物車</a></li>
            <li><a href="http://ticketytour.infinityfreeapp.com/tourwebsite/register_member.php">會員專區</a></li>
            <li><a href="http://ticketytour.infinityfreeapp.com/tourwebsite/aboutus.php">關於我們</a></li>
        </ul>
    </div>

<img src="https://www.feast-magazine.co.uk/wp-content/uploads/2021/01/elizeu-dias-RN6ts8IZ4_0-unsplash-1900x1267.jpg" alt="Travel Agency" class="full-width-image">

<div class="container">
    <form method="post" action="">
        <label for="region">請選擇縣市:</label>
        <select name="region" id="region">
            <optgroup label="北部">
                <option value="台北市">台北市</option>
                <option value="新北市">新北市</option>
                <option value="基隆市">基隆市</option>
                <option value="桃園市">桃園市</option>
                <option value="宜蘭縣">宜蘭縣</option>
                <option value="新竹縣">新竹縣</option>
                <option value="新竹市">新竹市</option>
            </optgroup>
            <optgroup label="中部">
                <option value="苗栗縣">苗栗縣</option>
                <option value="臺中市">臺中市</option>
                <option value="彰化縣">彰化縣</option>
                <option value="南投縣">南投縣</option>
                <option value="雲林縣">雲林縣</option>
            </optgroup>
            <optgroup label="南部">
                <option value="嘉義縣">嘉義縣</option>
                <option value="嘉義市">嘉義市</option>
                <option value="台南市">台南市</option>
                <option value="高雄市">高雄市</option>
                <option value="屏東縣">屏東縣</option>
            </optgroup>
            <optgroup label="東部">
                <option value="台東縣">台東縣</option>
                <option value="花蓮縣">花蓮縣</option>
            </optgroup>
        </select>
        <input type="submit" value="選擇">
    </form>
</div>

<?php
    if (isset($_SESSION["message"])) {
        echo $_SESSION["message"];
        unset($_SESSION['message']);  // 顯示後清除消息
    }
    $link = @mysqli_connect(
        'sql208.infinityfree.com',  // MySQL主機名稱 
        'if0_36649429',       // 使用者名稱 
        'DHX6Rhm2HVtPyqP',  // 密碼
        'if0_36649429__php_final');  // 預設使用的資料庫名稱
    mysqli_set_charset($link, "utf8");

    
    if(!$link)
    echo("無法開啟資料庫!<br/>");
    else{
       // echo "資料庫開啟成功!";
        if (isset($_POST['region'])) {
     
            $City = $_POST['region']; 
            $SQL = "SELECT * FROM guided_tour WHERE City = '$City'";
            $result = mysqli_query($link, $SQL);
            if (!$result) {
                echo "查询失败: " . mysqli_error($link);
            }
            else if (mysqli_num_rows($result) == 0) {
                echo "沒有找到匹配的結果。";
            }
            else {
                echo "<div class='card-container'>";
                while ($row = mysqli_fetch_assoc($result)) {
                   echo "<a href='tourwebsite/detail.php?attraction=" . urlencode($row['Attractions']) . "'>";

                    echo "<div class='card'>";
                    echo "<h3>" . $row['Attractions'] . "</h3>";
                    echo "<img src='" . $row['Picture'] . "' alt='景點圖片'>";
                    echo "<p>" . $row['Address'] . "</p>";
                    echo "</div>";
                }
                echo "</div>";
            }
        }
    }
?>
</body>
</html>
