<?php
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'insert':
            insert();
            break;
        case 'select':
            select();
            break;
    }
}

function select() {
    header('Location: logout.php');
    exit;
}

function insert() {
    header('Location: logout.php');
    exit;
}
?>
