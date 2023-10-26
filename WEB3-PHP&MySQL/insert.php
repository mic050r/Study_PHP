<?php
$conn = mysqli_connect("localhost", "root", "0123456789**", "opentutorials");

mysqli_query($conn, "
    INSERT INTO topic (
        title,
        description,
        created
    ) VALUES (
        'MySQL',
        'MySQL is ....',
        NOW()
    )");
?>