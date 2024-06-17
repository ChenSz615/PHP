<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>後台</title>
    <style>
        /*全局 */
        body {
            font-family: Arial, sans-serif;
            background-color: #CDCDFF;
            padding: 20px;
            display: flex;
            justify-content: center; /* 水平居中 */
            align-items: center; /* 垂直居中 */
            height: 100vh;
            margin: 0;
        }
        
        /* 容器 */
        .container {
            max-width: 800px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* 居中内容 */
        }
        
        /* 標題 */
        h1 {
            color: #4285F4;
        }
        
        /* 連結 */
        a {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background-color: #4285F4;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        a:hover {
            background-color: #3367D6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>後台管理</h1>
        <a href='reply_complaint.php'>客訴管理</a>
        <a href='member_data.php'>會員資料管理</a>
        <a href='cart_data.php'>購物車商品管理</a>
        <a href='data_analyze.php'>訂票分析</a>
        <a href='managerlogout.php'>登出管理員</a> 
    </div>
</body>
</html>
