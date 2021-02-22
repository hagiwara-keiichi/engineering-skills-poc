<?php
    $db_host = "sql_injection_mysql";
    $db_name = "test";
    $db_user = "root";
    $db_password = "root";
    $db_option = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    $dsn = "mysql:host=" . $db_host . ";dbname=" . $db_name . ";charset=utf8";

    // SQLインジェクションが存在
    $id = $_GET['id'];
    $sql = "SELECT name, nickname, birthday, last_login_date FROM user WHERE id = '${id}'";

    $pdo = new PDO($dsn, $db_user, $db_password);
    try {
        $pdo = new PDO($dsn, $db_user, $db_password, $db_option);
        $stmt = $pdo->query($sql);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    header("Content-Type: text/html; charset=UTF-8");
    ?>

<!DOCTYPE html>
<html lang="ja">
<body>
<form method="GET">
    <!--  1' OR 'a'='a と入力すると全県取れてしまう -->
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
    <?php while ($row = $stmt->fetch()) : ?>
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