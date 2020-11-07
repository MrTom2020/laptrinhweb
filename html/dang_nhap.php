<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8" />

    <?php 
    session_start();
    $thongbao = isset($_SESSION['THONGBAO']) ? $_SESSION['THONGBAO']:'hiện tại chưa có thông báo';
     ?>
</head>
<body>
<div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <H4 class="modal-title" aria-labelledby="dnhap">FORM THÔNG BÁO</H4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="#"  method="POST" role="form" class="row mt-5" action="<?php echo $_SERVER['PHP_SELF'];?>">
                            <?php 
                                echo $thongbao;
                            ?>
                            
                            <img src="../tainguyenkhac/hinh_anh/hinh_dong_vat/dong_vat_so_1.png" alt="con lợn cute" class="img-thumbnail" id="conlon1">
                            
                            <img src="../tainguyenkhac/hinh_anh/hinh_background/bk2.png"/>
                            <div class="modal-footer row mt-3">
                        <input  type="submit" class="btn btn-primary" id='login'> 
                        <button class="btn btn-primary" data-dismiss="modal" aria-label="close">THOÁT</button>
                        <button class="btn btn-primary" data-dismiss="modal" aria-label="close">ĐĂNG XUẤT TÀI KHOẢN</button>
                    </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
</body>

</html>