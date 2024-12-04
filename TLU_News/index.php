<?php

session_start();
if (!isset($_SESSION['role'])) {
    require 'controllers/AdminController.php';
    $ad = new AdminController();
    $ad->login();

    exit();
}
elseif($_SESSION['role']==1){
    $controller = isset($_GET['controller']) ? $_GET['controller'] : 'Admin';
    $action = isset($_GET['action']) ? $_GET['action'] : 'dashboard';
    $id = isset($_GET['index']) ? $_GET['index'] : null;

    switch ($controller) {
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
        case 'Home':
            require 'controllers/HomeController.php';
            $homeController = new HomeController();
            $homeController->$action();
            break;
        default:
            header('Location: views/admin/login.php');
            break;

    }
}




?>
