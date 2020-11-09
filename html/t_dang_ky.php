<!doctype html>
<html lang="vi">
<head>
    <tittle>KIỂM TRA KẾT NỐI THÔI</tittle>
    <meta http-equiv="refresh" content="1,url=trangchu.php">
    <meta charset="utf-8"/>
</head>
<body>
<?php 
   $MADK = $_POST["madk"];
  $hotendk = $_POST["tentkdk"];
   $hotenhienthi = $_POST["tentkht"];
   $SDT = $_POST["SDTDK"];
   $DIACHI = $_POST["DIACHIDK"];
   $NGAYSINH = $_POST["ngaysinhtkdk"];
   $MATKHAU = $_POST["mktkdk"];
   $XACNHAN = $_POST["mktkdkxn"];

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "QLCT";
   $conn = mysqli_connect($servername,$username,$password,$dbname);
   if(!$conn){
      die('Kết nối thất bại:'.mysqli_connect_error());
   }else{
       echo"kết nối thành công";
   }
   if($MADK === '' || $MADK === NULL || $hotendk === '' || $hotendk === NULL || $hotenhienthi === '' || $hotenhienthi === NULL || $SDT === '' || $SDT === NULL ||$DIACHI === '' || $DIACHI === NULL ||$NGAYSINH === '' || $NGAYSINH === NULL || $MADK === '' || $MADK === NULL || $XACNHAN === '' || $XACNHAN === NULL)
   {
       echo 'Bạn phải nhập đầy đủ thông tin ';
   }
   else
   {
    if($MATKHAU === $XACNHAN)
    {
         // $sql = "INSERT INTO dangnhap VALUES('$MADK','$hotendk','$hotenhienthi','$MADK','$NGAYSINH','$SDT','$DIACHI','NAM','$XACNHAN')";
         $sql = "CALL themtaikhoan('$MADK','$hotendk','$hotenhienthi','$MADK','$NGAYSINH','$SDT','$DIACHI','NAM','$XACNHAN')";
          mysqli_query($conn, $sql);
          echo 'Thêm thành công';
    }
    else
    {
        echo 'Mật khẩu và xác nhận mật khẩu phải trùng với nhau';
    }
   }
  
   mysqli_close($conn);

 ?>
</body>
</html>