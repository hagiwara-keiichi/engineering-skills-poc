<?php
$target = $_GET['target'];
?>

<html>
<body>
<form>
    <!-- example.com;cat /etc/passwd と入力してもエスケープされているので表示されない -->
    <input type="text" name="target" placeholder="ドメイン名 or IPアドレス">
    <input type="submit" value="実行"><br>
</form>

Result<br>
<?php if(!empty($target)): ?>
    <pre><?php system("nslookup "  . escapeshellarg($target)); ?></pre>
<?php endif; ?>
</body>
</html>
