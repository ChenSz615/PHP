<?php
   $link = @mysqli_connect( //加@->不要顯示錯誤訊息
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
      $SQL = "
      SELECT 
          guided_tour.Attractions, 
          COUNT(ticket.BookingAttractions) AS Number 
      FROM 
          guided_tour 
      LEFT JOIN 
          ticket 
      ON 
          guided_tour.Attractions = ticket.BookingAttractions
      WHERE 
          guided_tour.canBooking='是'
      GROUP BY 
          guided_tour.Attractions
      ";
      $result = mysqli_query($link, $SQL);
      }
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
       google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Attractions', 'Number']

          <?php
            while($row = mysqli_fetch_assoc($result)){
              $Attractions = $row["Attractions"];
              $Number = $row["Number"];
              echo ",['$Attractions',$Number]";
          }
          ?>
    
        ]);

        var options = {
          title: 'Number of People Booking Tickets for Attractions'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>