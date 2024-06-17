<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="utf-8">
    <title>關於我們</title>
    <?php
    session_start();
    ?>
    <style>
         /* 品牌 */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            position: relative; 
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

        /* 關於我們和聯絡我們部分 */
        .content {    
            max-width: 1480px;  /* 框框大小 */
            width: 100%; /* 設置寬度 100% */
            margin: 20px auto; /* 居中顯示*/
            padding: 10px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .content h1, .content h2 {
            color: #4285F4;
            border-bottom: 2px solid #8C52FF;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .content p {
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .contact-info {
            font-size: 1.1em;
        }
        .contact-info span {
            font-weight: bold;
        }
      .full-width-image {
            height: 600px;
            width: 100%; /* 設置圖片寬度 */
            display: block;
            //margin: 50px auto; /* 圖片居中 */
            //https://www.feast-magazine.co.uk/wp-content/uploads/2021/01/elizeu-dias-RN6ts8IZ4_0-unsplash-1900x1267.jpg 
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


    <img src="https://www.closecareer.com/wp-content/uploads/travel-agency.jpg" alt="Travel Agency" class="full-width-image" >
 
    <div class="content">
        <h1>關於我們</h1>
        <p>
            在現代快節奏的生活中，人們對於旅行和探索新的景點有著無比的渴望，
            我們推出了一個讓您輕鬆預訂世界各地景點門票的專業平台。
            不論您是一位獨自旅行的冒險家、一個家庭計劃周末出遊的親子團體，還是一個企業組織的員工旅遊，
            我們都能滿足您的需求，為您提供一站式的旅遊服務。
            讓我們成為您旅行的最佳夥伴，一起探索世界的美好！
        </p>

        <h1>聯絡我們</h1>
        <div class="contact-info">
            <p><span>聯絡電話:</span> 09xxxxxxx</p>
            <p><span>聯絡信箱:</span> yqiu9610@gmail.com</p>
            <p><a href="complaint.php"">客訴服務</a></p>
        </div>
    </div>
</body>
</html>
