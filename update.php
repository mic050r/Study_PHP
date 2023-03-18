<?php
// 제목바꾸기
function print_title(){
    if(isset($_GET['id'])){
        echo $_GET['id'];
    }else{ //id값이 존재하지 않는다면
        echo "Welcome";
    }
}
function print_description(){
    if(isset($_GET['id'])){
        //echo data/id 값에 해당하는 파일의 내용;
    echo file_get_contents("data/".$_GET['id']);
    }else{
        echo "Hello, PHP";
    }
    
}
function print_list(){
    $list = scandir('./data');
    $i = 0;
    while($i < count($list)){
        if($list[$i] != '.' && $list[$i] != '..'){
            echo " <li><a href = \"index.php?id=$list[$i]\"> $list[$i]</a></li>\n";
        }
         $i = $i + 1;
    }

}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>
        <?php
        print_title();
        ?>
    </title>
</head>
<body>
    <h1> <a href="index.php">Web</a> </h1>
    <ol>
        <?php 
        print_list();
        ?>
    </ol>
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
</body>
</html>