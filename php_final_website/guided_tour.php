<meta charset ="utf-8">
<html>
<?php
    session_start();
    ?>
<form method="post" action="guided_tour.php">
請選擇縣市:<br/><br/>
<select name="region" size="10">
<optgroup label="北部">
    <option value="台北市">台北市</option>
    <option value="新北市">新北市</option>
    <option value="基隆市">基隆市</option>
    <option value="桃園市">桃園市</option>
    <option value="宜蘭縣">宜蘭縣</option>
    <option value="新竹縣">新竹縣</option>
    <option value="新竹市">新竹市</option>
</optgroup>
<optgroup label="中部">
    <option value="苗栗縣">苗栗縣</option>
    <option value="臺中市">臺中市</option>
    <option value="彰化縣">彰化縣</option>
    <option value="南投縣">南投縣</option>
    <option value="雲林縣">雲林縣</option>
</optgroup>
<optgroup label="南部">
    <option value="嘉義縣">嘉義縣</option>
    <option value="嘉義市">嘉義市</option>
    <option value="台南市">台南市</option>
    <option value="高雄市">高雄市</option>
    <option value="屏東縣">屏東縣</option>
</optgroup>
<optgroup label="東部">
    <option value="台東縣">台東縣</option>
    <option value="花蓮縣">花蓮縣</option>
</optgroup>
</select>
<input type="submit" value="選擇">
</form>

<?php
$link = @mysqli_connect(
        'sql208.infinityfree.com',  // MySQL主機名稱 
        'if0_36649429',       // 使用者名稱 
        'DHX6Rhm2HVtPyqP',  // 密碼
        'if0_36649429__php_final');  // 預設使用的資料庫名稱

);

if(isset($_POST['region'])) {
    $City = $_POST['region']; 

    // SQL 語法
    $SQL = "SELECT Attractions, Picture, Address FROM guided_tour WHERE City = '$City'";
} 
else {
    $SQL = "SELECT Attractions, Picture, Address FROM guided_tour";

}

// 送出查詢
$result = mysqli_query($link, $SQL);

//顯示各景點
    echo "<table border='1'>";
    echo "<tr><th>景點名稱</th><th>圖片</th><th>地址</th></tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['Attractions'] . "</td>";
        echo "<td><img src='" . $row['Picture'] . "' alt='景點圖片'></td>";
        echo "<td>" . $row['Address'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
</html>

