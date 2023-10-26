<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1>WEB</h1>
    <ol>
      <li>HTML</li>
    </ol>
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