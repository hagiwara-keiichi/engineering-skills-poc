<?php
$name = $_POST["name"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$content = $_POST["content"];
if (!(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email) && preg_match("/^[0-9]{10,11}$/", $tel))) {
    echo "入力値が不正です。";
    exit();
}
?>
<body>
お問い合わせ
<div>
    <form action="submit.php" method="post">
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="tel" value="<?php echo htmlspecialchars($tel, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="content" value="<?php echo htmlspecialchars($content, ENT_QUOTES, 'UTF-8'); ?>">
        お問い合わせ 内容確認
        <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
        <div>
            <div>
                <label>お名前</label>
                <p><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <div>
                <label>メールアドレス</label>
                <p><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <div>
                <label>電話番号</label>
                <p><?php echo htmlspecialchars($tel, ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <div>
                <label>お問い合わせ内容</label>
                <p><?php echo nl2br(htmlspecialchars($content, ENT_QUOTES, 'UTF-8')); ?></p>
            </div>
        </div>
        <input type="button" value="内容を修正する" onclick="history.back(-1)">
        <button type="submit" name="submit">送信する</button>
    </form>
</div>
</body>