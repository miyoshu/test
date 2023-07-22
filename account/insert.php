<?php
mb_internal_encoding("utf8");

$pdo= new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$pdo ->exec("insert into account(last_name,first_name,last_name_kana,first_name_kana,mail,pass,gender,postal_code,prefecture,city,house_number,permission)
values('".$_POST['last_name']."','".$_POST['first_name']."','".$_POST['last_name_kana']."','".$_POST['first_name_kana']."','".$_POST['mail']."','".$_POST['pass']."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['city']."','".$_POST['house_number']."','".$_POST['permission']."');");
?>

<!doctype HTML>
<html lang="ja">

<head>
<meta charset="utf-8">
    <meta charset="utf-8">
        <title>お問い合わせフォームを作る</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>お問い合わせフォーム</h1>

    <div class="confirm">
        <p>お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。
        </p>
    
    </div>
</body>
</html>
