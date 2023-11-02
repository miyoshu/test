
<!doctype HTML>
<html lang="ja">

<head>
<meta charset="utf-8">
    <meta charset="utf-8">
        <title>アカウント削除確認画面</title>
        <link rel="stylesheet" type="text/css" href="style3.css">
</head>

<body>
    <header>
        <p>ナビゲーションバー</p>
    </header>
    <main>
    <h1>アカウント削除確認画面</h1>

    <form action="delete.php">
        <button type="button" onclick=history.back()>前に戻る</button>
        </form>

    <form action="delete_complete.php" method=post >
        <input type=hidden name=id value= <?php echo $_POST['id']; ?>>
        <input type=submit value=削除する>
    </form>
