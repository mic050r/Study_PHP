<?php 
require_once('lib/print.php');
require_once('view/top.php');
?>
    <a href="create.php"Create></a>
    <form action="create_process.php" method="POST">
        <p><input type="text" name="title" placeholder="Tilte"></p>
        <p><textarea name="description" placeholder="Description"></textarea></p>
        <p><input type="submit"></p>
    </form>
<?php 
require_once('view/bottom.php');
?>