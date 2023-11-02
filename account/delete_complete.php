<?php

try {

    $user = "root";
    $password = "";

    $dbh = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

    $stmt = $dbh->prepare('DELETE FROM account WHERE id = :id');

    $stmt->execute(array(':id' => $_POST["id"]));

    echo "削除しました。";

} catch (Exception $e) {
          echo 'エラーが発生しました。:' . $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>削除完了</title>
  </head>
  <body>          
  <p>
      <a href="index.php">投稿一覧へ</a>
  </p> 

  </body>
</html>