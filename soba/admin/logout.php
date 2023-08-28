<?php
session_start();
unset($_SESSION['authenticated']);
unset($_SESSION['name']);
unset($_SESSION['id']);
header('Location: login.php');
exit;
