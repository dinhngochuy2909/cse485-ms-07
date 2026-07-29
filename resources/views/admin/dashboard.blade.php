<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>MiniShop Admin — Dashboard</title>
</head>
<body>
    <nav>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a> |
        <a href="{{ route('admin.categories') }}">Categories</a> |
        <a href="{{ route('admin.products') }}">Products</a> |
        <a href="{{ route('admin.about') }}">About</a>
    </nav>
    <hr>
    <h1>MiniShop Admin — Dashboard</h1>

    <h2>Thống kê hệ thống</h2>
    <ul>
        <li>Tổng số danh mục: <strong data-testid="stat-categories">{{ $stats['categories'] }}</strong></li>
        <li>Tổng số sản phẩm: <strong data-testid="stat-products">{{ $stats['products'] }}</strong></li>
        <li>Giá trị tồn kho: <strong data-testid="stat-inventory">{{ number_format($stats['inventory_value'], 0, ',', '.') }} VNĐ</strong></li>
    </ul>
</body>
</html>