<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ISTAR</title>

    <!-- Google Font -->
    <link href="../https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <!-- <link rel="stylesheet" href="../https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css"> -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
  <header class="header-section">
      <div class="logo-line">
        <a href="../index.html">
            <img src="../img/logo.png" alt="">
        </a>
      </div>
      <div class="nav-item">
          <div class="container">
              <div class="row" id="inner-header-row">
                <div class="col-md-2 col-xs-2" id="logo-container">
                    <div class="logo">
                        <a href="../index.html">
                            <img src="../img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-xs-10" style="padding-left:0px; padding-right:0px">
                  <nav class="nav-menu mobile-menu">
                      <ul>
                          <li><a href="../intro.html">ISTAR</a>
                              <ul class="dropdown">
                                  <li><a href="../intro.html">회사소개</a></li>
                                  <li><a href="../ceo.html">CEO 인사</a></li>
                                  <li><a href="../ci.html">CI</a></li>
                                  <li><a href="../history.html">회사연혁</a></li>
                                  <li><a href="../companyroot.html">오시는길</a></li>
                              </ul>
                          </li>
                          <li><a href="../#">BRAND</a>
                              <ul class="dropdown">
                                  <li><a href="../brand-kiddyange.html">키디앙쥬</a></li>
                                  <li><a href="../#">리앙뜨</a></li>
                                  <li><a href="../#">꼬미앤조</a></li>
                              </ul>
                          </li>
                          <li><a href="../lookbook-kiddyange-winter.html">LOOKBOOK</a>
                              <ul class="dropdown">
                                <li><a href="../lookbook-kiddyange-winter.html">키디앙쥬</a></li>
                                <li><a href="../lookbook-lian-winter.html">리앙뜨</a></li>
                                <li><a href="../lookbook-com-winter.html">꼬미앤조</a></li>
                                <li><a href="../#">초등체육복</a></li>
                                <li><a href="../lookbook-pack.html">가방</a></li>
                                <li><a href="../lookbook-safe.html">안전용품</a></li>
                                <li><a href="../lookbook-role.html">역할놀이</a></li>
                              </ul>
                          </li>
                          <li><a href="../#">COSTUME</a></li>
                          <li><a href="../#">MEDIA</a>
                              <ul class="dropdown">
                                  <li><a href="../#">YOUTUBE</a></li>
                                  <li><a href="../#">협찬소개</a></li>
                                  <li><a href="../#">꼬미앤조</a></li>
                              </ul>
                          </li>
                          <li><a href="../#">COMMUNITY</a>
                              <ul class="dropdown">
                                  <li><a href="../#">공지사항</a></li>
                                  <li><a href="../#">견적의뢰</a></li>
                              </ul>
                          </li>
                      </ul>
                  </nav>
                </div>
                <div class="col-xs-2 top-social">
                      <a href="../#"><img src="../img/youtube.png"/></a>
                      <a href="../#"><img src="../img/insta.png"/></a>
                      <a href="../#"><img src="../img/naver.png"/></a>
                </div>
              </div>
              <div id="mobile-menu-wrap"></div>
          </div>
      </div>
  </header>
    <!-- Header End -->

    <form action="add_lookbook.php" method="post">
      <input type="hidden" name="page" value="<?php echo basename($_SERVER['PHP_SELF']); ?>">
        <input type="submit">
    </form>
    <?php
    $brand = 'kid';
    if (isset($_GET['brand'])){
      $brand = $_GET['brand'];
    }
    $season = 'win';
    if (isset($_GET['season'])){
      $season = $_GET['season'];
    }
    $name = '';
    if (isset($_GET['name'])){
      $name = $_GET['name'];
    }else {
      print "<script language=javascript> alert('잘못된 접근입니다'); history.back(-2); </script>";
    }

    $path = '../img/lookbook/'.$brand.'/'.$season.'/'.$name;
    $imgs = scandir($path);
    $imgs = array_splice($imgs, 2, count($imgs)-3);
    
    foreach ($imgs as $value) {
      echo '<img src="'.$path.'/'.$value.'">';
    }?>
    <!-- Banner Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="../#"><img src="../img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="../https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <!-- <div class="payment-pic">
                            <img src="../img/payment-method.png" alt="">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <!-- <script src="../https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/jquery.countdown.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery.zoom.min.js"></script>
    <script src="../js/jquery.dd.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
