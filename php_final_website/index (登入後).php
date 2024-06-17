<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>旅遊網站</title>
    <?php
    session_start();
?>
    
    
    <style>
        /* 品牌 */
        .brand {
            position: absolute;
            top: 20px;
            left: 20px;
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
            background: linear-gradient(to bottom, #ffffff 10%, #ffffff 10%);
            display: flex;
            flex-direction: column;
        }
        .navigation {
            background-color: #ffffff;
            padding: 8px 10px;
            margin-right: 30px;
        }
        .navigation ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .navigation ul li {
            display: inline-block; 
            margin: 0 10px; 
        }
        .navigation ul li a {
            text-decoration: none;
            color: #333333;
            display: block; 
            padding: 10px;
        }
        .navigation ul li a:hover {
            background-color: #dddddd;
        }
        .full-width-image {
            height: 600px;
            width: 100%;
            display: block;
        }

        /* 縣市方  */
        .container {
            width: 300px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 300px;
            right: 600px;
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
            border-top: 10px solid #4285F4;
        }
        .card h3 {
            margin: 10px 0;
            font-size: 20px;
            color: #4285F4;
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
        .admin {
            margin-left: 10px; 
            font-size: 16px;
        }
        .logout {
            margin-left: 10px; 
            font-size: 16px;
        }
        .login-success {
            font-size: 16px; 
            color: black; 
            font-weight: bold; 
        }
    </style>
</head>
<body>
<div class="brand">
    <span class="ticket">Ticket</span><span class="y">y</span><span class="tour">Tour</span>
    <?php if (isset($_SESSION["check"]) && $_SESSION["check"] == "Yes"): ?>
        <a href="logout.php" class="logout">登出</a>
        <span class="login-success"><?php echo " 登入成功!"; ?></span>
    <?php else: ?>
        <a href="http://ticketytour.infinityfreeapp.com/tourwebsite/managerlogin.php" class="admin">管理者介面</a>
    <?php endif; ?>
</div>

<div class="navigation">
        <ul>
            <li><a href="http://ticketytour.infinityfreeapp.com/tourwebsite/index.php">景點導覽</a></li>
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
                    echo "<a href='detail.php?attraction=" . urlencode($row['Attractions']) . "'>";

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