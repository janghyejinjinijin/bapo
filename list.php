
<? include("dbconn.php"); ?>
<!-- 불러오기-->

<?php
/*
$servername = "localhost";
$username = "root";
$password = "autoset";
$dbname = "jungbo";
*/

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
//}

$sql = "SELECT sno, sname, kor, eng, math, hist FROM examtbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  ?>
  <table border=1 width=75%>
    <tr>
      <th>번호</th>
      <th>이름</th>
      <th>국어</th>
      <th>영어</th>
      <th>수학</th>
      <th>역사</th></tr>
  <?
  while($row = $result->fetch_assoc()) {
   ?>
   <tr>
    <td><?=$row["sno"]?></td>
    <td><?=$row["sname"]?></td>
    <td><?=$row["kor"]?></td>
    <td><?=$row["eng"]?></td>
    <td><?=$row["math"]?></td>
    <td><?=$row["hist"]?></td>
  </tr>
  <?
} 
?>
</table>
<? 
}else {
  echo "0 results";

}
$conn->close();
?>