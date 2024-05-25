<html>
<?php
session_start();
if (!isset($_SESSION["check"]) || $_SESSION["check"]=="no"){//若直接輸入網址則無法登入
    header("Location:hw0314_login.php");
}

?>

<!--<div style="background-color:#7B5B4D">HTML更換背景色 -->
<style> /* CSS */
body {
        /* 设置背景颜色 */
        background-color: lightblue ;
        /* 或者设置背景图片 */
       /* background-image: url('url'); */
        /* 背景图片平铺方式 */
        /* background-repeat: no-repeat; */
        /* 背景图片定位方式 */
        /* background-position: center; */
        /* 背景图片固定 */
        /* background-attachment: fixed; */
        /* 如果设置了背景图片，可以添加背景颜色作为备用 */
        /* background-color: lightblue; */
}
</style>

<meta charset="utf-8">
---------------------------------------------------------------------------------------------------------------------------</br>
12月是資管系最忙碌的月份!可靠的系學會幫資管系的大家辦了屬於我們的資管週!!<br/>
而其中最受矚目的就是一年一度的資管晚會了!!晚會會有抽獎活動、卡拉OK大賽、才藝表演<br/>
趕快來參加吧!!!資管晚會日期:2023/12/25(一)<br/>
--------------------------------------------------------------------------------------------------------------------------</br>
<br/><!--這是註解-->
<form action="hw0314_result.php" method="post">
姓名:<input type="text" name="sName" value="" placeholder="請輸入全名"><br/>
學號:<input type="text" name="sNumber" value=""><br/>
電子郵件:<input type="email" name="sEmail" value=""><br/>
是否參加:<input type="radio" name="sJoined" value="true">好!!!
        <input type="radio" name="sJoined" value="false">這次先不要..
<br/>

是否有繳系費:(有繳交者收100元 無繳交者收200元)<input type="radio" name="sPayed" value="true">有
                                            <input type="radio" name="sPayed" value="false">沒有
<br/>

對以下哪些活動有興趣!(我們會作為以後辦資管晚會的參考!!!)
<input type="checkbox" name="sActivity[]" value="桌遊">桌遊
<input type="checkbox" name="sActivity[]" value="團康">團康
<input type="checkbox" name="sActivity[]" value="麻將">麻將
<input type="checkbox" name="sActivity[]" value="電競比賽">電競比賽
<input type="checkbox" name="sActivity[]" value="RPG">RPG
<br/>

參加晚會者都有小禮物!請選擇以下編號(可複選):
<select name="sNum[]" multiple>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>

<br/>
<br/>
<input type="submit" value="送出">
<input type="reset" value="重新輸入">





</form>


</html>