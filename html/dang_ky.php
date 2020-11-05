<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="utf-8" />
</head>
<body>

<div class="modal fade in" role="dialog" aria-labelledby="dangky" aria-hidden="false" id="dk1" tabindex="-1" style="border: 0px; display: block;">
        



    <meta charset="utf-8">



<div class="modal-dialog" role="document">
        <div class="modal-content col-sm-10">
        <div class="modal-header">
        <h4 class="modal-title text-center" aria-labelledby="dangky">FORM ĐĂNG KÝ</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
        <div class="container">
        <div class="row">
        <div class="col-sm-12">
        <form form="" action="trangkiemtra.php" method="get" role="form" class="row">
        <div class="form-group row">
           <label for="madk">Mã đăng ký</label>
            <br>
         <input type="text" placeholder="Xin hãy nhập ma " class="col-sm-10" id="madk" name="madk">
         </div>
        <div class="form-group row">
           <label for="tentkdk">TÊN TÀI KHOẢN</label>
            <br>
         <input type="text" placeholder="Xin hãy nhập tài khoản " class="col-sm-10" id="tentkdk" name="tentkdk">
         </div>
         <div class="form-group row mt-5">
           <label for="tentkht">TÊN HIỂN THỊ</label>
            <br>
         <input type="text" placeholder="Xin hãy nhập hiển thị " class="col-sm-10" id="tentkht" name="tentkht">
         </div>
         
         <div class="form-group row mt-5">
           <label for="SDT">SDT</label>
            <br>
         <input type="text" placeholder="Xin hãy nhập tài khoản " class="col-sm-10" id="SDT" name="SDT">
         </div>
         <div class="form-group row mt-5">
           <label for="DIACHI">ĐỊA CHỈ</label>
            <br>
         <input type="text" placeholder="Xin hãy nhập tài khoản " class="col-sm-10" id="DIACHI" name="DIACHI">
         </div>
         <div class="form-group row mt-3">
           <label for="ngaysinhtkdk">NGÀY SINH</label>
            <br>
         <input type="datetime-local" class="col-sm-10" id="ngaysinhtkdk" name="ngaysinhtkdk">
         </div>
         <div class="form-group row mt-3">
           <label>GIỚI TÍNH</label>
            <br>
            <input type="radio" name="sex" value="nam"><label for="sex">NAM</label> <input type="radio" name="sex" value="nu"><label for="sex">NỮ</label>
         </div>
          <div class="form-group row mt-3">
          <label for="mktk">MẬT KHẨU</label>
          <br>
             <input class="col-sm-10" id="mktkdk" name="mktkdk" placeholder="Xin hãy nhập mật khẩu" type="password">
           </div>
           <div class="form-group row mt-3">
          <label for="mktkdkxn">XÁC NHẬN MẬT KHẨU</label>
          <br>
             <input class="col-sm-10" id="mktkdkxn" name="mktkdkxn" placeholder="Xin hãy xác nhận mật khẩu" type="password">
           </div>
        <div class="modal-footer row mt-3">
             <input type="submit" class="btn btn-primary" name="ok"> 
              <button class="btn btn-primary" data-dismiss="modal" aria-label="close">THOÁT</button>
         </div>
        </form>
        </div>
       
        </div>
        </div>
        </div>
        </div>
        </div>


    </div>

</body>
</html>