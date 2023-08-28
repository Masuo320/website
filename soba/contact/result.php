<?php
session_start();
require_once(dirname(__FILE__) . '/../lib/function.php');
require_once(dirname(__FILE__) . '/../lib/const.php');

if (!isset($_SESSION['token']) || !isset($_POST['token']) || $_SESSION['token'] !== $_POST['token']) {
    header('Location: input.php');
    exit;
}
unset($_SESSION['token']);

$message = '※このメールはシステムからの自動返信です。' . "\n"
    . "\n"
    . h($_POST['name']) . '様' . "\n"
    . "\n"
    . 'お世話になっております。'
    . 'そば・山菜洞しを里へのお問い合わせありがとうございました。'. "\n"
    . '以下の内容でお問い合わせを受け付けいたしました。' . "\n"
    . '2営業日以内に、担当者 増尾 よりご連絡いたしますので' . "\n"
    . '今しばらくお待ちくださいませ。' . "\n"
    . "\n"
    . '━━━━━━□■□　お問い合わせ内容　□■□━━━━━━' . "\n"
    . 'お名前：' . h($_POST['name']) . "\n"
    . 'フリガナ：' . h($_POST['kana']) . "\n"
    . '都道府県：' . PREFECTURE_ARRAY[$_POST['prefecture']] . "\n"
    . '市区町村：' . h($_POST['municipalities']) . "\n"
    . '番地：' . h($_POST['address']) . "\n"
    . 'マンション名等：' . h($_POST['apartment']) . "\n"
    . '年齢：' . h($_POST['age']) . "\n"
    . '電話番号：' . h($_POST['tel']) . "\n"
    . 'お問い合わせ内容：' . "\n"
    . h($_POST['message']) . "\n"
    . '━━━━━━━━━━━━━━━━━━━━━━━━━━' . "\n"
    . "\n"
    . '※本メールは自動送信であるため、返信はできませんのでご了承ください。' . "\n"
    . 'また、心当たりがない場合は担当者 増尾までご連絡お願いいたします。' . "\n"
    . "\n"
    . '=======================================' . "\n"
    . '●●株式会社　○○課' . "\n"
    . '担当：増尾　泰政' . "\n"
    . 'TEL：111-1111-1111' . "\n"
    . 'FAX：222-2222-2222' . "\n"
    . 'メール：△△@△△.co.jp' . "\n"
    . "\n"
    . '【会社情報】' . "\n"
    . '住所：〒111-1111　東京都港区●●5-6-7-8' . "\n"
    . '電話番号：000-0000-0000' . "\n"
    . 'FAX：000-000-0000' . "\n"
    . '営業時間：平日 ●時～●時' . "\n"
    . 'メール：○○@○○.co.jp' . "\n"
    . '======================================='
;
mb_language('Ja');
mb_internal_encoding('UTF-8');
mb_send_mail($_POST['email'], '[そば・山菜洞　しを里]お問い合わせありがとうございます', $message, 'From: info@siwori-masuo.com');
?>
<?php require_once(dirname(__FILE__) . '/../includes/header.html');?>
<div class='contact_result_container'>
    <h1 class="contact_completed">お問い合わせが完了しました。</h1>
    <p class="contact_message">この度はお問い合わせいただきまして、誠にありがとうございます。</p>
    <p class="contact_message">いただいたお問い合わせ内容については確認の上、折り返しご連絡させていただきます。</p>
    <a href="../index.html">トップページに戻る</a>
</div>
<?php require_once(dirname(__FILE__) . '/../includes/footer.html');?>
