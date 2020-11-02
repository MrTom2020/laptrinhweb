<!doctype html>
<html lang="vi">
<head>
    <tittle>KIỂM TRA KẾT NỐI THÔI</tittle>
    <meta http-equiv="refresh" content="1,url=trangchu.php">
    <meta charset="utf-8"/>
    <?php session_start(); ?>
</head>
<body>
<?php 
   $tennhap = $_POST["tentk1"];
   $matkhaunhap = $_POST["mktk1"];
   $servername = "localhost";
   $username = "root";
   $_SESSION["HIEP"] = $_POST["tentk1"];
   $password = "";
   $dbname = "QLCT";
   $conn = mysqli_connect($servername,$username,$password,$dbname);
   if(!$conn){
      die('Kết nối thất bại:'.mysqli_connect_error());
   }else{
       echo"kết nối thành công";
   }
  $sql = "SELECT * FROM dangnhap";
  $ket_noi =mysqli_query($conn,$sql);
  if(mysqli_num_rows($ket_noi) > 0)
  {
      while($row = mysqli_fetch_assoc($ket_noi))
      {
            if($row['Usename'] == $tennhap && $row['password'] == $matkhaunhap)
            {
                $_SESSION["HIEP"] = $_REQUEST["tentk1"];
            }
            else
            {
               
            }

      }
     
  }
  else
  {
      echo "0 results";
  }
   mysqli_close($conn);
 ?>
</body>
</html>