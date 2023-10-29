<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('./connect.php');

    // POST 요청으로부터 이미지 ID와 수량 가져오기
    $imageId = $_POST["imageId"];
    $quantity = $_POST["quantity"];

    // 이미지 ID를 사용하여 과자 이름과 가격 가져오기
    $query = "SELECT name, price FROM snack WHERE id = '$imageId'";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();
        $snackName = $row["name"];
        $snackPrice = $row["price"];
        // echo $snackName;
        // 가격을 수량에 맞게 계산
        $totalPrice = $snackPrice * $quantity;

        // cart 테이블에 과자 이름과 가격 추가
        // $snackName = mysqli_real_escape_string($conn, $snackName); 
        $insertQuery = "INSERT INTO cart (snack_name, price) VALUES ('$snackName', '$totalPrice')";

        if ($conn->query($insertQuery) === TRUE) {
            echo "장바구니에 과자를 추가했습니다.";
        } else {
            echo "장바구니 추가 실패: " . $conn->error;
        }
    } else {
        echo "해당 이미지 ID에 대한 과자를 찾을 수 없습니다.";
    }

    // 데이터베이스 연결 종료
    $conn->close();
}
?>
