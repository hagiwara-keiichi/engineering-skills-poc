<?php
    session_start();

    // ログインチェック
if (empty($_SESSION["id"])) {
    exit("login error");
}

    $csrf_token = filter_input(INPUT_POST, "csrf_token") ?? '';

    // トークンをチェック
if (empty($_SESSION["csrf_token"]) || !hash_equals($_SESSION["csrf_token"], $csrf_token)) {
    exit("token error");
}

    $password = filter_input(INPUT_POST, "password");
    $_SESSION["password"] = $password;
?>

<html lang="ja">
    <body>
        パスワードを変更しました。<br>
        id: <?php echo htmlspecialchars($_SESSION["id"], ENT_QUOTES, "UTF-8"); ?><br>
        password: <?php echo htmlspecialchars($_SESSION["password"], ENT_QUOTES, "UTF-8"); ?><br>
    </body>
</html>
