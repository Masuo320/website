<?php
if (empty($_SESSION)) {
    session_start();
}
require_once(dirname(__FILE__) . '/../lib/function.php');
require_once(dirname(__FILE__) . '/../lib/const.php');
$_SESSION['token'] = hash('sha256', md5(uniqid(mt_rand(), true)));
?>
<?php require_once(dirname(__FILE__) . '/../includes/header.html');?>
<div class="contact_container">
    <h2 class="contact_form">お問い合わせフォーム</h2>
    <form action="confirm.php" method="post" novalidate>
        <table>
            <tr>
                <th>お名前<span>(必須)</span></th>
                <td>
                    <?php if (isset($error['name'])) :?>
                        <p class="error"><?=$error['name']?></p>
                    <?php endif;?>
                    <input type="text" name="name" value="<?=!empty($_POST['name']) ? h($_POST['name']) : ''?>">
                </td>
            </tr>
            <tr>
                <th>フリガナ<span>(必須)</span></th>
                <td>
                    <?php if (isset($error['kana'])) :?>
                        <p class="error"><?=$error['kana']?></p>
                    <?php endif;?>
                    <input type="text" name="kana" value="<?=!empty($_POST['kana']) ? h($_POST['kana']) : ''?>">
                </td>
            </tr>
            <tr>
                <th>都道府県</th>
                <td>
                    <select class="prefecture_dropdown" name="prefecture">
                        <?php foreach (PREFECTURE_ARRAY as $key => $value) :?>
                            <option value="<?=$key?>"<?=!empty($_POST['prefecture']) && $_POST['prefecture'] == $key ? ' selected' : ''?>><?=$value?></option>
                        <?php endforeach;?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>市区町村<span>(必須)</span></th>
                <td>
                    <?php if (isset($error['municipalities'])) :?>
                        <p class="error"><?=$error['municipalities']?></p>
                    <?php endif;?>
                    <input type="text" name="municipalities" value="<?=!empty($_POST['municipalities']) ? h($_POST['municipalities']) : ''?>">
                </td>
            </tr>
            <tr>
                <th>番地<span>(必須)</span></th>
                <td>
                    <?php if (isset($error['address'])) :?>
                        <p class="error"><?=$error['address']?></p>
                    <?php endif;?>
                    <input type="text" name="address" value="<?=!empty($_POST['address']) ? h($_POST['address']) : ''?>">
                </td>
            </tr>
            <tr>
                <th>マンション名等</th>
                <td><input type="text" name="apartment" value="<?=!empty($_POST['apartment']) ? h($_POST['apartment']) : ''?>"></td>
            </tr>
            <tr>
                <th>年齢</th>
                <td><input type="text" name="age" value="<?=!empty($_POST['age']) ? h($_POST['age']) : ''?>"></td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td><input type="tel" name="tel" value="<?=!empty($_POST['tel']) ? h($_POST['tel']) : ''?>"></td>
            </tr>
            <tr>
                <th>メールアドレス<span>(必須)</span></th>
                <td>
                    <?php if (isset($error['email'])) :?>
                        <p class="error"><?=$error['email']?></p>
                    <?php endif;?>
                    <input type="text" name="email" value="<?=!empty($_POST['email']) ? h($_POST['email']) : ''?>">
                </td>
            </tr>
            <tr>
                <th>確認用メールアドレス<span>(必須)</span></th>
                <td>
                    <?php if (isset($error['confirm_email'])) :?>
                        <p class="error"><?=$error['confirm_email']?></p>
                    <?php endif;?>
                    <input type="text" name="confirm_email" value="<?=!empty($_POST['confirm_email']) ? h($_POST['confirm_email']) : ''?>">
                </td>
            </tr>
            <tr>
                <th>お問い合わせ内容<span>(必須)</span></th>
                <td>
                    <?php if (isset($error['message'])) :?>
                        <p class="error"><?=$error['message']?></p>
                    <?php endif;?>
                    <textarea name="message" cols="30" rows="5"><?=!empty($_POST['message']) ? h($_POST['message']) : ''?></textarea>
                </td>
            </tr>
        </table>
        <input type="hidden" name="token" value="<?=$_SESSION['token']?>">
        <div class="form_submission">
            <input class="button" type="submit" value="入力内容を確認する">
        </div>
    </form>
</div>
<?php require_once(dirname(__FILE__) . '/../includes/footer.html');?>
