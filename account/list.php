<?php
    session_start();
    if(isset($_SESSION['authority'])) {
        if ($_SESSION['authority']=="1"){   
        }
        elseif($_SESSION['authority']=="0"){header('Location: error.php');
        }
        else {header('Location: login.php');
        }
    } else {
        header('Location: login.php');
    }
?>

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

  

    <?php
    
        if (isset($_POST["search"])) {
            $search_family_name = "";
            $search_last_name = "";
            $search_family_name_kana = "";
            $search_last_name_kana = "";
            $search_mail = "";
            $search_gender = "";
            $search_authority = "";


            if (isset($_POST["family_name"])){
            $search_family_name = $_POST["family_name"];
            }
            if (isset($_POST["last_name"])){
            $search_last_name = $_POST["last_name"];
            }
            if (isset($_POST["family_name_kana"])){
                $search_family_name_kana = $_POST["family_name_kana"];
            }
            if (isset($_POST["mail"])){
                    $search_mail = $_POST["mail"];
            }
            if (isset($_POST["gender"])){
                    $search_gender = $_POST["gender"];
            }
            if (isset($_POST["authority"])){
                    $search_authority = $_POST["authority"];
            }
            $pdo= new PDO("mysql:dbname=lesson01;host=localhost;","root","");
            $sql = "select * from account where 
                family_name like '%{$search_family_name}%' and 
                last_name like '%{$search_last_name}%' and
                family_name_kana like '%{$search_family_name_kana}%' and
                last_name_kana like '%{$search_last_name_kana}%' and
                mail like '%{$search_mail}%' and
                gender like '%{$search_gender}%' and
                authority like '%{$search_authority}%' ";
            $sth = $pdo->prepare($sql);
            $sth->execute();
            $result = $sth->fetchAll();
        }
    ?>

 


    <form action="list.php" method=post>
    <table border="1" style="border-collapse: collapse">
        <tr>
            <th>名前(姓)</th>
                <td>
                    <input type="text" id="name" name="family_name" value=""  />
                </td>
            <th>名前(名)</th>
                <td>
                <input type="text" id="name" name="last_name" value=""  />
                </td>
        </tr>
        <tr>
            <th>カナ(姓)</th>
                <td>
                    <input type="text" id="name" name="family_name_kana" value=""  />
                </td>
            <th>カナ(名)</th>
                <td>
                    <input type="text" id="name" name="last_name_kana" value=""  />
                </td>
        </tr>
        <tr>
            <th>メールアドレス</th>
                <td>
                    <input type="text" id="name" name="mail" value=""  />
                </td>
            <th>性別</th>
                <td>
                    <input type="radio" name="gender" value="0"checked> 男性
                    <input type="radio" name="gender" value="1" > 女性
                    <input type="radio" name="gender" value="" > 未選択
                </td>
        </tr>
        <tr>
            <th>アカウント権限</th>
                <td>
                <select name="authority">
                            <option value="0"selected>一般</option>
                            <option value="1">管理者</option>
                            <option value="">未選択</option>

                </td>
            <th> </th>
                <td>
                    
                </td>
        </tr>
    </table>
      <p><input type="submit" id="search" name="search" value="検索" /></p>
    </form>

    <?php   if (isset($_POST["search"])) {?>

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
    
    foreach ($result as $row) {
    ?>


        <tr>
            <td><?php echo $row['id']; ?></a></td>
            <td><?php echo $row['family_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['family_name_kana']; ?></td>
            <td><?php echo $row['last_name_kana']; ?></td> 
            <td><?php echo $row['mail']; ?></td>
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
                    $date=$row['registered_time'];
                    echo date('Y-m-d', strtotime(str_replace('-','/', $date))); 
                ?></td>
            <td><?php
                    $date=$row['update_time'];
                    echo date('Y-m-d', strtotime(str_replace('-','/', $date))); 
                ?></td>
            <td>
                
                <form action="update.php" method=post>
                    <input type=hidden name=id value= <?php echo $row['id']; ?>>
                <?php if ( $row['delete_flag']=="0"){ ?>
                    <input type=submit  value=更新>
                <?php } else{ ?>
                    <input type=submit disabled value=更新>
                <?php } ?>
                </form></td>
            <td><form action="delete.php" method=post>
                    
                    <input type=hidden name=id value= <?php echo $row['id']; ?>>
                <?php if ( $row['delete_flag']=="0"){ ?>
                    <input type=submit value=削除>
                <?php } else{ ?>
                    <input type=submit disabled value=削除>
                <?php } ?>
                </form></td>

                
        </tr>
    <?php
    }
    ?>


    </table>
    <?php } ?>
    
    </main>
     <footer>
      Copyright D.I.Works D.I.Blog is the one which provides A to Z about programming
     </footer>
</body>
