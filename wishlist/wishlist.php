<?php
include 'read-wishlist.php';
include 'add-wishlist.php';
include 'delete-wishlist.php';

$fitur = $_GET['fitur'];
switch ($fitur) {
    case 'add':
        add();
    case 'read':
        read();
        break;
    case 'delete':
        delete();
        header('location:wishlist.php?fitur=read');
        break;

    default:
        read();
        break;
}
?>