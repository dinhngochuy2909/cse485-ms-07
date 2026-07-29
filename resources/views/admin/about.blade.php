<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>MiniShop Admin — About</title>
</head>
<body>
    <nav>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a> |
        <a href="{{ route('admin.categories.index') }}">Categories</a> |
        <a href="{{ route('admin.products.index') }}">Products</a> |
        <a href="{{ route('admin.about') }}">About</a>
    </nav>

    <h1>MiniShop Admin — About</h1>

    <p>
        MiniShop là project thực hành xuyên suốt môn CSE485, bắt đầu từ Front Controller
        tự viết ở Phiếu 05, chuyển sang Laravel ở Phiếu 06 với routing và controller thật.
        Từ Phiếu 07, các trang admin sẽ được gộp vào một Blade layout dùng chung
        (@extends / @yield), sau đó Phiếu 08 bổ sung migration cho 2 bảng dữ liệu.
        Cuối chuỗi, ở Phiếu 12, toàn bộ Dashboard sẽ chạy CRUD thật trên 2 bảng đó
        thay vì các số liệu giả như hiện tại.
    </p>
</body>
</html>