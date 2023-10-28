<?php
$conn = mysqli_connect("localhost", "root", "0123456789**", "opentutorials");

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){
  // <li><a href=\"index.php?id=19\">MySQL</a></li>
  $list =  $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
}

// 기본값 셋팅
$article = array(
    'title' => 'Welcome',
    'description' => 'Hello, web'
  );
if (isset($_GET["id"])) {
  $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $article['title'] =  $row['title'];
  $article['description'] = $row['description'];
   
}
// print_r($article);
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a> </h1>
    <ol>
      <?=$list?>
    </ol>
    <a href="create.php">create</a>
    <h2><?=$article['title']?></h2>
    <?=$article['description']?>
  </body>
</html>
    <form action="process_create.php" method="POST" onsubmit="return validateForm()">
      <p><input type="text" name="title" id="title" placeholder="title"></p>
      <p><textarea name="description" id="description" placeholder="description" cols="30" rows="10"></textarea></p>
      <p><input type="submit" value="Submit"></p>
    </form>

    <script>
    function validateForm() {
      var title = document.getElementById("title").value;
      var description = document.getElementById("description").value;

      if (title === "" || description === "") {
        alert("제목과 설명을 모두 입력해주세요.");
        return false; // 제출을 중단
      }

      return true;
    }
    </script>

  </body>
</html>