<?php
$conn = mysqli_connect("localhost", "root", "0123456789**", "opentutorials");

// row가 하나일때
echo "<h1>single row</h1>";
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo '<h2>'.$row['title'].'</h2>';
echo $row['description'];

// row가 여러개일때
echo "<h1>multi row</h1>";
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
// null이면 false
while($row = mysqli_fetch_array($result)) {
  echo '<h2>'.$row['title'].'</h2>';
  echo $row['description'];
}
?>