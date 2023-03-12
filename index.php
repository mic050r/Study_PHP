<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1> <a href="index.php">Web</a> </h1>
    <?php 
        data 디렉토리에 있는 파일의 목록을 가져오시오. PHP님
        파일의 목록 하나 하나를 
        li와 a 태그를 이용해서 글 목록을 만드세요.
    ?>
    <!-- <ol>
        <li><a href = "index.php?id=HTML">HTML</a></li>
        <li><a href = "index.php?id=CSS">CSS</a></li>
        <li><a href = "index.php?id=JavaScript">JavaScript</a></li>
        <li><a href = "index.php?id=PHP">PHP</a></li>
    </ol> -->
    <h2>
        <?php
        //제목바꾸기
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }else{ //id값이 존재하지 않는다면
            echo "Welcome";
        }
        
        ?>
    </h2>
    <?php
    if(isset($_GET['id'])){
        //echo data/id 값에 해당하는 파일의 내용;
    echo file_get_contents("data/".$_GET['id']);
    }else{
        echo "Hello, PHP";
    }
    
    ?>
</body>
</html>