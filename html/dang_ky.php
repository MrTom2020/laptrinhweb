<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="utf-8" />
</head>
<body>

<div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title" aria-labelledby="dangky">FORM ĐĂNG KÝ</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label ="close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
        <div class="container">
        <div class="row">
        <div class="col-sm-8 mt-5">
        <form form action="trangkiemtra.php"  method="get" role="form" class="row mt-5">
        <div class="form-group row mt-5">
           <label for="tentkdk">TÊN TÀI KHOẢN</label>
            <BR/>
         <input type="text" placeholder="Xin hãy nhập tài khoản " class="col-sm-10" id="tentkdk" name="tentkdk" />
         </div>
         <div class="form-group row mt-5">
           <label for="tentkht">TÊN HIỂN THỊ</label>
            <BR/>
         <input type="text" placeholder="Xin hãy nhập hiển thị " class="col-sm-10" id="tentkht" name="tentkht" />
         </div>
         <div class="form-group row mt-5">
           <label for="hinhtkdk">HÌNH ẢNH</label>
            <BR/>
         <input type="file" class="col-sm-10" id="hinhtkdk" name="hinhtkdk"/>
         </div>
         <div class="form-group row mt-5">
           <label for="SDT">SDT</label>
            <BR/>
         <input type="text" placeholder="Xin hãy nhập tài khoản " class="col-sm-10" id="SDT" name="SDT" />
         </div>
         <div class="form-group row mt-5">
           <label for="DIACHI">ĐỊA CHỈ</label>
            <BR/>
         <input type="text" placeholder="Xin hãy nhập tài khoản " class="col-sm-10" id="DIACHI" name="DIACHI" />
         </div>
         <div class="form-group row mt-3">
           <label for="ngaysinhtkdk">NGÀY SINH</label>
            <BR/>
         <input type="datetime-local"  class="col-sm-10" id="ngaysinhtkdk" name="ngaysinhtkdk" />
         </div>
         <div class="form-group row mt-3">
           <label>GIỚI TÍNH</label>
            <BR/>
         <select >
             <option value="1">NAM</option>
             <option value="0">NỮ</option>
         </select>
         </div>
          <div class="form-group row mt-3">
          <label for="mktk">MẬT KHẨU</label>
          <br/>
             <input class="col-sm-10" id="mktkdk" name="mktkdk" placeholder="Xin hãy nhập mật khẩu" type="password" />
           </div>
           <div class="form-group row mt-3">
          <label for="mktkdkxn">XÁC NHẬN MẬT KHẨU</label>
          <br/>
             <input class="col-sm-10" id="mktkdkxn" name="mktkdkxn" placeholder="Xin hãy xác nhận mật khẩu" type="password" />
           </div>
        <div class="modal-footer row mt-3">
             <input  type="submit" class="btn btn-primary" name="ok"> 
              <button class="btn btn-primary" data-dismiss="modal" aria-label="close">THOÁT</button>
         </div>
        </form>
        </div>
        <div class="form-group  col-sm-3 row md-4" style="border:1px solid #2cb84b">
        <img src="../tainguyenkhac/hinh_anh/hinh/hinhsosau.jpg" alt="hình đại diện" class="img-thumbnail" style="width:300px;height:300px;">
           </div>
        </div>
        </div>
        </div>
        </div>
        </div>

</body>
</html>