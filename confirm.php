<?php 
    // もしお問い合わせフォームの[確認]ボタンが押されたら
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // お問い合わせフォームから送信されたデータを各変数に格納する
        $name = $_POST["name"];
        $furigana = $_POST["furigana"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];
        $sex = $_POST["sex"];
        $item = $_POST["item"];
        $content  = $_POST["content"];
    }

    // もしお問い合わせ内容確認画面の送信ボタンが押されたら
    if (isset($_POST["submit"])) {
        
        // サンクスページに画面遷移させる
        header("Location: https://b6ede25d51ed4841ab59d0f1def4cb10.vfs.cloud9.us-east-2.amazonaws.com/app_contact/thanks.php");
        exit;
    }
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<!--<link rel="stylesheet" href="style.css">-->
</head>
<body>
<div><h1>Company Name</h1></div>
<div><h2>お問い合わせ</h2></div>
<div>
    <form action="confirm.php" method="post">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="furigana" value="<?php echo $furigana; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="tel" value="<?php echo $tel; ?>">
            <input type="hidden" name="sex" value="<?php echo $sex; ?>">
            <input type="hidden" name="item" value="<?php echo $item; ?>">
            <input type="hidden" name="content" value="<?php echo $content; ?>">
            <h1 class="contact-title">お問い合わせ 内容確認</h1>
            <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
            <div>
                <div>
                    <label>お名前</label>
                    <p><?php echo $name; ?></p>
                </div>
                <div>
                    <label>ふりがな</label>
                    <p><?php echo $furigana; ?></p>
                </div>
                <div>
                    <label>メールアドレス</label>
                    <p><?php echo $email; ?></p>
                </div>
                <div>
                    <label>電話番号</label>
                    <p><?php echo $tel; ?></p>
                </div>
                <div>
                    <label>性別</label>
                    <p><?php echo $sex ?></p>
                </div>
                <div>
                    <label>お問い合わせ項目</label>
                    <p><?php echo $item; ?></p>
                </div>
                <div>
                    <label>お問い合わせ内容</label>
                    <p><?php echo nl2br($content); ?></p>
                </div>
            </div>
        <input type="button" value="内容を修正する" onclick="history.back(-1)">
        <button type="submit" name="submit">送信する</button>
    </form>
</div>
</body>
</html>