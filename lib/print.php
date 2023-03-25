<?php
// 제목바꾸기
function print_title(){
    if(isset($_GET['id'])){
        echo htmlspecialchars($_GET['id']);
    }else{ //id값이 존재하지 않는다면
        echo "Welcome";
    }
}
function print_description(){
    if(isset($_GET['id'])){
        //echo data/id 값에 해당하는 파일의 내용;
    echo htmlspecialchars(file_get_contents("data/".$_GET['id']));
    }else{
        echo "Hello, PHP";
    }
    
}
function print_list(){
    $list = scandir('./data');
    $i = 0;
    while($i < count($list)){
        $title = htmlspecialchars($list[$i]);
        if($list[$i] != '.' && $list[$i] != '..'){
            echo " <li><a href = \"index.php?id=$title\"> $title</a></li>\n";
        }
         $i = $i + 1;
    }

}
?>