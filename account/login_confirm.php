<?php
session_start();
try {
    
    $mail = $_POST['mail'];
    $dbh = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    $sql = "select password , authority from account where mail = :mail";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':mail', $mail);
    $stmt->execute();
    $result = $stmt->fetch();
if (password_verify($_POST['password'], $result['password'])) {
    $msg = 'ログインしました。';
    $_SESSION['authority']= $result['authority'];
    $link = '<a href="index.php">ホーム</a>';
} else {
    $msg = 'メールアドレスもしくはパスワードが間違っています。';
    $link = '<a href="login.php">戻る</a>';
}

    
} catch (PDOException $e) {
    $msg = '<FONT COLOR="RED">エラーが発生したためログイン情報を取得できません。</FONT>';
    $link = '<a href="login.php">戻る</a>';
}
?>


<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>
