

<?php

try {

    $user = "root";
    $password = "";

    $dbh = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

    $stmt = $dbh->prepare('DELETE FROM account WHERE id = :id');

    $stmt->execute(array(':id' => $_POST["id"]));

	$result= '削除完了しました';

} catch (Exception $e) {
		$result= 'エラーが発生しました' . $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title>削除完了</title>
		<link rel="stylesheet" type="text/css" href="delete_complete.css">
	</head>
	<body> 
		<h1>アカウント削除完了画面</h1>
	
	<div class="complete">
    <p><?php echo $result; ?></p>
  	</div>

	<div class="button">
    <button onclick="location.href='index.php'">TOPページに戻る</button>
    </div>

  	</body>
</html>