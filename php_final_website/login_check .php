<?php
session_start();


// 連接資料庫
$link = @mysqli_connect(
    'sql208.infinityfree.com',  // MySQL主機名稱 
    'if0_36649429',             // 使用者名稱 
    'DHX6Rhm2HVtPyqP',          // 密碼
    'if0_36649429__php_final'   // 預設使用的資料庫名稱
);
mysqli_set_charset($link, "utf8");

if (!$link) {
    die("無法開啟資料庫!<br/>");
} else {
   
    $inputId = $_POST["inputId"];
    $inputPassword = $_POST["inputPassword"];

    //管理員的帳號密碼!!!!!
    $adminId = "admin";
    $adminPassword = "admin123";

    // 查詢所有會員帳戶
    $SQL = "SELECT * FROM member";
    $result = mysqli_query($link, $SQL);

    while ($row = mysqli_fetch_assoc($result)) {
    if ($inputId == $adminId && $inputPassword == $adminPassword) {
        // 如果是管理員登入
        header("Location: admin.php");
        exit(); 
    } else if ($inputId == $row["Id"] && $inputPassword == $row["Password"]) {
        // 如果是普通用戶登入
        $_SESSION["check"] = "Yes";
        sleep(1);
        header("Location: success.php");
        exit(); 
    }
}

        // 如果没有匹配成功
        $_SESSION["check"] = "No";
        sleep(1);
        header("Location: fail.php");
        exit(); 
}
?>
