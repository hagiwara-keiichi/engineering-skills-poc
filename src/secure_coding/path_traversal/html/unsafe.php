<?php
    define("BASE_DIR", "./files/");
    $file_name = filter_input(INPUT_GET, "file_name");
?>

<html lang="ja">
    <body>
        <form>
            <!-- ../../../../../../etc/passwd と入力すると /etc/passwd ファイルが読み込まれて画面上に表示されてしまう-->
            <input type="text" name="file_name">
            <input type="submit" value="実行"><br>
        </form>
        <?php readfile(BASE_DIR . $file_name); ?>
    </body>
</html>
