<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログイン画面</title>
        <link rel="stylesheet" type="text/css" href="login.css"> 
    </head>

<body>

<h1>ログイン画面</h1>

<form action="login_confirm.php" method="post">
<p>メールアドレス：<input type="text" name="mail"  required></p>
    <p>パスワード：<input type="password" name="password"  required></p>
<p><input type="submit" name="login" value="ログイン"></p>
</form>

</body>