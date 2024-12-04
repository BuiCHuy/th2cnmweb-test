<?php
require 'models/News.php';
require 'models/Category.php';
class NewsController{
    public function index(){
        $news=new News();
        $newslist=$news->getAllNews();
        include 'views/admin/news/index.php';
    }
    function showNews($id){

        $news_detail = [];
        $newsser = new News();    // newssver = news service
        $list_news = $newsser->getAllNews();

        foreach($list_news as $value){
            if($value["id"] == $id){
                $news_detail = $value;
            }
        }
        if($news_detail != ''){
            require 'views/news/detail.php';
        }
        else{
            echo 'khong tim thay tin tuc';
        }

    }
    public function addNews(){
        $ns = new News();
        $category = new Category();
        $categorylist = $category->getAllCategory();
        require 'views/admin/news/add.php';
        if($_SERVER['REQUEST_METHOD']=='POST'){

            $title=$_POST['title'];
            $content=$_POST['content'];
            $create_at=$_POST['create_at'];
            $category_id=$_POST['category_id'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "Tệp ". htmlspecialchars( basename( $_FILES["image"]["name"])). " đã được tải lên.";
            } else {
                echo "Xin lỗi, đã có lỗi xảy ra trong quá trình tải tệp tin của bạn.";
            }
            $image=$target_dir.$_FILES["image"]["name"];



            $ns->addNews($title,$content,$image,$create_at,$category_id);
            header ("Location:index.php?controller=News&action=index");
        }
    }
    public function editNews($id){
        $ns = new News();
        $current_news=$ns->getNewsById($id);
        require 'views/admin/news/edit.php';
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $title=$_POST['title'];
            $content=$_POST['content'];
            $create_at=$_POST['create_at'];
            $category_id=$_POST['category_id'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "Tệp ". htmlspecialchars( basename( $_FILES["image"]["name"])). " đã được tải lên.";
            } else {
                echo "Xin lỗi, đã có lỗi xảy ra trong quá trình tải tệp tin của bạn.";
            }
            $image=$target_dir.$_FILES["image"]["name"];
            $ns->editNews($id,$title,$content,$image,$create_at,$category_id);

            header ("Location:index.php?controller=News&action=index");
        }
    }
    public function deleteNews($id){
        $ns = new News();
        $ns->deleteNews($id);
        header ("Location:index.php?controller=News&action=index");
    }
}
