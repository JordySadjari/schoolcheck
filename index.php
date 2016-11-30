<?php
    require 'includes/database.php';

    $action = isset($_GET['action'])?$_GET['action']:'home';

    switch ($action){
        case 'home';
            include 'view/read.php';
            break;

        case 'create';
            include 'model/create.php';
            break;

    }

?>