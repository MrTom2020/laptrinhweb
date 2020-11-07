<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8"/>
</head>
<body>
  <div class="modal fade" role="dialog" aria-labelledby="vi" aria-hidden="true" id="vi" tabindex="-1">
        <?php include'g_vi.php' ?>
    </div>
    <div class="modal fade" role="dialog" aria-labelledby="nhom" aria-hidden="true" id="nhom" tabindex="-1">
        <?php include'g_nhom.php' ?>
    </div>
  <div class="container">
    <div class="col-sm-4" style="padding-bottom:5%;">
    &ensp; <?php include'vi.php' ?><br/>
     <button data-toggle="modal" data-target="#vi"> Ví của tôi</button>
    </div>
    <div class="col-sm-4" style="padding-bottom:5%;">
    &ensp;<?php include'nhom.php' ?><br/>
    <button data-toggle="modal" data-target="#nhom">Nhóm chi tiêu</button>
    </div>
   
    <div class="col-sm-4" style="padding-bottom:5%;">Cài đặt</div>
    <div class="col-sm-4" style="padding-bottom:5%;">
    &ensp;<?php include'nhom.php' ?><br/>
    Tiện ích
    </div>
    
  </div>
</body>
</html>