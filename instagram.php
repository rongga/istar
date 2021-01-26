<?php
$fields = 'id,media_type,media_url,permalink,thumbnail_url,username,caption';
$access_token = 'IGQVJXUDBOdHdCdlQtYloxS1JYZA0tWdThLVGZA5STFXZATYxRXRHSlhqbGt0Wkx4d0p3UTFvN19NbEk0S0ZAvQ1c5MjZA3eFl2aTZANSHBxdllTTmhtM01JMjRTeXdHWk9DR0x3OVgwN0ZAR';
$url = "https://graph.instagram.com/17841418573646064/media?fields=".$fields."&access_token=".$access_token;
try{
  $curl_connection = curl_init($url);
  curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
  curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($curl_connection);
  curl_close($curl_connection);
} catch(Exception $e) {
  return $e->getMessage();
}

$data = json_decode($result, true);
$image_array = array();
foreach ($data['data'] as $row) {
  $username = $row['username'];
  $type = $row['media_type'];
  $link = $row['permalink'];
  $thum = ($type === 'VIDEO') ? $row['thumbnail_url'] : $row['media_url'];
  $text = $row['caption'];
  array_push($image_array, array('username'=>$username, 'link'=>$link, 'thum'=>$thum, 'text'=>$text));
}


echo json_encode($image_array);

?>
