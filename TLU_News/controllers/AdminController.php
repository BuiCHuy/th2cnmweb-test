<?php
class AdminController{
    function login(){



        ob_start();
        require_once __DIR__ . '/../db.php';
        require_once __DIR__ . '/../models/Users.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dangnhap'])) {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            $role = checkUsers($username, $password, $conn);
           if (isset($role)) {
                $_SESSION['role'] = $role;
                $txt_error = $role;
                if ($role == 1) {
                   header('Location: views/admin/dashboard.php');
                    exit();
                } elseif ($role == 0) {

                    header ('Location:/TLU_News/index.php?controller=Home&action=showListNew');
                    exit();
                }
           } else {
               $txt_error = "Tên đăng nhập hoặc mật khẩu không đúng.";
            }
        }

        require 'views/admin/login.php';
    }
    function logout(){

        if (isset($_GET['action']) && $_GET['action'] =='logout') {
            session_unset();
            session_destroy();
            header('Location: /TLU_News/index.php?controller=Admin&action=login');
            exit();
        }
    }
    function dashboard(){
        require 'views/admin/dashboard.php';
    }
}
?>