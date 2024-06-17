<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketyTour</title>
    <style>
    /* 品牌 */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            position: relative; 
            overflow: hidden; 
        }
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

        /* 登入失敗提示 */
        .login-failed {
            text-align: center;
            margin-top: 20px;
            font-size: 20px;
        }

        .login-failed p {
            margin-bottom: 10px;
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

    <div class="login-failed">
        <p>登入失敗</p>
        <p>3秒後返回登入畫面</p>
    </div>

    <?php
        session_start();
        header("Refresh: 3; url=login.php");
        exit();
    ?>
</body>
</html>
