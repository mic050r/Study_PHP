<?php
include('./connect.php');
mysqli_set_charset($conn, "utf8");
$conn->set_charset("utf8mb4");

// POST로 받은 데이터 처리
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // 비밀번호 해싱

    // SQL 쿼리를 사용하여 데이터베이스에 사용자 정보 삽입
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "회원가입이 성공적으로 완료되었습니다.";
         header('Location: ../login.html'); // 로그인 성공 시 리다이렉션할 페이지로 이동
    } else {
        echo "회원가입 중 오류 발생: " . $conn->error;
    }
}

// 데이터베이스 연결 종료
$conn->close();
?>
