<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="utf-8">
    <style>
<?php
    session_start();
?>

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
        .error-message, .success-message {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .error-message {
            color: red;
        }

        .success-message {
            color: green; 
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

    <img src="https://img.freepik.com/free-photo/view-travel-items-assortment-still-life_23-2149617645.jpg" alt="Travel Agency" class="full-width-image">
    
</body>
</html>


<?php
    $cardNo = $_POST["cardNo"];
    $cardExpirationDateMonth = $_POST["cardExpirationDateMonth"];
    $cardExpirationDateYear = $_POST["cardExpirationDateYear"];
    $cardSecurityCode = $_POST["cardSecurityCode"];

    if (!preg_match('/^\d{16}$/', $cardNo) ) {
        echo "<h2><div class='error-message'>卡號請輸入16位數字</div></h2>";
        echo "<div style='text-align: center;'>";
        echo "<h2 style='margin-right: 20px;'><a href='pay.php'>返回付款介面</a></h2>";
        echo "</div>";

  

    } 
    else if(!preg_match('/^\d{2}$/', $cardExpirationDateMonth)){
        echo "<h2><div class='error-message'>到期日請分別輸入2位數字</div></h2>";
        echo "<div style='text-align: center;'>";
        echo "<h2 style='margin-right: 20px;'><a href='pay.php'>返回付款介面</a></h2>";
        echo "</div>";

    }
    else if(!preg_match('/^\d{2}$/', $cardExpirationDateYear)){
        echo "<h2><div class='error-message'>到期日請分別輸入2位數字</div></h2>"; 
       echo "<div style='text-align: center;'>";
        echo "<h2 style='margin-right: 20px;'><a href='pay.php'>返回付款介面</a></h2>";
        echo "</div>";

    }
    else if(!preg_match('/^\d{3}$/', $cardSecurityCode)){
        echo "<h2><div class='error-message'>安全碼請輸入3位數字</div></h2>";
        echo "<div style='text-align: center;'>";
        echo "<h2 style='margin-right: 20px;'><a href='pay.php'>返回付款介面</a></h2>";
        echo "</div>";

    }
    else{
        echo "<h2><div class='success-message'>付款成功！</div></h2>";
    }
?>
