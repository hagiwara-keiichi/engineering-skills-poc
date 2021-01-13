<?php
/*
 * 以下を入力する
 * http://localhost:8000/bad_redirect.php?url=http://localhost:8000/bad_redirect.php%0d%0aSet-Cookie:+PHPSESSID%3DABC
 * 最新バージョンだとheader関数のみでもHTTPヘッダインジェクションは存在しないが、
 * バージョンが古いとHTTPヘッダインジェクションがあるので攻撃車により任意のレスポンスヘッダが追加されてしまう
 */
$url = $_GET['url'];
header('Location: ' . $url);
?>

<html lang="ja">
    <body>
        <form>
            <input type="text" name="url">
            <input type="submit" value="実行"><br>
        </form>
    </body>
</html>
