<?php
session_start();
require_once(dirname(__FILE__) . '/../lib/function.php');
require_once(dirname(__FILE__) . '/../lib/const.php');
require_once(dirname(__FILE__) . '/../lib/Validation.php');

if (!isset($_SESSION['token']) || !isset($_POST['token']) || $_SESSION['token'] !== $_POST['token']) {
    header('Location: input.php');
}
$error = (new Validation())->validateContact(
    $_POST['name'],
    $_POST['kana'],
    $_POST['municipalities'],
    $_POST['address'],
    $_POST['email'],
    $_POST['confirm_email'],
    $_POST['message']
);
if (!empty($error)) {
    require_once(dirname(__FILE__) . '/input.php');
    exit;
}
?>
<?php require_once(dirname(__FILE__) . '/../includes/header.html');?>
<div class="contact_container">
    <h2 class="contact_form">お問い合わせフォーム</h2>
    <table>
        <tr>
            <th>お名前</th>
            <td>
                <?=h($_POST['name'])?>
            </td>
        </tr>
        <tr>
            <th>フリガナ</th>
            <td>
                <?=h($_POST['kana'])?>
            </td>
        </tr>
        <tr>
            <th>都道府県</th>
            <td>
                <?=PREFECTURE_ARRAY[$_POST['prefecture']]?>
            </td>
        </tr>
        <tr>
            <th>市区町村</th>
            <td>
                <?=h($_POST['municipalities'])?>
            </td>
        </tr>
        <tr>
            <th>番地</th>
            <td>
                <?=h($_POST['address'])?>
            </td>
        </tr>
        <tr>
            <th>マンション名等</th>
            <td>
                <?=h($_POST['apartment'])?>
            </td>
        </tr>
        <tr>
            <th>年齢</th>
            <td>
                <?=h($_POST['age'])?>
            </td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td>
                <?=h($_POST['tel'])?>
            </td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td>
                <?=h($_POST['email'])?>
            </td>
        </tr>
        <tr>
            <th>お問い合わせ内容</th>
            <td>
                <?=nl2br(h($_POST['message']))?>
            </td>
        </tr>
    </table>
    <div class="form_submission">
        <form action="result.php" method="post" novalidate>
            <input type="hidden" name="name" value="<?=h($_POST['name'])?>">
            <input type="hidden" name="kana" value="<?=h($_POST['kana'])?>">
            <input type="hidden" name="prefecture" value="<?=h($_POST['prefecture'])?>">
            <input type="hidden" name="municipalities" value="<?=h($_POST['municipalities'])?>">
            <input type="hidden" name="address" value="<?=h($_POST['address'])?>">
            <input type="hidden" name="apartment" value="<?=h($_POST['apartment'])?>">
            <input type="hidden" name="age" value="<?=h($_POST['age'])?>">
            <input type="hidden" name="tel" value="<?=h($_POST['tel'])?>">
            <input type="hidden" name="email" value="<?=h($_POST['email'])?>">
            <input type="hidden" name="message" value="<?=h($_POST['message'])?>">
            <input type="hidden" name="token" value="<?=$_SESSION['token']?>">
            <input type="submit" class="button" formaction="input.php" value="修正">
            <input type="submit" class="button" value="送信">
        </form>
    </div>
</div>
<?php require_once(dirname(__FILE__) . '/../includes/footer.html');?>
