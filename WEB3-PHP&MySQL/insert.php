<?php
$conn = mysqli_connect("localhost", "root", "0123456789**", "opentutorials");

$sql = "
    INERT INTO topic (
        title,
        description,
        created
    ) VALUES (
        'MySQL',
        'MySQL is ....',
        NOW()
    )";

$result = mysqli_query($conn, $sql);

if($result == false) {
  echo mysqli_error($conn);
}

?>