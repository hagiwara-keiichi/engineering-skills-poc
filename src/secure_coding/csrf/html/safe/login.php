<?php
session_start();

if (empty($_SESSION["id"])) {
    $_SESSION["id"] = "id";
}
if (empty($_SESSION["password"])) {
    $_SESSION["password"] = "password";
}
?>

<html lang="ja">
    <body>
        id: <?php echo htmlspecialchars($_SESSION["id"], ENT_QUOTES, "UTF-8"); ?><br>
        password: <?php echo htmlspecialchars($_SESSION["password"], ENT_QUOTES, "UTF-8"); ?><br>
    </body>
</html>