<?php
// http://localhost:8000/safe.php?redirect=https://www.google.co.jp/ にアクセスしてもリダイレクトされない
// http://localhost:8000/safe.php?redirect=dmm_com にアクセスするとリダイレクトされる
$redirect_url_list = [
    "dmm_com" => "https://www.dmm.com/",
    "dmm_cojp" => "https://www.dmm.co.jp/",
    "dmm_games_com" => "https://games.dmm.com/",
    "dmm_games_cojp" => "https://games.dmm.co.jp/"
];

$redirect = filter_input(INPUT_GET, "redirect");

if (array_key_exists($redirect, $redirect_url_list)) {
    header("Location: $redirect_url_list[$redirect]");
} else {
    echo "Error";
}
