<?php
$target = $_GET['target'];
?>

<html>
    <body>
        <form>
            <!-- example.com;cat /etc/passwd と入力して結果が表示できてしまう -->
            <input type="text" name="target" placeholder="ドメイン名 or IPアドレス">
            <input type="submit" value="実行"><br>
        </form>

        Result<br>
        <?php if(!empty($target)): ?>
            <pre><?php system("nslookup $target"); ?></pre>
        <?php endif; ?>
    </body>
</html>
