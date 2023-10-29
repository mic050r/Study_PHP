<?php
$servername = "localhost";
$name = "root";
$password = "1234";
$dbname = "test";
$port = "3308";

$conn = new mysqli($servername, $name, $password, $dbname, $port);

if ($conn->connect_error) {
    die("데이터베이스 연결 실패: " . $conn->connect_error);
} 

$charset = "utf8"; // 또는 "utf8mb4" 사용 가능
mysqli_set_charset($conn, $charset);

?>