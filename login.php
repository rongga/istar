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
    ?>
      <h1>로그인</h1>
      <form action="login_result.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button>Submit</button>
      </form>
    <?php
      }
    ?>
  </body>
</html>
