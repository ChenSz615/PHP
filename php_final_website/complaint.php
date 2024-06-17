<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="utf-8">
    <title>客訴服務</title>
    <?php
    session_start();
    ?>
    <style>
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
        .navigation {
            padding: 10px 10px; 
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
        .upper-container {
            background-color: #ffffff;
            width: 100%;
            height: 10vh; 
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1; 
        }

        
        .lower-container {
            background-color: #B7CBEB;
            width: 100%;
            position: relative;
            z-index: 0; 
            margin-top: 10vh; 
            padding-bottom: 1000px; 
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .content {
            max-width: 800px;
            width: 100%;
            padding: 20px;
            text-align: center;
            margin: 0 auto; 
        }
        .content p {
            font-size: 25px;
            color: #555555;
            line-height: 1.5;
        }
        .feedback-container {
            background-color: #ffffff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            margin: 20px auto;
        }
        .feedback-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333333;
        }
        .feedback-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333333;
            text-align: left;
        }
        .feedback-container input[type="text"],
        .feedback-container input[type="email"], 
        .feedback-container input[type="tel"], 
        .feedback-container select,
        .feedback-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .feedback-container textarea {
            resize: vertical;
        }
        .feedback-container input[type="submit"] {
            background-color: #4285F4;
            color: #ffffff;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 16px;
            display: block;
            margin: 0 auto;
        }
        .feedback-container input[type="submit"]:hover {
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
    </div>

    <!-- 下半部分藍色背景容器 -->
    <div class="lower-container">
        <div class="content">
            <div class="detail-container">
            
    
    <div class="content">
        <p>我們重視每一位客戶的聲音。<br/>
        如果您在使用我們的產品或服務過程中遇到任何問題，<br/>
        或者對我們的服務有任何不滿意的地方，<br/>
        請告訴我們，我們將竭誠為您解決問題，<br/>
        並不斷改進，以提供更好的體驗。</p>
    </div>
    <div class="feedback-container">
        <h1>填寫您的問題</h1>
        <form action="reply_complaint.php" method="post">
            <label for="userId">帳號:</label>
            <input type="text" id="userId" name="userId" required>
            <label for="userEmail">Email:</label>
            <input type="email" id="userEmail" name="userEmail" required>
            <label for="userPhone">聯絡電話:</label>
            <input type="text" id="userPhone" name="userPhone">
            <label for="question">問題類型:</label>
            <select id="question" name="question">
                <option value="訂票問題">訂票問題</option>
                <option value="帳戶問題">帳戶問題</option>
                <option value="其他">其他</option>
            </select>
            <label for="userBookNo">訂單號碼:</label>
            <input type="text" id="userBookNo" name="userBookNo">
            <label for="comment">問題描述:</label>
            <textarea id="comment" name="comment" rows="10" cols="30"></textarea>
            <p>謝謝您的反饋</p>
            <input type="submit" value="提交">
        </form>
    </div>
</body>
</html>
