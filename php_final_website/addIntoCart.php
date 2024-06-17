<?php
    session_start();
?>

<meta charset = "utf-8">

<?php
    $inputAttraction = $_POST["inputAttraction"];
    $inputDate = $_POST["inputDate"];
    $inputTime = $_POST["inputTime"];
    $ticketType = $_POST["ticketType"];
    $ticketNumber = $_POST["ticketNumber"];
    
    //連接資料庫
    $link = @mysqli_connect( //加@->不要顯示錯誤訊息
        'sql208.infinityfree.com',  // MySQL主機名稱 
        'if0_36649429',       // 使用者名稱 
        'DHX6Rhm2HVtPyqP',  // 密碼
        'if0_36649429__php_final');  // 預設使用的資料庫名稱
            mysqli_set_charset($link, "utf8");
    if(!$link)
    die("無法開啟資料庫!<br/>");
    else
        //echo "資料庫開啟成功!";

    //SQL語法
    if(isset($_SESSION["userId"]) && $_SESSION["userId"] != ""){
        $SQL = "INSERT INTO ticket(BookingAttractions, BookingDate, BookingTime,  BookingType, BookingNumber, BookerNo) VALUES('$inputAttraction','$inputDate','$inputTime','$ticketType','$ticketNumber','{$_SESSION['userId']}')";
    }
    else{
        echo "no userId";
    }
    

    //送出查詢
    if($result = mysqli_query($link, $SQL)){
        echo "<br/>新增成功";
    }
    echo "<br/><a href='cart.php'>查看購物車</a>";

?>