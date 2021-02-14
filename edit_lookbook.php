<?php
  $pre_page = $_POST['page'];
  if ($pre_page === 'lookbook-kiddyange-winter.php') {
    $pre_page = 'kid';
  }elseif ($pre_page === 'lookbook-kiddyange-summer.php') {
    $pre_page = 'kid-sum';
  }else {
    $pre_page = 'else';
  }
  echo $pre_page;;
 ?>
