<?php
// http://localhost:8000/unsafe.php?redirect=https://www.google.co.jp/ にアクセスするとリダイレクトされる
$redirect = filter_input(INPUT_GET, "redirect");
header("Location: $redirect");
