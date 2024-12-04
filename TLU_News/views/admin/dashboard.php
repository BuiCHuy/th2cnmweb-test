
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bảng Điều Khiển Quản Trị</title>
</head>

<body>

<!-- Header -->
<header class="bg-dark text-white py-4 text-center">
    <h1>Bảng Điều Khiển Quản Trị</h1>
</header>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Trang Quản Trị</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../home/index.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/TLU_News/index.php?controller=News&action=index">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quản lý người dùng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cài đặt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/TLU_News/index.php?controller=Admin&action=logout";>Thoát</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-5">
    <div class="row mt-4">
        <!-- Thống kê số lượng bài viết -->
        <div class="col-md-3 mb-4">
            <div class="card text-center p-3">
                <h3>Số lượng Tin Tức</h3>
                <p>100 bài viết</p>
            </div>
        </div>

        <!-- Thống kê số lượng người dùng -->
        <div class="col-md-3 mb-4">
            <div class="card text-center p-3">
                <h3>Số lượng Người Dùng</h3>
                <p>500 người dùng</p>
            </div>
        </div>

        <!-- Thống kê số lượng bài viết chờ duyệt -->
        <div class="col-md-3 mb-4">
            <div class="card text-center p-3">
                <h3>Bài Viết Chờ Duyệt</h3>
                <p>5 bài viết</p>
            </div>
        </div>

        <!-- Thống kê số lượng bình luận -->
        <div class="col-md-3 mb-4">
            <div class="card text-center p-3">
                <h3>Số Bình Luận</h3>
                <p>120 bình luận</p>
            </div>
        </div>
    </div>

    <!-- Nút thêm tin tức mới -->
    <a href="/TLU_News/index.php?controller=News&action=addNews" class="btn btn-success">Thêm Tin Tức Mới</a>

</div>

<!-- Footer -->
<footer class="bg-dark text-white py-3 text-center position-fixed w-100 bottom-0">
    <p>&copy; 2024 Trang web Quản trị Tin Tức - Tất cả quyền được bảo lưu.</p>
</footer>


</body>

</html>