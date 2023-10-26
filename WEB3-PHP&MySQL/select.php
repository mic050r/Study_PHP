<?php
$conn = mysqli_connect("localhost", "root", "0123456789**", "opentutorials");
$sql = "SELECT * FROM topic LIMIT 1000";
$result = mysqli_query($conn, $sql);
var_dump($result->num_rows); // 행개수를 알려줌
?>