<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/chuyen_trang.css">
    <link rel="stylesheet" type="text/css" href="../css/css_dk.css">
    <link rel="stylesheet" type="text/css" href="../css/css_cua_trang_chu.css">
    <?php 
    session_start();
    $thongbao = isset($_SESSION['THONGBAO']) ? $_SESSION['THONGBAO']:'hiện tại chưa có thông báo';
     ?>
</head>
<body>
<div class="modal-dialog" role="document">
            <div class="modal-content" id="vi_tien" style="background-image: linear-gradient(to bottom right, #2eb84b, #fff);">

                <div class="modal-header">
                    <H4 class="modal-title text-center" aria-labelledby="vi_tien">FORM VÍ TIỀN</H4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="#"  method="POST" role="form" class="row mt-5" action="<?php echo $_SERVER['PHP_SELF'];?>">
                            
                            <div class="col-sm-10">
                            <?php include 'vi.php' ?> &#160; <input type="text" name="tienmat" class="form-check-input" style="border:1px solid;margin-left: 0.9em;">
                            </div>
                            <div class="col-sm-10">
                            <img src="https://img.icons8.com/emoji/48/000000/money-bag-emoji.png" for="tien"/> <input type="text" name="tien" style="border:1px solid ; margin-left: 0.2em;">
                            </div>
                            <div class="col-sm-10">
                            <img src="https://img.icons8.com/emoji/48/000000/money-bag-emoji.png" for="tien"/> <input type="text" name="tien" style="border:1px solid ; margin-left: 0.2em;">

                            </div>
                            <h4 class="text-center col-sm-7" > THÀNH VIÊN </h4>
                            <div class="col-sm-10">
                            <button type="button">Thêm thành viên</button>
                            </div>
                            <img src="../tainguyenkhac/hinh_anh/hinh_dong_vat/dong_vat_so_1.png" alt="con lợn cute" class="img-thumbnail" id="conlon1" style="float:right;">
                            
                            <img src="../tainguyenkhac/hinh_anh/hinh_background/bk2.png"/>
                            <div class="modal-footer row mt-3">
                        <input  type="submit" class="btn btn-primary" id='login1'> 
                        <button class="btn btn-primary" data-dismiss="modal" aria-label="close">THOÁT</button>
                        <button class="btn btn-primary" data-dismiss="modal" aria-label="close">XÓA VÍ</button>
                    </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
</body>

</html>