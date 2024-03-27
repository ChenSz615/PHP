<meta charset="utf-8">

<?php
session_start();
echo "登入失敗<br/>";
echo "3秒後回登入頁面";

header("Refresh:3 ; url=hw0314_login.php");

?>