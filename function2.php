<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Function</h1>
  
  <h2>Basic</h2>
  <?php 
  function basic(){
    print("Lorem ipsum dolor1<br>");
    print("Lorem ipsum dolor2<br>");
  }

  basic();
  basic();
  ?>
  <h2>parameter &amp; argument</h2>
  <?php 
  //parameter 매개변수 
  function sum($left, $right){ //좌항 우항 변수 선언
    print($left+$right);
    printf("<br>");
  }
  
  //구체적인 표현식 : argument
  sum(2,4);
  sum(7,4);
  ?>
  <h2>return</h2>
  <?php 
  function sum2($left, $right){
    return $left + $right;
  }

  // retrun을 하면 다양한 용도로 쓸 수 있음
  print(sum2(2,4));
  file_put_contents('result.txt', sum2(2,4));

  // email('', sum2(2,4));
  //upload('', sum2(2,4));
  ?>
</body>
</html>