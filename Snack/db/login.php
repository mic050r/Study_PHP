<?php
include('./connect.php');
mysqli_set_charset($conn, "utf8");

// 폼에서 제출된 사용자 이름 가져오기
$username = $_POST['username'];
$password = $_POST['password'];

// 사용자 이름에 해당하는 해시된 비밀번호 가져오기
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $hashedPassword = $row['password'];

    // 입력된 비밀번호와 저장된 해시된 비밀번호 비교
    if (password_verify($password, $hashedPassword)) {
        // 로그인 성공
        echo "로그인 성공.";
        header('Location: ../index.html'); // 로그인 성공 시 리다이렉션할 페이지로 이동
    } else {
        // 로그인 실패 - 비밀번호가 일치하지 않음
        echo "비밀번호가 일치하지 않습니다. 다시 시도하세요.";
    }
} else {
    // 로그인 실패 - 사용자 이름이 일치하지 않음
    echo "사용자 이름이 일치하지 않습니다. 다시 시도하세요.";
}

// 데이터베이스 연결 종료
mysqli_close($conn);
?>
