<?php
session_start();
require_once(dirname(__FILE__) . '/../lib/model/Model.php');
require_once(dirname(__FILE__) . '/../lib/function.php');

unset($_SESSION['authenticated']);
unset($_SESSION['name']);
unset($_SESSION['id']);

if (!empty($_POST['authentication'])) {
    if ($_POST['login_id'] === '' || $_POST['login_pass'] === '' || mb_ereg_match('^(\s|　)+$', $_POST['login_id']) || mb_ereg_match('^(\s|　)+$', $_POST['login_pass'])) {
        $loginError = 'IDかパスワードが入力されていません';
    } else {
        try {
            $model = new Model();
            $model->connect();
            $sql = 'SELECT * FROM admin_user WHERE login_id = ? AND delete_flg = 0';
            $stmt = $model->dbh->prepare($sql);
            $stmt->execute([$_POST['login_id']]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result && $_POST['login_pass'] === $result['login_pass']) {
                session_regenerate_id(true);
                $_SESSION['authenticated'] = 1;
                $_SESSION['name'] = $result['name'];
                $_SESSION['id'] = $result['id'];
                header('Location: top.php');
                exit;
            }
            $loginError = 'IDかパスワードが間違っています';
        } catch (Exception $e) {
            $loginError = 'システムエラーが発生したため、電話番号：055-277-3356までお電話ください';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>そば・山菜洞　しを里　管理ログイン画面</title>
    <meta name="description" content="Title">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../css/admin_login.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>そば・山菜洞 しを里　管理ログイン画面</h1>
        </header>
        <main>
            <div class="login_form">
                <?php if (isset($loginError)) : ?>
                    <div class="error"><?=$loginError?></div>
                <?php endif; ?>
                <form action="" method="post" novalidate>
                    <table>
                        <tr>
                            <th>ログインID:</th>
                            <td>
                                <input type="text" name="login_id" value="<?=!empty($_POST['login_id']) ? h($_POST['login_id']) : ''?>">
                            </td>
                        </tr>
                        <tr>
                            <th>パスワード:</th>
                            <td>
                                <input type="password" name="login_pass">
                            </td>
                        </tr>
                    </table>
                    <input class="form_submission" type="submit" name="authentication" value="認証">
                </form>
            </div>
        </main>
        <footer>
            <p class="copyright"><small>2023 ebacorp.inc</small></p>
        </footer>
    </div>
</body>
</html>
