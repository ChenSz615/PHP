<meta charset ="utf-8">
<?php
    session_start();
?>


<style>
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
            background: linear-gradient(to bottom, #ffffff 10%, #B7CBEB 10%); 
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
            margin: 30px 0 0; 
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
/* 會員登入部分 */
        .login-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .login-content {
            display: flex;
            align-items: center;
        }
        .login-form {
            background-color: #ffffff;
            padding: 20px; 
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 90%; 
            max-width: 400px; 
            max-height: 70vh;
            overflow: auto; 
            margin: 0 20px; 
        }
        .login-form h2 {
            text-align: center;
            color: #4285F4;
            border-bottom: 2px solid #8C52FF;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .login-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333333;
        }
        .login-form input, .login-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px; 
            border: 1px solid #cccccc;
            border-radius: 5px;
        }
        .login-form input[type="submit"] {
            background-color: #4285F4;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }
        .login-form input[type="submit"]:hover {
            background-color: #8C52FF;
        }

        .side-image {
            width: 500px; 
            height: auto; 
            margin: 10px; 
        }

        .login-container {
            display: flex; 
            align-items: center; 
        }

        .left-image {
            height:100%;
            width: 600px; 
            margin: 10px;

        }

        .right-image {
            width: 600px; 
            height: auto; 
            margin: 10px; 

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

    <div class="login-container">
        <img src="https://img.etimg.com/thumb/width-1200,height-1200,imgsize-93834,resizemode-75,msid-65970918/magazines/panache/training-in-aircraft-etiquette-needed.jpg" alt="Left Image" class="side-image">
    <div class="login-form">
            <?php
                if (isset($_SESSION["register"])) {
                echo $_SESSION["register"];
                unset($_SESSION['register']);  // 顯示後清除消息
                }
            ?>
            <h2>管理員登入</h2>
                <form action = "login_check.php" method = "post">
            <b><font size='4'>管理員登入</font></b><br/><br/>
            帳號:
            <input type = "text" name = "inputId" value = "" required><br/>
            密碼:
            <input type = "password" name = "inputPassword" value = "" required><br/>
            
            <input type = "submit" value = "登入">
        </form>
        </div>
        <img src="https://images.saymedia-content.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:eco%2Cw_1200/MjAwMTUwMjI4Mzc1NDQ2NjM2/disadvantages-of-travelling-by-plane.jpg" alt="Right Image" class="side-image">
    </div>
</body>
                
</html>













