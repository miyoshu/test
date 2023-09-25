<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント一覧画面</title>
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    
<body>
   <header>

   </header>
    
    <main>
    <?php
$dsn = 'mysql:host=localhost;dbname=lesson01';
$username = 'root';
$password = '';
try {
    $dbh = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    exit();
}
?>

    <?php
    $pdo= new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    $sql = 'select * from account';
    $sth = $dbh->prepare($sql);

    $sth->execute();
    $result = $sth->fetchAll();

foreach ($result as $row) {
}
?>
        <table border = "1" style="border-collapse: collapse">
            <tr>
                <th>ID</th>
                <th>名前(姓)</th>
                <th>名前(名)</th>
                <th>カナ(姓)</th>
                <th>カナ(名)</th>
                <th>メールアドレス</th>
                <th>性別</th>
                <th>アカウント権限</th>
                <th>削除フラグ</th>
                <th>登録日時</th>
                <th>更新日時</th>
                <th colspan="2">操作</th>
            </tr>
            <tr>
                <td><?php echo $row['id']." "; ?></a></td>
                <td><?php echo $row['family_name']." "; ?></td>
                <td>あ</td>
                <td>あ</td>
                <td>あ</td>
                <td>あ</td>
                <td>あ</td>
                <td>あ</td>
                <td>あ</td>
                <td>あ</td>
                <td>あ</td>
                <td>あ</td>
                <td>あ</td>    
            </tr>
            <tr>
            <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    
    </main>
     <footer>
      Copyright D.I.Works D.I.Blog is the one which provides A to Z about programming
     </footer>
</body>
