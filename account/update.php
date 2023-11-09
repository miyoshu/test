<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント削除画面</title>
        <link rel="stylesheet" type="text/css" href="update.css"> 
    </head>

<body>
    <main>
        <h1>アカウント更新画面</h1>
        <?php
            $pdo= new PDO("mysql:dbname=lesson01;host=localhost;","root","");
            $sql = 'select id,family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_01,address_02,authority from account where id=:id';
            $sth = $pdo->prepare($sql);
            $params = array(':id' => $_POST['id']);
            $sth->execute($params);
            $result = $sth->fetchAll();
    

            foreach ($result as $row) {
        ?>

            <table>
                <tr>   
                    <td>
                        <form action="update_confirm.php" method="post">
                        <input type="hidden" name="id" value="<?php echo  $row['id']." "; ?>">
                    </td>
                </tr>

                    <td>
                        <label for="family_name">名前(姓)</label>
                    </td>
                    <td>
                        <input type="text" name="family_name" value="<?php echo  $row['family_name']." "; ?>">
                    </td>
                <tr>
                    <td>
                        <label for="last_name">名前(名)</label>
                    </td>
                    <td>
                        <input type="text" name="last_name" value="<?php echo  $row['last_name']." "; ?>">
                    </td>
                </tr>     
                <tr>
                    <td>
                        <label for="family_name_kana">カナ(姓)</label>
                    </td>
                    <td>
                        <input type="text" name="family_name_kana" value="<?php echo  $row['family_name_kana']." "; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="last_name_kana">カナ(名)</label>
                    </td>
                    <td>
                        <input type="text" name="last_name_kana" value="<?php echo  $row['last_name_kana']." "; ?>">
                </tr>
                <tr>
                    <td>
                        <label for="mail">メールアドレス</label>
                    </td>
                    <td>
                        <input type="text" name="mail" value="<?php echo  $row['mail']." "; ?>">
                </tr>
                <tr>
                    <td>
                        <label for="password">パスワード</label>
                    </td>
                    <td>
                        <input type="text" name="password" value="<?php echo  $row['password']." "; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gender">姓別</label>
                    </td>
                    <td>
                        <input type="text" name="gender" value="<?php echo  $row['gender']." "; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="postal_code">郵便番号</label>
                    </td>
                    <td>
                        <input type="text" name="postal_code" value="<?php echo  $row['postal_code']." "; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="prefecture">住所(都道府県)</label>
                    </td>
                    <td>
                        <input type="text" name="prefecture" value="<?php echo  $row['prefecture']." "; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address_01">住所(市区町村)</label>
                    </td>
                    <td>
                        <input type="text" name="address_01" value="<?php echo  $row['address_01']." "; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address_02">住所(番地)</label>
                    </td>
                    <td>
                        <input type="text" name="address_02" value="<?php echo  $row['address_02']." "; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="authority">アカウント権限</label>
                    </td>
                    <td>
                        <input type="text" name="authority" value="<?php echo  $row['authority']." "; ?>">
                    </td>
                </tr>
            </table>
                        
        <?php
        }
        ?>

        <div class="submit">
            <input type="hidden" name="id" value= <?php echo $row['id']; ?>>
            <input type="submit" value="確認する">
        </div>
        </form>
    </main>
          
    
</body>