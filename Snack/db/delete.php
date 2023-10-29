<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    // 데이터베이스 연결 설정
  include('./connect.php');
    mysqli_set_charset($conn, "utf8");
    $id = $_GET["id"];

    // 데이터베이스에서 선택한 항목 삭제
    $query = "DELETE FROM snack WHERE id=$id";
    if ($conn->query($query) === TRUE) {
        // 삭제 성공 시 리다이렉션
        header('Location: ../index.html');
    } else {
        echo "삭제 실패: " . $conn->error;
    }

    // 데이터베이스 연결 종료
    $conn->close();
}
?>
