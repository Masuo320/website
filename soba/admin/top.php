<?php
session_start();
require_once(dirname(__FILE__) . '/../lib/function.php');
if ($_SESSION['authenticated'] != true) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ja">
<?php require_once(dirname(__FILE__) . '/../includes/admin_header.php');?>
<?php require_once(dirname(__FILE__) . '/../includes/admin_footer.html');?>
