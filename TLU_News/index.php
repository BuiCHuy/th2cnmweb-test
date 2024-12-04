<?php

session_start();
if (!isset($_SESSION['role'])) {
    require 'controllers/AdminController.php';
    $ad = new AdminController();
    $ad->login();

    exit();
}

    $controller = isset($_GET['controller']) ? $_GET['controller'] : 'default';
    $action = isset($_GET['action']) ? $_GET['action'] : 'index';
    $id = isset($_GET['index']) ? $_GET['index'] : null;

    switch ($controller) {
        case 'default':
            require 'controllers/AdminController.php';
            $adminController = new AdminController();
            $adminController->dashboard();
            break;
        case 'News':
            require 'controllers/NewsController.php';
            $newsController = new NewsController();
            if($id){
                $newsController->$action($id);

            }
            else $newsController->$action();

            break;
        case 'Admin':

            require 'controllers/AdminController.php';
            $adminController = new AdminController();
            $adminController->$action();
            break;

        default:
            header('Location: views/admin/login.php');
            break;

    }

?>
