<?php
            session_start();
            $TENDN = $_SESSION['tentaikhoan11'];
            $MATKHAU = $_SESSION["password1"] ;
            $lct = $_POST['nhomchitieu'];
            $tienct = $_POST['giatritieu'];
            $mota1 = $_POST['mota'];
            $ngaygd = $_POST['ngaygd'];
            $servername = "localhost";
             $username = "root";
             $password = "";
             $dbname = "QLCT";
            $conn = mysqli_connect($servername,$username,$password,$dbname);
            if(!$conn)
            {
                  die('Kết nối thất bại:'.mysqli_connect_error());
            }
            else
             {
                         echo"kết nối thành công";
              }
            if( $_SESSION['tentaikhoan'] == '' ||  $_SESSION['tentaikhoan'] == ' ')
            {
                header('local:../web/');
            }
            $sql = "SELECT MANGUOIDUNG('$TENDN', '$MATKHAU' ,0)";
            $resut = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($resut);
            $_SESSION["Mand"] = $row[0];
            $sql2 = "CALL themgiaodichmuasam('$lct','$tienct','$ngaygd','$mota1','$row[0]')";
            if( mysqli_query($conn,$sql2))
            {
                $_SESSION['THONGBAO'] = "THÊM THÀNH CÔNG";
              header('Location: http://localhost:8080/html/trangchu.php');
              exit();
            }
            else
            {
                $_SESSION['THONGBAO'] ="THÊM KHOẢNG GIAO DICH KHÔNG THÀNH CÔNG";
              header('Location: http://localhost:8080/html/trangchu.php');
              exit();
            }
          mysqli_close($conn);
?>