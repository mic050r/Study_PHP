<?php
$conn = mysqli_connect("localhost", "root", "0123456789**", "opentutorials");
$sql = "SELECT * FROM topic WHERE id = 19";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

print_r($row);
echo '<h1>'.$row['title'].'</h1>';
echo $row['description'];
?>