<?php

session_start();
if (!isset($_SESSION['role'])) {
    require 'controllers/AdminController.php';
    $admin= new AdminController();
    $admin->login();
    exit();
}

if($_SESSION['role']==1){
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
if($_SESSION['role']==0){
    $controller = isset($_GET['controller']) ? $_GET['controller'] : 'Home';
    $action = isset($_GET['action']) ? $_GET['action'] : 'showListNew';
    $id = isset($_GET['index']) ? $_GET['index'] : null;
    switch ($controller) {
        case 'Home':
            require 'controllers/HomeController.php';
            $homeController = new HomeController();
            $homeController->$action();
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
        case 'search':
            require 'controllers/HomeController.php';
            $homeController = new HomeController();
            $homeController->showListNewsSearched($_POST['search']);
            break;
        Default :
            echo "error";
    }
}
?>
