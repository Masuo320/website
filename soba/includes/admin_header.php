<?php
require_once(dirname(__FILE__) . '/../lib/const.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>そば・山菜洞　しを里　管理画面</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?=URL?>css/admin_style.css">
</head>
<body>
    <div class="admin_seat_container">
        <header>
            <div class="login">
                <div>ログイン名[<?=h($_SESSION['name'])?>]さん、ご機嫌いかがですか？</div>
                <div id="account">
                    <a href="../logout.php">ログアウトする</a>
                </div>
            </div>
            <h1>そば・山菜洞 しを里</h1>
            <ul>
                <li>top</li>
                <li><a href="<?=URL?>admin/seat/list.php" class="nav_button">座席管理</a></li>
                <li>〇〇管理</li>
                <li>〇〇管理</li>
                <li>〇〇管理</li>
                <li>〇〇管理</li>
            </ul>
        </header>
