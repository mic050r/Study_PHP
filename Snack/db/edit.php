<?php
// 데이터베이스 연결 설정
include('./connect.php');
mysqli_set_charset($conn, "utf8");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // POST 요청으로부터 폼 데이터 가져오기
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];

    // 데이터베이스에서 선택한 항목 수정
    $query = "UPDATE snack SET name='$name', price='$price', description='$description' WHERE id=$id";
    if ($conn->query($query) === TRUE) {
        // 수정 성공 시 리다이렉션
        header('Location: ../index.html');
        exit;
    } else {
        echo "수정 실패: " . $conn->error;
    }
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    // 데이터베이스에서 선택한 항목 가져오기
    $query = "SELECT * FROM snack WHERE id = $id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row["name"];
        $price = $row["price"];
        $description = $row["description"];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Snack 수정</title>
</head>
<body>
    <h1>Snack 수정</h1>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name">이름:</label>
        <input type="text" name="name" value="<?php echo $name; ?>"><br>
        <label for="price">가격:</label>
        <input type="text" name="price" value="<?php echo $price; ?>"><br>
        <label for="description">비고:</label>
        <input type="text" name="description" value="<?php echo $description; ?>"><br>
        <input type="submit" value="수정">
    </form>
</body>
</html>
