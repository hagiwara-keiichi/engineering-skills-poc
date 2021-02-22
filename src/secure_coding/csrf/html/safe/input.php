<?php
    session_start();

    // ログインチェック
if (empty($_SESSION["id"])) {
    exit("login error");
}

    // トークンを生成
if (empty($_SESSION["csrf_token"])) {
    // openssl_random_pseudo_bytes:暗号論的擬似乱数生成器
    $csrf_token = bin2hex(openssl_random_pseudo_bytes(24));
    $_SESSION["csrf_token"] = $csrf_token;
} else {
    $csrf_token = $_SESSION["csrf_token"];
}
?>

<html lang="ja">
    <body>
        <form action="complete.php" method="POST">
            <input type="password" name="password" placeholder="新しいパスワードを入力"><br>
            <!-- トークンを埋め込み -->
            <input type="hidden" name="csrf_token"
                   value="<?php echo htmlspecialchars($csrf_token, ENT_QUOTES, "UTF-8"); ?>">
            <input type="submit" value="パスワード変更">
        </form>
    </body>
</html>
