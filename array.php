<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Array</h1>
  <?php
  $coworkers = array('egoding', 'leezche','duru', 'taeho');
  echo $coworkers[1].'<br>';
  echo $coworkers[2].'<br>';
  var_dump(count($coworkers));
  array_push($coworkers, 'graphittie');
  var_dump($coworkers);
  ?>
</body>
</html>