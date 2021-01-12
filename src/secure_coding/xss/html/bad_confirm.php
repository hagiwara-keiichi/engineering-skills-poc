<?php
$name = $_POST["name"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$content  = $_POST["content"];
?>
<body>
お問い合わせ
<div>
    <form action="submit.php" method="post">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="tel" value="<?php echo $tel; ?>">
        <input type="hidden" name="content" value="<?php echo $content; ?>">
        お問い合わせ 内容確認
        <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
        <div>
            <div>
                <label>お名前</label>
                <p><?php echo $name; ?></p>
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
                <label>お問い合わせ内容</label>
                <p><?php echo nl2br($content); ?></p>
            </div>
        </div>
        <input type="button" value="内容を修正する" onclick="history.back(-1)">
        <button type="submit" name="submit">送信する</button>
    </form>
</div>
</body>