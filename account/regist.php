<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録フォーム</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script>
            function check(){
                let check_result = true;
                document.getElementById("validate_msg").innerHTML = "";
                document.getElementById("validate_msg1").innerHTML = "";
                document.getElementById("validate_msg2").innerHTML = "";
                document.getElementById("validate_msg3").innerHTML = "";
                document.getElementById("validate_msg4").innerHTML = "";
                document.getElementById("validate_msg5").innerHTML = "";
                document.getElementById("validate_msg6").innerHTML = "";
                document.getElementById("validate_msg7").innerHTML = "";
                document.getElementById("validate_msg8").innerHTML = "";
                document.getElementById("validate_msg9").innerHTML = "";
                if(document.form.family_name.value == "" ){
                    var validate = "名前(姓)が未入力です。";
                    document.getElementById("validate_msg").innerHTML = validate;
                    checke_result = false;
                }
                if(document.form.last_name.value == "" ){
                    var validate = "名前(名)が未入力です。";
                    document.getElementById("validate_msg1").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.family_name_kana.value == "" ){
                    var validate = "カナ(姓)が未入力です。";
                    document.getElementById("validate_msg2").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.last_name_kana.value == "" ){
                    var validate = "カナ(名)が未入力です。";
                    document.getElementById("validate_msg3").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.mail.value == "" ){
                    var validate = "メールアドレスが未入力です。";
                    document.getElementById("validate_msg4").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.password.value == "" ){
                    var validate = "パスワードが未入力です。";
                    document.getElementById("validate_msg5").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.postal_code.value == "" ){
                    var validate = "郵便番号が未入力です。";
                    document.getElementById("validate_msg6").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.prefecture.value == "" ){
                    var validate = "住所(都道府県)が未入力です。";
                    document.getElementById("validate_msg7").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.address_01.value == "" ){
                    var validate = "住所(市区町村)が未入力です。";
                    document.getElementById("validate_msg8").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.address_02.value == "" ){
                    var validate = "住所(番地)が未入力です。";
                    document.getElementById("validate_msg9").innerHTML = validate;
                    check_result = false;
                }


                if(check_result){
                    return true;
                }else{
                    return false;
                }
            }
        </script>
    </head>

<body>
<form method="post" action="confirm.php" name="form">
    <div class="content">
                    <div>
                        <div class="nyuryoku"><b>ナビゲーションバー</b></div>
                    </div>
                    <p>アカウント登録画面<p>
                    <div>
                        <label>名前(姓)　※ひらがな、漢字のみ</label>
                        <br>
                        <input type="text" class="text" input pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" maxlength="10" size=" 35" data-error-required="名前(姓)が未入力です。"  name="family_name" >
                        <p id="validate_msg" style="color: red;"></p>
                    </div>
                    <div>
                        <label>名前(名)　※ひらがな、漢字のみ</label>
                        <br>
                        <input type="text" class="text" input pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" maxlength="10" size="35" name="last_name">
                        <p id="validate_msg1" style="color: red;"></p>
                    </div>
                    <div>
                        <label>カナ(姓)</label>
                        <br>
                        <input type="text" class="text" input pattern="[\u30A1-\u30FF]*" maxlength=" 10" size="35" name="family_name_kana">
                        <p id="validate_msg2" style="color: red;"></p>
                    </div>
                    <div>
                        <label>カナ(名)</label>
                        <br>
                        <input type="text" class="text" input pattern="[\u30A1-\u30FF]*" maxlength=" 10" size="35" name="last_name_kana">
                        <p id="validate_msg3" style="color: red;"></p>
                    </div>
                    <div>
                        <label>メールアドレス</label>
                        <br>
                        <input type="email" class="text" maxlength="100" size="35" name="mail">
                        <p id="validate_msg4" style="color: red;"></p>
                    </div>
                    <div>
                        <label>パスワード</label>
                        <br>
                        <input type="text" input type="password" class="text" input pattern="^[a-zA-Z0-9]+$" size="35" name="password">
                        <p id="validate_msg5" style="color: red;"></p>
                    </div>
                    <div>
                        <label>性別</label>
                        <br>
                        <input type="radio" name="gender" value="0"checked> 男性
                        <input type="radio" name="gender" value="1" >　女性
                        </select>
                    </div>
                    <div>
                        <label>郵便番号</label>
                        <br>
                        <input type="text" class="text" input pattern="^[0-9]+$" size="35" name="postal_code">
                        <p id="validate_msg6" style="color: red;"></p>
                    </div>
                    <div>
                        <label>住所(都道府県)</label>
                        <br>
                        <input type="text" class="text" size="35" name="prefecture">
                        <p id="validate_msg7" style="color: red;"></p>
                    </div>
                    <div>
                        <label>住所(市区町村)</label>
                        <br>
                        <input type="text" class="text" input pattern="^[\u30a0-\u30ff\u3040-\u309f\u3005-\u3006\u30e0-\u9fcf\0-9\u220D\u0020]*$" size="35" name="address_01">
                        <p id="validate_msg8" style="color: red;"></p>
                    </div>
                    <div>
                        <label>住所(番地)</label>
                        <br>
                        <input type="text" class="text" input pattern="^[\u30a0-\u30ff\u3040-\u309f\u3005-\u3006\u30e0-\u9fcf\0-9\u220D\u0020]*$" size="35" name="address_02">
                        <p id="validate_msg9" style="color: red;"></p>
                    </div>
                    <div>
                        <label>アカウント権限</label>
                        <br>
                        <select name="authority">
                            <option value="user"selected>一般</option>
                            <option value="admin">管理者</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" class="submit"value="確認する" onclick="return check();">
                    </div>
    </div>
</form>
</body>