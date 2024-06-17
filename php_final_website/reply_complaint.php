<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title>客戶意見回饋</title>
    <meta charset ="utf-8">

<?php
    $userId = $_POST["userId"];
    $userEmail = $_POST["userEmail"];
    $userPhone = $_POST["userPhone"];
    $question = $_POST["question"];
    $userBookNo = $_POST["userBookNo"];
    $comment = $_POST["comment"];

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    
    $mail = new PHPMailer(true);
    
    try {
        $mail->SMTPDebug = false;                      
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                  
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'yqiu9610@gmail.com';                     
        $mail->Password   = 'ltms ztxd sqlm donr';                  
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
        $mail->Port       = 465;                                 
        $mail->CharSet    = 'utf-8';

        $mail->setFrom('yqiu9610@gmail.com', 'TicketyTour');
        $mail->addAddress($userEmail);
        $mail->addReplyTo('yqiu9610@gmail.com', 'Information');
    
        //Content
        $mail->isHTML(true);
        $mail->Subject = "客訴回覆";
        $mail->Body    = 
        "親愛的".$userId."您好，<br/>
        感謝您聯繫我們，並告知我們您遇到的問題。我們非常重視您的反饋，並對給您帶來的不便深感抱歉。<br/>
        
        您的問題詳情如下：<br/>
        問題類型:".$question."<br/>
        問題描述:".$comment."<br/>
        我們已經收到您的客訴，並立即展開調查。";
    
        $mail->send();
        $_SESSION["message"] = "已提交您的客訴";
        header('Location: ../index.php');
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>