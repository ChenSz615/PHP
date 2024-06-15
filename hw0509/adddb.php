<meta charset = "utf-8">

<?php
    session_start();
?>

<?php
    $sNo = $_POST["sNo"];
    $sName = $_POST["sName"];
    $Dept = $_POST["Dept"];
    $Ads = $_POST["Ads"];
    $inputFile = $_FILES["inputFile"];

    //連接資料庫
    $link = @mysqli_connect( //加@->不要顯示錯誤訊息
        'localhost',  
        'root',       
        'Hana3215321',  
        'school');  

    if (!isset($_FILES["inputFile"])) {
        echo "没有文件上傳<br/>";
        exit;
    }

    // 處理文件上傳
    $ext = pathinfo($_FILES["inputFile"]["name"], PATHINFO_EXTENSION);
    $uploadDir = __DIR__ . '/pic/'; //相對路徑
    
    $uploadFile = $uploadDir . time() . '.' . $ext;

    // 顯示上傳文件訊息
    echo "臨時文件路徑: " . $_FILES["inputFile"]["tmp_name"] . "<br/>";
    echo "目標文件路徑: " . $uploadFile . "<br/>";

    // 检查上傳文件錯誤代碼
    if ($_FILES["inputFile"]["error"] !== UPLOAD_ERR_OK) {
        echo "文件上傳錯誤 錯誤代碼: " . $_FILES["inputFile"]["error"] . "<br/>";
        exit;
    }

    // 進行文件上傳
    if (move_uploaded_file($_FILES["inputFile"]["tmp_name"], $uploadFile)) {
        echo "檔案上傳成功<br/>";
    } else {
        echo "檔案上傳失敗<br/>";
        exit;
    }
    //SQL語法
    $SQL = "INSERT INTO student(sNo,sName, Dept,Ads,Picture) VALUES('$sNo','$sName','$Dept','$Ads','$uploadFile')";

    //送出查詢
    if($result = mysqli_query($link, $SQL)){
        echo "<br/>新增成功";
    }
    echo "<br/><a href='index.php'>查看資料庫資料</a><br/>";
?>

<?php
    echo "檔案名稱: ".$_FILES["inputFile"]["name"]."<br/>";//真實檔名
    echo "暫存檔名: ".$_FILES["inputFile"]["tmp_name"]."<br/>";
    echo "檔案尺寸: ".$_FILES["inputFile"]["size"]."<br/>";
    echo "檔案種類: ".$_FILES["inputFile"]["type"]."<hr/>";



    if(copy($_FILES["inputFile"]["tmp_name"],$uploadFile)){
        echo "檔案上傳成功";
        unlink($_FILES["inputFile"]["tmp_name"]);
    }
?>