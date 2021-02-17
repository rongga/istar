<?php
//get GET values
session_start();
$brand = 'kid';
if (isset($_GET['brand'])){
  $brand = $_GET['brand'];
}
$season = 'win';
if (isset($_GET['season'])){
  $season = $_GET['season'];
}
$this_page = '1';
if (isset($_GET['page'])){
  $this_page=$_GET['page'];
};

$path = '../img/lookbook/'.$brand.'/'.$season;

$img_dir = scandir($path.'/looks');

$img_dir = array_splice($img_dir, 2, count($img_dir));


$db_host="localhost";
$db_user="jyj1103";
$db_password="doqtm7789!@";
$db_name="jyj1103";
$con=mysqli_connect($db_host, $db_user, $db_password, $db_name) or die("접속 실패");

$sql = "select * from ".$brand."_".$season." order by orderNum desc";
$ret = mysqli_query($con, $sql);
$item_list=array();
while($row = mysqli_fetch_array($ret)) {
  array_push($item_list, ['title'=>$row['title'], 'name'=>$row['name'], 'order'=>$row['orderNum']]);
}
mysqli_close($con);

$dir_num = count($item_list);
$dir_cnt = 0;
$last_page = intval($dir_num/12)+1;
$this_page = ($this_page < 1)?1:$this_page;
$this_page = ($this_page > $last_page)?$last_page:$this_page;
$dir_start=12*($this_page-1);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
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

    <!-- Hero Section Begin -->
    <div class="lb-content">
        <img src="<?php echo $path; ?>/main.jpg">
    <!-- Hero Section End -->
    <?php if ($season!=='all'){
    echo
    '<div class="container" style="margin:5px;">
      <ul class="nav nav-tabs">
        <li role="presentation"'; if($season=='win'){echo 'class="active"';}echo '><a href="../lookbook/?brand='.$brand.'&season=win">Winter</a></li>';
        echo '<li role="presentation"'; if($season=='sum'){echo 'class="active"';} echo '><a href="../lookbook/?brand='.$brand.'&season=sum">Summer</a></li>
      </ul>
    </div>';
  } ?>
    <!-- Banner Section Begin -->
    <?php
    if (isset($_SESSION['username'])) {
        echo '<button>edit</button>';
      }?>
    <div class="banner-section spad">
        <div class="container-fluid">
          <?php
          if ($this_page == $last_page) {
            $last_num = $dir_num%12;
            for ($row=0; $row<intval($last_num/3);$row++){
              echo '<div class="row">';
                for ($col=0; $col<3; $col++){
                  $this_dir = $item_list[$dir_start+$dir_cnt]['title'];
                  $look_name = $item_list[$dir_start+$dir_cnt]['name'];
                  echo
                  '<div class="col-lg-4">
                      <div class="thumbnail">
                        <a href="./detail.php?brand='.$brand.'&season='.$season.'&name='.$this_dir.'">
                          <img src="../img/lookbook/'.$brand.'/'.$season.'/looks/'.$this_dir.'/thumbnail.jpg" alt="">
                          <div class="caption">
                            <h4 style="text-align:center;">'.$look_name.'</h4>
                          </div>
                        </a>
                      </div>
                  </div>';
                  $dir_cnt++;
                }
              echo '</div>';
            }
            echo '<div class="row">';
              for ($i=0; $i<$last_num%3; $i++) {
                $this_dir = $item_list[$dir_start+$dir_cnt]['title'];
                $look_name = $item_list[$dir_start+$dir_cnt]['name'];
                echo
                '<div class="col-lg-4">
                    <div class="thumbnail">
                      <a href="./detail.php?brand='.$brand.'&season='.$season.'&name='.$this_dir.'">
                        <img src="../img/lookbook/'.$brand.'/'.$season.'/looks/'.$this_dir.'/thumbnail.jpg" alt="">
                        <div class="caption">
                          <h4 style="text-align:center;">'.$look_name.'</h4>
                        </div>
                      </a>
                    </div>
                </div>';
                $dir_cnt++;
              }
            echo '</div>';
          }else {
            for ($row=0; $row<4; $row++){
              echo '<div class="row">';
                for ($col=0; $col<3; $col++){
                  $this_dir = $item_list[$dir_start+$dir_cnt]['title'];
                  $look_name = $item_list[$dir_start+$dir_cnt]['name'];
                  echo
                  '<div class="col-lg-4">
                      <div class="thumbnail">
                        <a href="./detail.php?brand='.$brand.'&season='.$season.'&name='.$this_dir.'">
                          <img src="../img/lookbook/'.$brand.'/'.$season.'/looks/'.$this_dir.'/thumbnail.jpg" alt="">
                          <div class="caption">
                            <h4 style="text-align:center;">'.$look_name.'</h4>
                          </div>
                        </a>
                      </div>
                  </div>';
                  $dir_cnt++;
                }
              echo '</div>';
            }
          }?>
        </div>
    </div>
    <nav aria-label="Page navigation" align="center">
      <ul class="pagination pagination-lg">
        <li>
          <a href="./?brand=<?php echo $brand.'&season='.$season.'&page=1' ?>" aria-label="First">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>

        <?php
        $page_num = ceil($dir_num/12);
        if ($page_num<6){
          for ($page_i=1; $page_i<=$page_num; $page_i++){
            echo '<li><a href="./?brand='.$brand.'&season='.$season.'&page='.$page_i.'">'.$page_i.'</a></li>';
          }
        }elseif ($this_page<3){
          echo
          '<li>
            <a href="./?brand='.$brand.'&season='.$season.'&page=1" aria-label="Previous">
              <span aria-hidden="true"><</span>
            </a>
          </li>';
          for ($page_i=1; $page_i<6; $page_i++){
            echo '<li><a href="./?brand='.$brand.'&season='.$season.'&page='.$page_i.'">'.$page_i.'</a></li>';
          }
          echo '<li>
            <a href="./?brand='.$brand.'&season='.$season.'&page='.(string)($this_page+5).'" aria-label="Next">
              <span aria-hidden="true">></span>
            </a>
          </li>';
        }elseif ($this_page>$last_page-3){
          echo
          '<li>
            <a href="./?brand='.$brand.'&season='.$season.'&page='.(string)($this_page-5).'" aria-label="Previous">
              <span aria-hidden="true"><</span>
            </a>
          </li>';
          for ($page_i=1; $page_i<6; $page_i++){
            echo '<li><a href="./?brand='.$brand.'&season='.$season.'&page='.$page_i.'">'.$page_i.'</a></li>';
          }
        }else {
          echo
          '<li>
            <a href="./?brand='.$brand.'&season='.$season.'&page='.(string)($this_page-5).'" aria-label="Previous">
              <span aria-hidden="true"><</span>
            </a>
          </li>';
          for ($c=0; $c<5; $c++){

            echo '<li><a href="./?brand='.$brand.'&season='.$season.'&page='.$this_page-2+$c.'">'.$this_page-2+$c.'</a></li>';
          }
          echo '<li>
            <a href="./?brand='.$brand.'&season='.$season.'&page='.(string)($this_page+5).'" aria-label="Next">
              <span aria-hidden="true">></span>
            </a>
          </li>';
        }

        ?>
        <li>
          <a href="./?brand=<?php echo $brand.'&season='.$season.'&page='.$last_page ?>" aria-label="Last">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
    </ul>
  </nav>
</div>
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
