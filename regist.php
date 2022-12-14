<!doctype HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>アカウント登録画面</title>
        <link rel="stylesheet"type="text/css" href="style2.css">
    </head>
    <body>
        <h1>アカウント登録画面</h1>
        <form method="post" action="regist_confirm.php">
            <div>
                <label>名前（姓）</label>
                <input type="text" class="text"size="10" name="family_name">
            </div>
            <div>
                <label>名前（名）</label>
                <input type="text" class="text"size="10" name="last_name">
            </div>
            <div>
                <label>カナ（姓）</label>
                <input type="text" class="text"size="10" name="family_name_kana">
            </div>
            <div>
                <label>カナ（名）</label>
                <input type="text" class="text"size="10" name="last_name_kana">
            </div>
            <div>
                <label>メールアドレス</label>
                <input type="text" class="text"size="100" name="mail">
            </div>
            <div>
                <label>パスワード</label>
                <input type="text" class="text"size="10" name="password">
            </div>
            <div>
                <label>性別</label>
                <input type="radio" name="gender" value="0">男
                <input type="radio" name="gender" value="1">女
            </div>
            <div>
                <label>郵便番号</label>
                <input type="text" class="text"size="7" name="postal_code">
            </div>
            <div>
                <label>住所（都道府県）</label>
                <select class="dropdown" name="prefecture">
                    <option>北海道</option>
                    <option>青森県</option>
                    <option>岩手県</option>
                    <option>宮城県</option>
                    <option>秋田県</option>
                    <option>山形県</option>
                    <option>福島県</option>
                    <option>茨城県</option>
                    <option>栃木県</option>
                    <option>群馬県</option>
                    <option>埼玉県</option>
                    <option>千葉県</option>
                    <option>東京都</option>
                    <option>神奈川県</option>
                    <option>新潟県</option>
                    <option>富山県</option>
                    <option>石川県</option>
                    <option>福井県</option>
                    <option>山梨県</option>
                    <option>長野県</option>
                    <option>岐阜県</option>
                    <option>静岡県</option>
                    <option>愛知県</option>
                    <option>三重県</option>
                    <option>滋賀県</option>
                    <option>京都府</option>
                    <option>大阪府</option>
                    <option>兵庫県</option>
                    <option>奈良県</option>
                    <option>和歌山県</option>
                    <option>鳥取県</option>
                    <option>島根県</option>
                    <option>岡山県</option>
                    <option>広島県</option>
                    <option>山口県</option>
                    <option>徳島県</option>
                    <option>香川県</option>
                    <option>愛媛県</option>
                    <option>高知県</option>
                    <option>福岡県</option>
                    <option>佐賀県</option>
                    <option>長崎県</option>
                    <option>熊本県</option>
                    <option>大分県</option>
                    <option>宮崎県</option>
                    <option>鹿児島県</option>
                    <option>沖縄県</option>
                </select>
            </div>
            <div>
                <label>住所（市区町村）</label>
                <input type="text" class="text"size="10" name="address_1">
            </div>
            <div>
                <label>住所（番地）</label>
                <input type="text" class="text"size="100" name="address_2">
            </div>
            <div>
                <label>アカウント権限</label>
                <br>
                <select class="dropdown" name="authority" value="0">一般
                </select>
                <select class="dropdown" name="authority" value="1">管理者
                </select>
                
            </div>
            <div>
                <input type="submit"class="submit" value="確認する">
            </div>
        </form>
    </body>
</html>