<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="utf-8">
    <title>門票代訂</title>
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
            background: linear-gradient(to bottom, #ffffff 10%, #ffffff 10%); 
            display: flex;
            flex-direction: column;
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
        .navigation {
            padding: 10px 10px; 
            margin-right: 0px;
        }
        .navigation ul {
            list-style-type: none;
            margin: 20px 0 0; 
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
        .full-width-image {
            height: 300px;
            width: 100%; 
            display: block;
            margin-bottom: 20px; 
        }
        .form-container {
            //max-width: 600px;
            margin: 0 auto;
            width: 1450px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            color: #4285F4;
            border-bottom: 2px solid #8C52FF;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333333;
        }
        .form-container input {
            width: calc(50% - 10px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }
        .form-container input.full-width {
            width: 100%;
        }
         .form-container input[type="submit"] {
            background-color: #4285F4;
            color: #ffffff;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            width: 150px; 
            border-radius: 5px;
            font-size: 16px;
            margin-left: 650px ; 
        }
        .form-container input[type="submit"]:hover {
            background-color: #8C52FF;
        }
          .full-width-image {
            height: 300px;
            width: 100%; 
            display: block;
            margin-bottom: 20px; 
        }
    </style>
</head>
<body>
<div class="brand">
    <span class="ticket">Ticket</span><span class="y">y</span><span class="tour">Tour</span>
</div>
<div class="navigation">
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

    <img src="https://img.freepik.com/free-photo/view-travel-items-assortment-still-life_23-2149617645.jpg" alt="Travel Agency" style="width: 100%;" class="full-width-image">


    <div class="form-container">
        <h2>信用卡付款資訊</h2>
        <form action="pay_check.php" method="post">
            <label for="cardNo">請輸入您的卡號:</label>
            <input type="text" id="cardNo" name="cardNo" class="full-width">

            <label for="cardExpirationDateMonth">請輸入您的到期日:</label>
            <input type="text" id="cardExpirationDateMonth" name="cardExpirationDateMonth">
            <span style="display: inline-block; width: 10px; text-align: center;">/</span>
            <input type="text" id="cardExpirationDateYear" name="cardExpirationDateYear">

            <label for="cardSecurityCode">請輸入您的安全碼:</label>
            <input type="text" id="cardSecurityCode" name="cardSecurityCode" class="full-width">

            <input type="submit" value="付款">
        </form>
    </div>
</body>
</html>





