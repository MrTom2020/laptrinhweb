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
                        <form action="#"  method="POST" role="form" class="row" action="<?php echo $_SERVER['PHP_SELF'];?>">
                         <div class="col-sm-3">
                             <?php echo $thongbao; ?>
                         </div> 
                         
                         <img id="dt1" src="../tainguyenkhac/hinh_anh/hinh_background/bk2.png" class="image"/>
                         <img id="dt2" src="../tainguyenkhac/hinh_anh/hinh_dong_vat/dong_vat_so_1.png" class="image"/>
                         
                    </div>
                    <div class="col-sm-5" id="nut">
                          <button class="btn btn-secondary" data-dismiss="modal" aria-label="close">ĐĂNG XUẤT</button>
                         <button class="btn btn-secondary" data-dismiss="modal" aria-label="close">THOÁT</button>
                    </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
</body>

</html>