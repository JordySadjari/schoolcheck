<?php

    $action = isset($_GET['action'])?$_GET['action']:'home';

    switch ($action){
        case 'home';
            include 'view/main.php';

            break;

        case 'create';
            include 'model/create.php';
            break;

        case 'delete';
            include 'view/delete.php';
            break;

        case 'read';
            include 'view/read.php';
            break;

        case 'update';
            include 'view/update.php';
            break;

    }

?>