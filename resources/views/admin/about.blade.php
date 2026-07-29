<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>MiniShop Admin — About</title>
</head>
<body>
    <nav>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a> |
        <a href="{{ route('admin.categories') }}">Categories</a> |
        <a href="{{ route('admin.products') }}">Products</a> |
        <a href="{{ route('admin.about') }}">About</a>
    </nav>
    <hr>
    <h1>Giới thiệu dự án MiniShop</h1>
    <p>MiniShop là hệ thống quản lý bán hàng đơn giản được phát triển nhằm thực hành kiến trúc MVC trong Laravel. Dự án hướng tới hoàn thiện toàn bộ các chức năng CRUD cho Danh mục và Sản phẩm cùng với việc xử lý dữ liệu tồn kho. Trong các phiên bản tới (P07–P12), hệ thống sẽ được nâng cấp giao diện chung bằng Blade Layout, xây dựng Cơ sở dữ liệu qua Migration và hoàn thiện giao diện quản trị toàn diện.</p>
</body>
</html>