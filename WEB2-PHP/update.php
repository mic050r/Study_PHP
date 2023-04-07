<?php 
require_once('lib/print.php');
require_once('view/top.php');
?>
    <a href="create.php">Create</a>
    <?php if(isset($_GET['id'])){?>
        <!-- id값이 있어야지만 실행됨 
        -> 홈으로 가면 안보이고 각각이 항목에 가면 보임 -->
        <!-- <?php echo $_GET['id'];?> -->
        <a href="update.php?id=<?=$_GET['id'];?>">Update</a> 
        
    <?php }?>
    <h2>
        <?php
        print_title();
        ?>
    </h2>
    <?php 
    print_description();
    ?>

    <form action="update_process.php" method="POST">
    <input type="hidden" name="old_title" value ="<?=$_GET['id']?>">    
    <p><input type="text" name="title" placeholder="Tilte" value="<?php print_title();?>"></p>
        <p><textarea name="description" placeholder="Description"><?php print_description();?></textarea></p>
        <p><input type="submit"></p>
    </form>
<?php 
require('view/bottom.php');
?>