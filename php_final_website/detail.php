<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>景點詳細資訊</title>
    <?php
    session_start();
    ?>
    <style>
        /* 上半部分白色背景容器 */
        .brand {
            position: absolute; /* 設置.brand絕對位置 */
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
        .navigation {
            padding: 10px 10px; /* 調整導覽行的内邊距 */
            margin-right: 0px;
        }
        .navigation ul {
            list-style-type: none;
            margin: 20px 0 0; /*數字越大越往下 */
            padding: 0;
            text-align: center;
        }
        .navigation ul li {
            display: inline;
            margin: 30px;
        }
        .navigation ul li a {
            text-decoration: none;
            color: #333333;
        }
        .navigation ul li a:hover {
            background-color: #dddddd;
        }
        .upper-container {
            background-color: #ffffff;
            width: 100%;
            height: 10vh; /* 設置上半部分容器的高度 */
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1; /* 確保在上面 */
        }

        /* 下半部分藍色背景容器 */
        .lower-container {
            background-color: #B7CBEB;
            width: 100%;
            position: relative;
            z-index: 0; /*  確保在下面 */
            margin-top: 10vh; /* 與上半部分容器高度一致 */
            padding-bottom: 1000px; 
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .content {
            padding: 20px;
        }
        
        .detail-container img {
            width: 100%;
            max-width: 600px;
        }

        .detail-container p, .detail-container h2 {
            margin: 10px 0;
        }

        .detail-container a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4285F4;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }

        .detail-container a:hover {
            background-color: #3367D6;
        }

       .return-btn {
            display: inline-block;
            margin-top: 500px;
            padding: 10px 20px;
            background-color: #4285F4;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-left: 20px;
        }

        .return-btn:hover {
            background-color: #3367D6;
        }
    </style>
</head>
<body>
    <!-- 上半部分白色背景容器 -->
    <div class="upper-container">
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
            session_start();
        ?>
    </div>

    <!-- 下半部分藍色背景容器 -->
    <div class="lower-container">
        <div class="content">
            <div class="detail-container">
                <?php
   
                $link = @mysqli_connect(
                    'sql208.infinityfreeapp.com',
                    'if0_36649429',
                    'DHX6Rhm2HVtPyqP',
                    'if0_36649429__php_final'
                );
                mysqli_set_charset($link, "utf8");

                mysqli_set_charset($link, "utf8");

                if (isset($_GET['attraction'])) {
                    $attraction = urldecode($_GET['attraction']);

                    // SQL 
                    $SQL = "SELECT City, Attractions, Introduction, Address, Business_hours, CanBooking, Picture FROM guided_tour WHERE Attractions = '$attraction'";
                    $result = mysqli_query($link, $SQL);

                    // 景點詳細資訊
                    if ($row = mysqli_fetch_array($result)) {
                        echo "<h2>" . $row['Attractions'] . "</h2>";
                        echo "<img src='" . $row['Picture'] . "' alt='景點圖片'>";
                        echo "<p><strong>城市:</strong> " . $row['City'] . "</p>";
                        echo "<p><strong>介紹:</strong> " . $row['Introduction'] . "</p>";
                        echo "<p><strong>地址:</strong> " . $row['Address'] . "</p>";
                        echo "<p><strong>營業時間:</strong> " . $row['Business_hours'] . "</p>";
                        echo "<p><strong>是否可預訂:</strong> " . ($row['CanBooking'] == '是' ? '是' : '否') . "</p>";
                        if ($row['CanBooking'] == '是') {
                            echo "<a href='booking_ticket.php'>訂票!</a>";
                        }
                         if(isset($_SESSION["check"]) && $_SESSION["check"] == "Yes") {
                            echo '<a href="http://ticketytour.infinityfreeapp.com/tourwebsite/index.php" class="return-btn">返回導覽</a>';
                        } else {
                            echo '<a href="http://ticketytour.infinityfreeapp.com/" class="return-btn">返回導覽</a>';
                        }
                        
                    } else {
                        echo "<p>找不到景點詳細信息。</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>



