<?php
    session_start();
?>

<meta charset = "utf-8">

<?php
    $inputId = $_POST["inputId"];
    $inputPassword = $_POST["inputPassword"];
    $inputName = $_POST["inputName"];
    $inputGender = $_POST["inputGender"];
    $inputPhone = $_POST["inputPhone"];
    $inputEmail = $_POST["inputEmail"];
    $inputAddress = $_POST["inputAddress"];
    
    //連接資料庫
    $link = @mysqli_connect(
        'sql208.infinityfree.com',  // MySQL主機名稱 
        'if0_36649429',       // 使用者名稱 
        'DHX6Rhm2HVtPyqP',  // 密碼
        'if0_36649429__php_final');  // 預設使用的資料庫名稱
    mysqli_set_charset($link, "utf8");
     
    if(!$link)
    die("無法開啟資料庫!<br/>");
    else{
        //echo "資料庫開啟成功!";

        //SQL語法
        $SQL = "INSERT INTO member(Id, Password, Name,  Gender, Phone, Email, Address) VALUES('$inputId','$inputPassword','$inputName','$inputGender','$inputPhone','$inputEmail','$inputAddress')";
        
        //送出查詢
        if($result = mysqli_query($link, $SQL)){
            //echo "<br/>註冊成功";
            $_SESSION["register"] = "註冊成功！";
            header("Location: login.php");
        }
    }
       

?>