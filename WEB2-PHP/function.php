<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>function</title>
</head>
<body>
    <h1>function</h1>
    <?php
    $str = "Lor
    em";
    echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
        echo strlen($str); //표현식이라서 echo필요
    ?>
    <h2>n12br</h2>
    <?php
    echo nl2br($str);
    ?>
</body>
</html>