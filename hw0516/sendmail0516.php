<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/PHPMailer-master/src/Exception.php';
require '../PHPMailer/PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer/PHPMailer-master/src/SMTP.php';

$subject = $_POST["subject"];
$content = $_POST["content"];
$content = nl2br($content);

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'a0978528505@gmail.com';                     //SMTP username
    $mail->Password   = 'nxki vzlt idpk kfnv';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet    = 'utf-8';
    //Recipients
    $mail->setFrom('a0978528505@gmail.com', 'Mailer');


    //連資料庫
    $link = @mysqli_connect( //加@->不要顯示錯誤訊息
                'localhost',  // MySQL主機名稱 
                'root',       // 使用者名稱 
                'Hana3215321',  // 密碼
                'php_sendletter');  // 預設使用的資料庫名稱
    if(!$link)
        die("無法開啟資料庫!<br/>");
    else
        echo "資料庫開啟成功!";
    
    //SQL語法
    $SQL = "SELECT * FROM recipient";

    //送出查詢
    $result = mysqli_query($link, $SQL);

    //結果轉陣列
    while($row = mysqli_fetch_assoc($result)){
        
        $name = $row["name"];
        $Mail = $row["mail"];
        $mail->addAddress($Mail, $name);     //Add a recipient
    }
    $mail->addReplyTo('a0978528505@gmail.com', 'Information');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $content;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

mysqli_close($link);

?>