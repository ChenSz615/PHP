<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>門票代訂</title>

<?php
    session_start();
    
    if (!isset($_SESSION["check"]) || $_SESSION["check"] != "Yes") {
        echo "<script>alert('請先登入會員！');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
        exit();
    }
?>



    <style>
    .brand {
            position: absolute; /* 設置.brand絕對位置 */
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
        .navigation {
            padding: 10px 10px; /* 調整導覽行的内邊距 */
            margin-right: 0px;
        }
        .navigation ul {
            list-style-type: none;
            margin: 20px 0 0; /* 數字越大越往下 */
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
            z-index: 0; /* 确保在下面 */
            margin-top: 10vh; /* 與上半部分容器高度一致 */
            padding-bottom: 1000px; /* 使滾動條可以滾動到底部 */
        }


        .content {
            padding: 20px;
        }

        .booking-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
        }

        .booking-container img {
            width: 100%;
            max-width: 600px;
        }

        .booking-container p, .booking-container h2 {
            margin: 10px 0;
        }

        .booking-container label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        .booking-container input,
        .booking-container select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .booking-container input[type="radio"] {
            width: auto;
            margin-right: 10px;
        }

        .booking-container input[type="submit"] {
            background-color: #4285F4;
            color: #ffffff;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .booking-container input[type="submit"]:hover {
            background-color: #3367D6;
        }
    </style>
</head>
<body>
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
    </div>

    <div class="lower-container">
        <div class="content">
            <div class="booking-container">
                <?php
                  session_start();
                    $link = @mysqli_connect(
                        'sql208.infinityfree.com',
                        'if0_36649429',
                        'DHX6Rhm2HVtPyqP',
                        'if0_36649429__php_final'
                    );
                    mysqli_set_charset($link, "utf8");

                    if (!$link) {
                        die("無法開啟資料庫!<br/>");
                    }
                    
                    $SQL = "SELECT * FROM guided_tour WHERE canBooking = '是'";
                    $result = mysqli_query($link, $SQL);

                    echo "<form action='addIntoCart.php' method='post'>";
                    echo "<b><font size='4'>門票代訂服務</font></b><br/>";
                    echo "您想訂購的景點是:<select name='inputAttraction'>";
                    
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<option value='" . htmlspecialchars($row['Attractions']) . "'>" . htmlspecialchars($row['Attractions']) . "</option>";
                    }

                    echo "</select><br/>";
                    echo "您想訂購的日期是:<input type='date' name='inputDate' value=''><br/>";
                    echo "您想訂購的時間是:<input type='time' name='inputTime' value=''><br/>";
                    echo "您想訂購的票種是:<div class='ticket-options'>";
                    echo "全票<input type='radio' id='ticketType1' name='ticketType' value='全票'><label for='ticketType1'></label>";
                    echo "半票<input type='radio' id='ticketType2' name='ticketType' value='半票'><label for='ticketType2'></label>";
                    echo "</div>";
                    echo "您想訂購的數量是:<input type='number' name='ticketNumber' value=''><br/>";
                    echo "<input type='submit' value='加入購物車'><br/>";
                    echo "</form>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>
