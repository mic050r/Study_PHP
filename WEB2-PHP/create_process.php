<?php
file_put_contents('data/'.$_POST['title'], 'data/'.$_POST['description']);
header('Location: /index.php?id='.$_POST['title']);
?>