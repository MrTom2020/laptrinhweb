<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Description" content="giúp bạn quản lý tài chính tốt hơn,bạn sẽ phải bất ngờ trước sự quản lý hợp logic đến từ chúng tôi"/>
    <meta http-equiv="Keywords" content="Quản lý tiền,My wallet,Amazing"/>
    <title>QUẢN LÝ CHI TIÊU</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/chuyen_trang.css">
    <link rel="stylesheet" type="text/css" href="../css/css_cua_trang_chu.css">
    <?php
            session_start();
            $tendangnhaP = isset($_SESSION['tentaikhoan']) ? $_SESSION['tentaikhoan'] :'ĐĂNG NHẬP';
    ?>
</head>
<body>
<a href="#dn"><img id="up" src="https://img.icons8.com/cute-clipart/64/000000/circled-chevron-up.png"/></a>  
    <div class="modal fade" role="dialog" aria-labelledby="dnhap" aria-hidden="true" id="dn" tabindex="-1" style="border: 0;">
        <?php include'dang_nhap.php' ?>
    </div>
    
    <header id="hder">
        <img src="../tainguyenkhac/hinh_anh/hinh_background/bk3.png" alt="Hình banner" class="img-thumbnail" style="border:none;background-color: #2cb84b;">
        <button data-toggle="modal" data-target="#dn"  id="DN" style="margin-right: 20px;"><?php  echo $tendangnhaP; ?></button>
    </header>
    <nav id="NAV" class="navbar navbar-default">
   <?php include'nav.php' ?>
    </nav>
    <?php include'g_goi_dich_vu.php' ?>
    <footer style=" background-color: #019421; width: 100vw; height: 15vh;border: 1px solid #135421;">
        <?php include'g_footer.php' ?>
    </footer>
    <script type="text/javascript" src="../js/jquery-1.10.2.min.js">
    </script>
    <script type="text/javascript" src="../js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="../js/chuyen_noi_dung_trang.js">
        
    </script>
</body>

</html>