<!doctype html>
<html lang="vi">
<head>
    <tittle>KIỂM TRA KẾT NỐI THÔI</tittle>
    <meta http-equiv="refresh" content="0.1,url=../web/">
    <meta charset="utf-8"/>
   
</head>
<body>
<?php 
     session_start();
   $tennhap = htmlspecialchars($_POST["tentk1"]);
   $matkhaunhap = htmlspecialchars($_POST["mktk1"]);
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "QLCT";
   $conn = mysqli_connect($servername,$username,$password,$dbname);
  $sql = "SELECT * FROM dangnhap";
  $ket_noi =mysqli_query($conn,$sql);
  if(mysqli_num_rows($ket_noi) > 0)
  {
      while($row = mysqli_fetch_assoc($ket_noi))
      {
            if($row['Usename'] == $tennhap && $row['password'] == $matkhaunhap)
            {
               echo   $row["Usename"] . 
               $row["password"];
                $_SESSION['tentaikhoan1'] = $tennhap;
                $_SESSION['tentaikhoan'] = $row['hoten'];
                $_SESSION["password1"] = $matkhaunhap;
                $sql1 = "SELECT MANGUOIDUNG('$tennhap','$matkhaunhap',0)";
                 $resut1 = mysqli_query($conn,$sql1);
               $row1 = mysqli_fetch_array($resut1);
               $sql2 = "SELECT kiemtranguoidung('$row1[0]',NULL)";
               $_SESSION['Mand'] = $row1[0];
                 $resut2 = mysqli_query($conn,$sql2);
               $row2 = mysqli_fetch_array($resut2);
                $_SESSION['tui'] = $row2[0];
                $_SESSION["logged"] = true;
                echo $_SESSION['tentaikhoan'];
                header('Location: http://localhost:8080/html/trangchu.php');
                exit();
            
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