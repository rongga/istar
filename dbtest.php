<?php
$db_host="localhost";
$db_user="jyj1103";
$db_password="doqtm7789!@";
$db_name="jyj1103";
$con=mysqli_connect($db_host, $db_user, $db_password, $db_name) or die("접속 실패");

$sql = "select * from lookOrder";
$ret = mysqli_query($con, $sql);
if($ret) {
  echo mysqli_num_rows($ret), "건이 조회됨.<br><br>";
}else{
  echo "DB create fail: ".mysqli_error($con);
}
while($row = mysqli_fetch_array($ret)){
  echo $row['name']." ".$row['orderNum'];
  echo "<br>";
}
// mysqli_close($con);

// $sql = "insert into lookOrder values('테스트2', 2)";
// $ret = mysqli_query($con, $sql);
// if($ret) {
//   echo "suc";
// }else{
//   echo "DB create fail: ".mysqli_error($con);
// }
// mysqli_close($con);

// $sql = "select * from lookOrder";
// $ret = mysqli_query($con, $sql);
// while($row = mysqli_fetch_array($ret)){
//   echo $row['name']." ".$row['orderNum'];
//   echo "<br>";
// }
// $sql = "delete from lookOrder where name='테스트'";
// $ret = mysqli_query($con, $sql);
// if($ret) {
//   echo "suc";
// }else{
//   echo "DB create fail: ".mysqli_error($con);
// }
// $sql = "select * from lookOrder";
// $ret = mysqli_query($con, $sql);
// while($row = mysqli_fetch_array($ret)){
//   echo $row['name']." ".$row['orderNum'];
//   echo "<br>";
// }

// $sql = "delete from lookOrder";
// $ret = mysqli_query($con, $sql);

mysqli_close($con);
 ?>
