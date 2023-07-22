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
                        <div class="nyuryoku"><b>ナビゲーションバー</b></div>
                    </div>
                    <p>アカウント登録画面<p>
                    <div>
                        <label>名前(姓)</label>
                        <br>
                        <input class="text" input pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" maxlength="10" size=" 35" name="last_name">
                    </div>
                    <div>
                        <label>名前(名)</label>
                        <br>
                        <input required="text" class="text" input pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" maxlength="10" size="35" name="first_name">
                    </div>
                    <div>
                        <label>カナ(姓)</label>
                        <br>
                        <input required="text" class="text" input pattern="[\u30A1-\u30FF]*" maxlength=" 10" size="35" name="last_name_kana">
                    </div>
                    <div>
                        <label>カナ(名)</label>
                        <br>
                        <input required="text" class="text" input pattern="[\u30A1-\u30FF]*" maxlength=" 10" size="35" name="first_name_kana">
                    </div>
                    <div>
                        <label>メールアドレス</label>
                        <br>
                        <input type="email" class="text" maxlength="100" size="35" name="mail">
                    </div>
                    <div>
                        <label>パスワード</label>
                        <br>
                        <input required="text" input type="password" class="text" input pattern="^[a-zA-Z0-9]+$" size="35" name="pass">
                    </div>
                    <div>
                        <label>性別</label>
                        <br>
                        <input type="radio" name="gender" value="man"checked> 男性
                        <input type="radio" name="gender" value="woman" >　女性
                        </select>
                    </div>
                    <div>
                        <label>郵便番号</label>
                        <br>
                        <input required="number" class="text" input pattern="^[0-9]+$" size="35" name="postal_code">
                    </div>
                    <div>
                        <label>住所(都道府県)</label>
                        <br>
                        <input required="text" class="text" size="35" name="prefecture">
                    </div>
                    <div>
                        <label>住所(市区町村)</label>
                        <br>
                        <input required="text" class="text" size="35" name="city">
                    </div>
                    <div>
                        <label>住所(番地)</label>
                        <br>
                        <input required="text" class="text" size="35" name="house_number">
                    </div>
                    <div>
                        <label>アカウント権限</label>
                        <br>
                        <select name="permission">
                            <option value="user"selected>一般</option>
                            <option value="admin">管理者</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" class="submit"value="確認する">
                    </div>
                </form>
                
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
