<?php
// 데이터베이스 연결
include('./db/connect.php');

// 데이터 조회
$result = $conn->query("SELECT * FROM snack ORDER BY id ASC");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo '<td><img class="popup-trigger" src="./img/' . $row["img"] . '" alt="' . $row["name"] . '" data-image="./img/' . $row["img"] . '" width="100"></td>';
        echo "<td>" . $row["description"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "데이터가 없습니다.";
}

// 데이터베이스 연결 닫기
$conn->close();
?>
