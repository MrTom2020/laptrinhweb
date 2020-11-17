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
   $sql = "CALL hienthithongke(5)";
   $KETNOI = mysqli_query($conn,$sql);
   $dd = array();
   $i = 0;
  while($row = mysqli_fetch_array($KETNOI))
  {
    //$row = mysqli_fetch_array($KETNOI);
    array_push($dd,array(
      "label"=> "Tiền shopping",
      "y"=> $row[0]),
      array(
        "label"=> "Tiền Mua sắm hằng ngày",
        "y"=> $row[1]),
    );
   // return;
    $i=$i+1;
    
  }
  $dataPoints7 = array(
    array("label"=> "Tiền shopping", "y"=> 50),
    array("label"=> "Tiền Mua sắm hằng ngày", "y"=> 9),
    array("label"=> "Tiền đầu tư", "y"=> 90)
  );
  //print_r($dd);
 echo "<pre>";
 print_r($dd);
 echo "</pre>";
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
       name: "Tháng 1",
       showInLegend: true,
       yValueFormatString: "$#,##0 K",
       dataPoints: <?php echo json_encode($dd, JSON_NUMERIC_CHECK); ?>
     },
     {
       type: "stackedColumn100",
       name: "Tháng 2",
       showInLegend: true,
       yValueFormatString: "$#,##0 K",
       dataPoints: <?php echo json_encode($dataPoints7, JSON_NUMERIC_CHECK); ?>
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
