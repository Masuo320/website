<?php
session_start();
require_once(dirname(__FILE__) . '/../../lib/model/Model.php');
require_once(dirname(__FILE__) . '/../../lib/function.php');
if ($_SESSION['authenticated'] != true) {
    header('Location: ../login.php');
    exit;
}
if (empty($_GET['action'])) {
    header('Location: list.php');
    exit;
}

$result = [];
if ($_GET['action'] == 'edit') {
    try {
        $model = new Model();
        $model->connect();
        $sql = 'SELECT id, name, img, turn FROM seat WHERE id = ? AND delete_flg = 0';
        $stmt = $model->dbh->prepare($sql);
        $stmt->execute([$_GET['id']]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        $error = 'システムエラーが発生したため、電話番号：055-277-3356までお電話ください';
    }
}
$result = $_POST + $result;
?>
<?php require_once(dirname(__FILE__) . '/../../includes/admin_header.php');?>
<h4><span>座席<?=showAction($_GET['action'])?></span></h4>
<?=!empty($error) ? '<p class="error">' . $error . '</p>' : ''?>
<?php if (isset($result)) :?>
    <div class="form_submission">
        <form action="confirm.php?action=<?=$_GET['action']?><?=!empty($_GET['id']) ? '&id=' . h($_GET['id']) : ''?>" method="post" novalidate>
            <table>
                <?php if (!empty($_GET['id'])) :?>
                    <tr>
                        <th>ID</th>
                        <td><?=h($_GET['id'])?></td>
                    </tr>
                <?php endif;?>
                <tr>
                    <th>座席名</th>
                    <td><input type="text" name="name" value="<?=!empty($result['name']) ? h($result['name']) : ''?>"></td>
                </tr>
                <tr>
                    <th>画像</th>
                    <td><input type="text" name="img" value="<?=!empty($result['img']) ? h($result['img']) : ''?>"></td>
                </tr>
                <tr>
                    <th>表示順</th>
                    <td><input type="text" name="turn" value="<?=!empty($result['turn']) ? h($result['turn']) : ''?>"></td>
                </tr>
            </table>
            <input type="submit" class="button" value="確認画面へ">
        </form>
    </div>
<?php endif;?>
<?php require_once(dirname(__FILE__) . '/../../includes/admin_footer.html');?>
