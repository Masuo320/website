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
try {
    $model = new Model();
    $model->connect();
    if ($_GET['action'] == 'create') {
        $sql =
            'INSERT INTO'
            . ' seat'
                . ' (name'
                . ', img'
                . ', turn'
                . ', create_user)'
            .' VALUES'
                . ' (:name'
                . ', :img'
                . ', :turn'
                . ', :create_user)'
        ;
        $stmt = $model->dbh->prepare($sql);
        $stmt->bindValue(':name', !empty($_POST['name']) ? $_POST['name'] : NULL);
        $stmt->bindValue(':img', !empty($_POST['img']) ? $_POST['img'] : NULL);
        $stmt->bindValue(':turn', !empty($_POST['turn']) ? $_POST['turn'] : NULL);
        $stmt->bindValue(':create_user', $_SESSION['id']);
    } else {
        $sql =
            'UPDATE'
                . ' seat'
            . ' SET'
                . ' name = :name'
                . ', img = :img'
                . ', turn = :turn'
                . ', update_user = :update_user'
                . ', updated_at = NOW()'
            . ' WHERE'
                . ' id = :id'
        ;
        $stmt = $model->dbh->prepare($sql);
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->bindValue(':name', !empty($_POST['name']) ? $_POST['name'] : NULL);
        $stmt->bindValue(':img', !empty($_POST['img']) ? $_POST['img'] : NULL);
        $stmt->bindValue(':turn', !empty($_POST['turn']) ? $_POST['turn'] : NULL);
        $stmt->bindValue(':update_user', $_SESSION['id']);
    }
    $stmt->execute();
} catch (Exception $e) {
    $error = 'システムエラーが発生したため、電話番号：055-277-3356までお電話ください';
}
?>
<?php require_once(dirname(__FILE__) . '/../../includes/admin_header.php');?>
<?php if (!empty($error)) :?>
    <h4><span>座席<?=showAction($_GET['action'])?>エラー</span></h4>
    <p class="error"><?=$error?></p>
<?php else :?>
    <h4><span>座席<?=showAction($_GET['action'])?>完了</span></h4>
    <p class="success_message"><?=showAction($_GET['action'])?>完了しました</p>
<?php endif;?>
<?php require_once(dirname(__FILE__) . '/../../includes/admin_footer.html');?>
