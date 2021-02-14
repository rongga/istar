<?php
  session_start();
  if( isset( $_SESSION[ 'username' ] ) ) {
    $jb_login = TRUE;
  }
?>
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <?php
      if ( $jb_login ) {
        echo "<script language=javascript> alert('이미 로그인 하셨습니다');</script>";
        echo '<script>window.location.replace("/index.html")</script>';
      } else {
        $username = $_POST[ 'username' ];
        $password = $_POST[ 'password' ];
        if ( $username == 'istar' and $password == 'istar369' ) {
          $_SESSION[ 'username' ] = $username;
          print "<script language=javascript> alert('로그인 성공');</script>";
          echo '<script>window.location.replace("/index.html")</script>';

        } else {
          print "<script language=javascript> alert('사용자 이름 또는 비밀번호가 틀렸습니다.');</script>";
          echo '<script>window.location.replace("/index.html")</script>';

        }
      }
    ?>
  </body>
</html>
