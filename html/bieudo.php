<?php 
    $cot1 =array(
      array("label"=> "tiền mua sắm" ,"y" => 23),
      array("label"=> "tiền mua sắm" ,"y" => 13),
      array("label"=> "tiền mua sắm" ,"y" => 33),
      array("label"=> "tiền mua sắm" ,"y" => 43),
      array("label"=> "tiền mua sắm" ,"y" => 63),
      array("label"=> "tiền mua sắm" ,"y" => 83),
      array("label"=> "tiền mua sắm" ,"y" => 33),
      array("label"=> "tiền mua sắm" ,"y" => 23),
      array("label"=> "tiền mua sắm" ,"y" => 13),
      array("label"=> "tiền mua sắm" ,"y" => -23),
      array("label"=> "tiền mua sắm" ,"y" => 23),
      array("label"=> "tiền mua sắm" ,"y" => 53),
      array("label"=> "tiền mua sắm" ,"y" => 23),
      array("label"=> "tiền mua sắm" ,"y" => 23)
    );
    $cot2 =array(
      array("label"=> "tiền mua sắm" ,"y" => 23),
      array("label"=> "tiền mua sắm" ,"y" => 23),
      array("label"=> "tiền mua sắm" ,"y" => 13),
      array("label"=> "tiền mua sắm" ,"y" => -23),
      array("label"=> "tiền mua sắm" ,"y" => 23),
      array("label"=> "tiền mua sắm" ,"y" => 13),
      array("label"=> "tiền mua sắm" ,"y" => 33),
      array("label"=> "tiền mua sắm" ,"y" => 43),
      array("label"=> "tiền mua sắm" ,"y" => 63),
      array("label"=> "tiền mua sắm" ,"y" => 83),
      array("label"=> "tiền mua sắm" ,"y" => 33),
      array("label"=> "tiền mua sắm" ,"y" => 23),
      array("label"=> "tiền mua sắm" ,"y" => 23),
      array("label"=> "tiền mua sắm" ,"y" => 53)
    );

?>
<!doctype html>
<htlm lang="vi">
<head>
<script>
  window.onload = function()
  {
    var chart =new CanvasJS.Chart("bieudoo",{
      title:{
        text:"tháng"
      },
      theme:"light4",
      animationEnabled:true,
      toolTip:{
        shared:true,
        reversed:true
      },
      axisY:{
        suffix:"%"
      },
      data:[
        {
          type:"stackedColumn100",
          name:"HHHH",
          showInLegend:true,
          xValueFormatString:"$#,##0,k",
          dataPoints:<?php echo json_encode($cot1,JSON_NUMERIC_CHECK); ?>
        },
        {
          type:"stackedColumn100",
          name:"HQHHH",
          showInLegend:true,
          xValueFormatString:"$#,##0,k",
          dataPoints:<?php echo json_encode($cot2,JSON_NUMERIC_CHECK); ?>
        }
      ]
    })
    chart.render();
  }
</script>
</head>
<body>
<div id="bieudoo" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</htlm>