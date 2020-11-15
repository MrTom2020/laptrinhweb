<?php 
   $username = "root";
   $dtname = "QLCT";
   $serverN = "localhost";
   $password = "";
   $conn = mysqli_connect($serverN,$username,$password,$dtname);
   if(!$conn)
   {
     die('kết nối thất bại'.mysqli_connect_error());
   }
   else
   {
     echo 'KẾT NỐI THÀNH CÔNG';
   }
   $sql = "CALL hienthithongke()";
   $KETNOI = mysqli_query($conn,$sql);
   $dd = array();
   $i = 0;
  while($row = mysqli_fetch_array($KETNOI))
  {

    array_push($dd,$row);
    $i=$i+1;
  }
  print_r($dd);
  echo $dd["DailyMoney"][2];
  mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <script>
    window.onload = function ()
     {
 
 var chart1 = new CanvasJS.Chart("chartContainer", {
   title: {
     text: "Spending of Money Based on Household Composition"
   },
   theme: "light1",
   animationEnabled: true,
   toolTip:{
     shared: true,
     reversed: true
   },
   
   data: 
   [
     {
       type: "stackedColumn100",
       name: "Housing",
       showInLegend: true,
       yValueFormatString: "$#,##0 K",
       dataPoints: <?php echo json_encode($dd, JSON_NUMERIC_CHECK); ?>
     }
   ]
 });
 chart1.render();
    }
  </script>
  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
