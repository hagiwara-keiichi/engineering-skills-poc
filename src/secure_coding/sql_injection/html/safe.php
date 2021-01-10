<?php
    $db_host = "sql_injection_mysql";
    $db_name = "test";
    $db_user = "root";
    $db_password = "root";
    $db_option = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
        PDO::ATTR_EMULATE_PREPARES => false
    ];
    $dsn = "mysql:host=" . $db_host . ";dbname=" . $db_name . ";charset=utf8";

    $id = $_GET["id"];

    // プレースホルダを利用(「id = ?」の部分)
    $sql = "SELECT name, nickname, birthday, last_login_date FROM user WHERE id = ?";

    $pdo = new PDO($dsn, $db_user, $db_password);
    try {
        $pdo = new PDO($dsn, $db_user, $db_password, $db_option);
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1, $id, PDO::PARAM_STR);   // 「id」の値を指定(バインド)
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    header("Content-Type: text/html; charset=UTF-8");
?>

<!DOCTYPE html>
<html lang="ja">
    <body>
        <form method="GET">
            <!--  1' OR 'a'='a と入力しても全ユーザの情報は表示されない -->
            id:<input type="text" name="id" value="" /><br/>
            <input type="submit" value="送信" />
        </form>
        <table border=1>
            <tr>
                <th>名前</th>
                <th>ニックネーム</th>
                <th>誕生日</th>
                <th>最終アクセス日</th>
            </tr>
            <?php while ($row = $stmt->fetch()): ?>
                <tr>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["nickname"]; ?></td>
                    <td><?php echo $row["birthday"]; ?></td>
                    <td><?php echo $row["last_login_date"]; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </body>
</html>