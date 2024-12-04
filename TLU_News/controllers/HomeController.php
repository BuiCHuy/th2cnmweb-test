
<?php

class HomeController{
    function showListNew(){
        // yeu cau data tu db
        // hien thi len cho ng xem
        // yeu cau: hien thi ds tin tuc. tuc la chi can category, title. het

        require 'models\Category.php';
        $newcategoryser = new Category();
        $list_categories = $newcategoryser->getAllCategory();

        require 'models/News.php';
        $newser = new News();
        $list_news = $newser->getAllNews();
        $tukhoa='';
        require 'views/home/index.php'; // goi den views

    }
     function showListNewsSearched($tukhoa){
            require 'models\Category.php';
            $newcategoryser = new Category();
            $list_categories = $newcategoryser->getAllCategory();

            require 'models/News.php';
            $newC = new HomeController();

            $host = "localhost"; // Địa chỉ máy chủ
            $dbname = "tintuc"; // Tên cơ sở dữ liệu
            $username = "root"; // Tên người dùng
            $password = ""; // Mật khẩu
            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

            $list_news = $newC->TimKiemPDO($conn, $tukhoa);
            require 'views/home/index.php'; // goi den views
        }


        // doan code duoi cua Viet Hoang:
        function connectDB() {
            $host = "localhost"; // Địa chỉ máy chủ
            $dbname = "tintuc"; // Tên cơ sở dữ liệu
            $username = "root"; // Tên người dùng
            $password = ""; // Mật khẩu
            try {
                $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            } catch (PDOException $e) {
                die("Kết nối thất bại: " . $e->getMessage());
            }
        }

        // Hàm tìm kiếm
        function TimKiemPDO($conn, $tukhoa) {
            try {
                // Câu lệnh SQL
                $sql = "SELECT * FROM news 
                        WHERE title like :tukhoa  
                        ORDER BY id DESC";
                $stmt = $conn->prepare($sql);
                $searchKeyword = "%" . $tukhoa . "%";
                $stmt->bindParam(':tukhoa', $searchKeyword, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Lỗi: " . $e->getMessage();
                return [];
            }
        }
    }

?>
