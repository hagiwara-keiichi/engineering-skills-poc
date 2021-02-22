<?php
session_start();

// ログインチェック
if (empty($_SESSION["id"])) {
    exit("login error");
}
?>

<html lang="ja">
    <body>
        <form action="complete.php" method="POST">
            <input type="password" name="password" placeholder="新しいパスワードを入力"><br>
            <input type="submit" value="パスワード変更">
        </form>
    </body>
</html>