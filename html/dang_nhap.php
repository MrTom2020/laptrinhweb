<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8" />

    <?php session_start(); ?>
</head>
<body>
<div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <H4 class="modal-title" aria-labelledby="dnhap">FORM ĐĂNG NHẬP</H4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="kiemtraketnoi.php"  method="POST" role="form" class="row mt-5"  action="<?php echo $_SERVER['PHP_SELF'];?>">
                            <div class="form-group row mt-3">
                                <label for="tentk">TÊN TÀI KHOẢN</label>
                                <BR/>
                                <input type="text" placeholder="Xin hãy nhập tài khoản " class="row=3 col-lg-5" id="tentk1" name="tentk1" />
                            </div>
                            <div class="form-group row mt-3">

                                <label for="mktk">MẬT KHẨU</label>
                                <br/>
                                <input class="row=3 col-lg-5" id="mktk1" name="mktk1" placeholder="Xin hãy nhập mật khẩu" type="password" />
                            </div>
                            <img src="../tainguyenkhac/hinh_anh/hinh_dong_vat/dong_vat_so_1.png" alt="con lợn cute" class="img-thumbnail" id="conlon1">
                            
                            <img src="../tainguyenkhac/hinh_anh/hinh_background/bk2.png"/>
                            <div class="modal-footer row mt-3">
                        <input  type="submit" class="btn btn-primary"> 
                        <button class="btn btn-primary" data-dismiss="modal" aria-label="close">THOÁT</button>
                    </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
</body>

</html>