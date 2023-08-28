<?php
session_start();
require_once(dirname(__FILE__) . '/../../lib/function.php');
if ($_SESSION['authenticated'] != true) {
    header('Location: ../login.php');
    exit;
}
if(empty($_GET['action'])){
    header('Location: list.php');
    exit;
}
?>
<?php require_once(dirname(__FILE__) . '/../../includes/admin_header.php');?>
<h4><span>座席<?=showAction($_GET['action'])?>確認</span></h4>
<div class="form_submission">
    <table>
        <?php if (!empty($_GET['id'])) :?>
            <tr>
                <th>ID</th>
                <td><?=h($_GET['id'])?></td>
            </tr>
        <?php endif;?>
        <tr>
            <th>座席名</th>
            <td><?=h($_POST['name'])?></td>
        </tr>
        <tr>
            <th>画像</th>
            <td><?=h($_POST['img'])?></td>
        </tr>
        <tr>
            <th>表示順</th>
            <td><?=h($_POST['turn'])?></td>
        </tr>
    </table>
    <form action="result.php?action=<?=$_GET['action']?><?=!empty($_GET['id']) ? '&id=' . h($_GET['id']) : ''?>" method="POST" novalidate>
        <input type="hidden" name="name" value="<?=h($_POST['name'])?>">
        <input type="hidden" name="img" value="<?=h($_POST['img'])?>">
        <input type="hidden" name="turn" value="<?=h($_POST['turn'])?>">
        <div class="button_inline">
            <input class="revise_button" type="submit" value="修正" formaction="input.php?action=<?=$_GET['action']?><?=!empty($_GET['id']) ? '&id=' . h($_GET['id']) : ''?>">
            <input class="button" type="submit" value="<?=showAction($_GET['action'])?>完了">
        </div>
    </form>
</div>
<?php require_once(dirname(__FILE__) . '/../../includes/admin_footer.html'); ?>
