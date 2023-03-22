<?php 
require_once('lib/print.php');
require_once('view/top.php');
?>
    <a href="create.php">Create</a>
    <?php if(isset($_GET['id'])){?>
        <!-- id값이 있어야지만 실행됨 
        -> 홈으로 가면 안보이고 각각이 항목에 가면 보임 -->
        <!-- <?php echo $_GET['id'];?> -->
        <a href="update.php?id=<?=$_GET['id'];?>">update</a> 
        <!-- <a href="delete_process.php?id=<?=$_GET['id'];?>">delete</a>  -->
        <form action="delete_process.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>"/>
        <input type="submit" value="delete"/>
        </form>
        <?php }?>
    <h2>
        <?php
        print_title();
        ?>
    </h2>
    <?php 
    print_description();
    ?>
<?php 
require('view/bottom.php');
?>