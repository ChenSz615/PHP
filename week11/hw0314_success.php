<meta charset="utf-8">

<?php //他應該可刪!!!!!!!!!!!!!!!!!
session_start();    
if (isset($_SESSION["check"])){
    if($_SESSION["check"]="yes"){
        header("Location:hw0314_form.php");
    
    }
    else{//session=no
        echo "非法登入網站!<br/>3秒後回登入頁面";
        header("Refresh:3 ; url=hw0314_login.php");
    }

}else{//session為空值
    echo "非法登入網站!!<br/>3秒後回登入頁面";
    header("Refresh:3 ; url=hw0314_login.php");

}



?>