<?php
    $file_name = filter_input(INPUT_GET, "file_name");
?>

<html lang="ja">
    <body>
        <form>
            <!-- ../../../../../../etc/passwd と入力すると /etc/passwd ファイルが読み込まれて画面上に表示されてしまう-->
            <input type="text" name="file_name">
            <input type="submit" value="実行"><br>
        </form>
        <?php readfile("./files/" . $file_name); ?>
    </body>
</html>
