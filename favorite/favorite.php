<?php
include 'read-favorite.php';
include 'add-favorite.php';
include 'delete-favorite.php';

$fitur = $_GET['fitur'];
switch ($fitur) {
    case 'add':
        add();
    case 'read':
        read();
        break;
    case 'delete':
        delete();
        header('location:favorite.php?fitur=read');
        break;

    default:
        read();
        break;
}
?>