<?php
    $file_name = basename(filter_input(INPUT_GET, "file_name"));
?>

<html lang="ja">
    <body>
        <form>
            <!-- basename関数を通すので ../../../../../../etc/passwd が入力されたとしても passwd だけが取り出される -->
            <input type="text" name="file_name">
            <input type="submit" value="実行"><br>
        </form>
        <?php readfile("./files/" . $file_name); ?>
    </body>
</html>
