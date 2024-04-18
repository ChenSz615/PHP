

<?php
include("include.inc");
echo "帳密輸入錯誤!登入失敗<br/>";
echo "3秒後回登入頁面...";

header("Refresh:3 ; url=index.php");

?>