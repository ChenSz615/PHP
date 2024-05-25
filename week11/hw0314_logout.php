<meta charset="utf-8">
<?php
session_start();
unset($_SESSION["check"]);//清為空值
header("Location:hw0314_login.php");
?>
