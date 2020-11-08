<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Description" content="giúp bạn quản lý tài chính tốt hơn,bạn sẽ phải bất ngờ trước sự quản lý hợp logic đến từ chúng tôi"/>
    <meta http-equiv="Keywords" content="Quản lý tiền,My wallet,Amazing"/>
    <title>QUẢN LÝ CHI TIÊU</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/css_cua_trang_chu.css">
    <?php
            session_start();
            $tendangnhaP = isset($_SESSION['tentaikhoan']) ? $_SESSION['tentaikhoan'] :'ĐĂNG NHẬP';
    ?>
</head>
<body>
<a href="#dn"><img id="up" src="https://img.icons8.com/cute-clipart/64/000000/circled-chevron-up.png"/></a>  
<div class="modal fade" role="dialog" aria-labelledby ="dangky" aria-hidden="true" id="dk1" tabindex="-1" style="border:0;">
        <?php include'dang_ky.php' ?>
    </div>
    <div class="modal fade" role="dialog" aria-labelledby="dnhap" aria-hidden="true" id="dn" tabindex="-1" style="border: 0;">
        <?php include'dang_nhap.php' ?>
    </div>
    
    <header id="hder">
        <img src="../tainguyenkhac/hinh_anh/hinh_background/bk3.png" alt="Hình banner" class="img-thumbnail" style="border:none;background-color: #2cb84b;">
        <button data-toggle="modal" data-target="#dn"  id="DN" style="margin-right: 20px;"><?php  echo $tendangnhaP; ?></button>
        <button data-toggle="modal" id="dk"  data-target="#dk1"> ĐĂNG KÝ</button>
    </header>
    <nav id="NAV" class="navbar navbar-default">
   <?php include'nav.php' ?>
    </nav>
    <aside class="main-app-container" name="gioithieu">
        <section>
    <p id="hiep"></p>
    <?php include'bieudo.php' ?>
        </section>
        <article>
        </article>
    </aside>
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