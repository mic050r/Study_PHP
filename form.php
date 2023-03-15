<?php 
file_put_contents('data/'.$_POST['title'],$_POST['description']);
echo "<p>title : ".$_POST['title']."</p>";  // 연관 배열
echo "<p>description : ".$_POST['description']."</p>";  // 연관 배열


?>