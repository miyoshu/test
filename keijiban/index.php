<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>diworksblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
        
    </head>
    
    <body>
   <img src="diblog_logo.jpg">
   <header>
      <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>D.I.Blogについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
      </ul>
   </header>
    
    <main>
        <div class="main-container">
            <div class="right">
                <h1>プログラミングに役立つ書籍</h1>
                <form method="post" action="insert.php">
                    <div>
                        <div class="nyuryoku"><b>入力フォーム</b></div>
                    </div>
                    <div>
                        <label>ハンドルネーム</name>
                        <br>
                        <input required=" text" class=" text" size=" 35" name="handlename">
                    </div>
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input required="text" class="text" size="35" name="title">
                    </div>
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea cols="35" rows="7" name="comments"></textarea>
                    </div>
                    <div>
                        <input type="submit" class="submit"value="送信する">
                    </div>
                </form>
                
                    <?php
                mb_internal_encoding("utf8");
                $pdo= new PDO("mysql:dbname=lesson01; host=localhost;","root","");
                $stmt= $pdo->query("select* from keijiban");
                while($row= $stmt->fetch()){
                    echo"<div class='kiji'>";
                    echo"<h3>".$row['title']."</h3>";
                    echo"<div class='contents'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                    echo "</div>";
                    echo"<br>";
                    echo"</div>";
                }
                ?>
            </div>
            
            <div class="left">
                <div class="c1">
                    <h2>人気の記事</h2>
                    <div class="list">PHPオススメ本</div>
                    <div class="list">PHP  MyAdminの使い方</div>
                    <div class="list">いま人気のエディタTops</div>
                    <div class="list">HTMLの基礎</div>
                    <h2>オススメリンク</h2>
                    <div class="list">ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</div>
                    <div class="list">XAMPPのダウンロード</div>
                    <div class="list">Eclipseのダウンロード</div>
                    <div class="list">Braketsのダウンロード</div>
                    <h2>カテゴリ</h2>
                    <div class="list"> HTML</div>
                    <div class="list">PHP</div>
                    <div class="list">MySQL</div>
                    <div class="list">JavaScript</div> 
                </div>
            </div>
        </div>
    </main>
     <footer>
      Copyright D.I.Works D.I.Blog is the one which provides A to Z about programming
     </footer>
</body>
