<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント一覧画面</title>
        <link rel="stylesheet" type="text/css" href="style5.css"> 
    </head>
    
<body>
   <header>

   </header>
    
    <main>

    <h1>アカウント一覧画面</h1>

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
        <th colspan="2" style="border-collapse: collapse">操作</th>
    </tr>

    <?php
    $pdo= new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    $sql = 'select * from account';
    $sth = $pdo->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll();
    
    foreach ($result as $row) {
    ?>
        <tr>
            <td><?php echo $row['id']." "; ?></a></td>
            <td><?php echo $row['family_name']." "; ?></td>
            <td><?php echo $row['last_name']." "; ?></td>
            <td><?php echo $row['family_name_kana']." "; ?></td>
            <td><?php echo $row['last_name_kana']." "; ?></td> 
            <td><?php echo $row['mail']." "; ?></td>
            <td><?php if( $row['gender']=="0"){
                echo "男性";}
                else{
                    echo"女性";} 
                ?></td>
            <td><?php if( $row['authority']=="0"){
                echo "一般";}
                else{
                    echo"管理者";}
                ?></td>
            <td><?php if( $row['delete_flag']=="0"){
                echo "有効";}
                else{
                    echo"無効";}
                ?></td>
            <td><?php
                    $date=$row['registered_time']."";
                    echo date('Y-m-d', strtotime(str_replace('-','/', $date))); 
                ?></td>
            <td><?php
                    $date=$row['update_time']."";
                    echo date('Y-m-d', strtotime(str_replace('-','/', $date))); 
                ?></td>
            <td><form action="update.php">
                    <button type="button" onclick="location.href='update.php'">更新</button>
                </form></td>
            <td><form action="delete.php" method=post>

                    <input type=hidden name=id value= <?php echo $row['id']; ?>>
                    <input type=submit value=削除>
                </form></td>

                
        </tr>
    <?php
    }
    ?>


    </table>
    
    </main>
     <footer>
      Copyright D.I.Works D.I.Blog is the one which provides A to Z about programming
     </footer>
</body>