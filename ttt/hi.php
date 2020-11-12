<?php
   session_start();
   echo $_SESSION['tui'];
   if($_SESSION['tui'] == '1')
   {
       header("location:http://localhost:8080/gentelella/production/index.php");
   }
   else
   {
       echo 'Bạn có đủ quyền để truy cập nội dung';
       header("location:http://localhost:8080/html/trangchu.php");
   }

?>
