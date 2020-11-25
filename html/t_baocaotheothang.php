<?php 
   session_start();
   $username = "root";
   $dtname = "QLCT";
   $serverN = "localhost";
   $password = "";
   $conn = mysqli_connect($serverN,$username,$password,$dtname);
   $maid =  $_SESSION['Mand'];
   if($maid != '' && $maid != NULL)
   {
     $sql = "CALL baocaotheothang('$maid')";
     $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_array($result);
    $conlai = 100 - $row[0] - $row[1] - $row[2];
     $dd = array();
      array_push($dd,
      array(
      "label"=> "Tiền shopping",
      "y"=> $row[0]),
      array(
      "label"=> "Tiền Mua sắm hằng ngày",
      "y"=> $row[1]),
      array(
        "label"=> "Tiền đầu tư",
        "y"=> $row[2]),
      array(
      "label"=> "Tiền còn lại",
      "y"=> $conlai));
   }
  mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<script>
window.onload = function()
 {
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "BÁO CÁO THÁNG"
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#36454F",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($dd, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
