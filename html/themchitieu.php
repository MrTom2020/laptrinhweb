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
            if( $_SESSION['tentaikhoan'] == '' ||  $_SESSION['tentaikhoan'] == ' ')
            {
                header('local:../web/');
            }
            $ma =$_SESSION['Mand'];
            $sql2 = "CALL themgiaodichmuasam('$lct',$tienct,'$ngaygd','$mota1',$ma)";
            if( mysqli_query($conn,$sql2))
            {
                $_SESSION['THONGBAO'] = "Thêm giao dịch  thành công";
              header('Location: http://localhost:8080/html/trangchu.php');
              exit();
            }
            else
            {
                $_SESSION['THONGBAO'] ="Thêm giao dịch không thành công";
              header('Location: http://localhost:8080/html/trangchu.php');
              exit();
            }
          mysqli_close($conn);
?>