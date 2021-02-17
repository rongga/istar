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
                          <li><a href="./intro.html">ISTAR</a>
                              <ul class="dropdown">
                                  <li><a href="../intro.html">회사소개</a></li>
                                  <li><a href="../ceo.html">CEO 인사</a></li>
                                  <li><a href="../ci.html">CI</a></li>
                                  <li><a href="../history.html">회사연혁</a></li>
                                  <li><a href="../companyroot.html">오시는길</a></li>
                              </ul>
                          </li>
                          <li><a href="../brand-kiddyange.html">BRAND</a>
                              <ul class="dropdown">
                                  <li><a href="../brand-kiddyange.html">키디앙쥬</a></li>
                                  <li><a href="../brand-lian.html">리앙뜨</a></li>
                                  <li><a href="../brand-com.html">꼬미앤조</a></li>
                              </ul>
                          </li>
                          <li><a href="../lookbook/">LOOKBOOK</a>
                              <ul class="dropdown">
                                <li><a href="../lookbook/">키디앙쥬</a></li>
                                <li><a href="../lookbook/index.php?brand=lian&season=win">리앙뜨</a></li>
                                <li><a href="../lookbook/index.php?brand=com&season=win">꼬미앤조</a></li>
                                <li><a href="../lookbook/index.php?brand=ele&season=all">초등체육복</a></li>
                                <li><a href="../lookbook-pack.html">가방</a></li>
                                <li><a href="../lookbook-safe.html">안전용품</a></li>
                                <li><a href="../lookbook-role.html">기타상품</a></li>
                              </ul>
                          </li>
                          <li><a href="#">COSTUME</a></li>
                          <li><a href="../youtube.html">MEDIA</a>
                              <ul class="dropdown">
                                  <li><a href="../youtube.html">YOUTUBE</a></li>
                                  <li><a href="#">협찬소개</a></li>
                                  <li><a href="#">꼬미앤조</a></li>
                              </ul>
                          </li>
                          <li><a href="#">COMMUNITY</a>
                              <ul class="dropdown">
                                  <li><a href="#">공지사항</a></li>
                                  <li><a href="#">견적의뢰</a></li>
                              </ul>
                          </li>
                      </ul>
                  </nav>
                </div>
                <div class="col-xs-2 top-social">
                      <a href="https://www.youtube.com/channel/UCxvMm1JUc0cfjiYdSULhuZw"><img src="../img/youtube.png"/></a>
                      <a href="https://www.instagram.com/istar.hi/"><img src="../img/insta.png"/></a>
                      <a href="https://blog.naver.com/PostList.nhn?blogId=istar_hyejin"><img src="../img/naver.png"/></a>
                </div>
              </div>
              <div id="mobile-menu-wrap"></div>
          </div>
      </div>
  </header>
    <!-- Header End -->


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

    $path = '../img/lookbook/'.$brand.'/'.$season.'/looks/'.$name.'/detail';
    $imgs = scandir($path);
    $imgs = array_splice($imgs, 2, count($imgs));

    foreach ($imgs as $value) {
      echo '<img src="'.$path.'/'.$value.'">';
    }?>
    <img src="../img/lookbook/<?php echo $brand.'/'.$season;?>/size.jpg">
    <!-- Banner Section End -->
    <!-- Footer Section Begin -->

    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="../img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 대구광역시 달서구 구마로 49(본리동661-9)</li>
                            <li>Phone: 053)556-2581~4</li>
                            <li>Email: istar2591@hanmail.net</li>
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
                          Copyright &copy;ISTAR. All rights reserved</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <a style="display:scroll;position:fixed;bottom:10px;right:10px;z-index:1;" href="#" title="top">
      <img src="../img/top.png" alt="top">
    </a>
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
