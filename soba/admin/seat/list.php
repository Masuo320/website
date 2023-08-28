<?php
session_start();
require_once(dirname(__FILE__) . '/../../lib/model/Model.php');
require_once(dirname(__FILE__) . '/../../lib/function.php');
if ($_SESSION['authenticated'] != true) {
    header('Location: ../login.php');
    exit;
}

try {
    $model = new Model();
    $model->connect();
    if (!empty($_POST['delete'])) {
        $sql = 'UPDATE seat SET delete_flg = 1 WHERE id = :id';
        $stmt = $model->dbh->prepare($sql);
        $stmt->bindValue(':id', $_POST['id'], PDO::PARAM_STR);
        $stmt->execute();
    }
    $sql =
        'SELECT'
            . ' id'
            . ', name'
            . ', img'
            . ', turn'
            . ', created_at'
            . ', updated_at'
        . ' FROM'
            . ' seat'
        . ' WHERE'
            . ' delete_flg = 0'
        . ' ORDER BY'
            . ' ' . (!empty($_GET['item']) ? $_GET['item'] : 'id')
            . ' ' . (!empty($_GET['sort']) ? $_GET['sort'] : 'DESC')
    ;
    $stmt = $model->dbh->query($sql);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $error = 'システムエラーが発生したため、電話番号：055-277-3356までお電話ください';
}
?>
<?php require_once(dirname(__FILE__) . '/../../includes/admin_header.php');?>
<h4><span>座席一覧</span></h4>
<?=!empty($error) ? '<p class="error">' . $error . '</p>' : ''?>
<?=empty($results) ? '<p class="message">データが登録されておりません</p>' : ''?>
<table>
    <tr>
        <th>
            <div class="sort">
                <a href="list.php?item=id&sort=ASC" class="sort_button_asc"></a>
                <span>ID</span>
                <a href="list.php?item=id&sort=DESC" class="sort_button_desc"></a>
            </div>
        </th>
        <th>
            <div class="sort">
                <a href="list.php?item=name&sort=ASC" class="sort_button_asc"></a>
                <span>座席名</span>
                <a href="list.php?item=name&sort=DESC" class="sort_button_desc"></a>
            </div>
        </th>
        <th>画像</th>
        <th>
            <div class="sort">
                <a href="list.php?item=turn&sort=ASC" class="sort_button_asc"></a>
                <span>表示順</span>
                <a href="list.php?item=turn&sort=DESC" class="sort_button_desc"></a>
            </div>
        </th>
        <th>作成日時</th>
        <th>
            <div class="sort">
                <a href="list.php?item=updated_at&sort=ASC" class="sort_button_asc"></a>
                <span>更新日時</span>
                <a href="list.php?item=updated_at&sort=DESC" class="sort_button_desc"></a>
            </div>
        </th>
        <th><a href="input.php?action=create"><span class="create_button">新規登録</span></a></th>
    </tr>
    <?php if (!empty($results)) :?>
        <?php foreach ($results as $result) :?>
            <tr>
                <td><?=h($result['id'])?></td>
                <td><?=h($result['name'])?></td>
                <td><?=!empty($result['img']) ? '<img src="../../img/' . h($result['img']) . '"class="img">' : ''?></td>
                <td><?=h($result['turn'])?></td>
                <td><?=h($result['created_at'])?></td>
                <td><?=h($result['updated_at'])?></td>
                <td>
                    <form action="" method="post" novalidate>
                        <input type="submit" value="編集" formaction="input.php?action=edit&id=<?=h($result['id'])?>">
                        <input type="submit" name="delete" value="削除" onclick="return confirm('本当に削除しますか？')">
                        <input type="hidden" name="id" value="<?=h($result['id'])?>">
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    <?php endif;?>
</table>
<?php require_once(dirname(__FILE__) . '/../../includes/admin_footer.html');?>
