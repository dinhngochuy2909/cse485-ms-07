<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>MiniShop Admin — Dashboard</title>
</head>
<body>
    <nav>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a> |
        <a href="{{ route('admin.categories.index') }}">Categories</a> |
        <a href="{{ route('admin.products.index') }}">Products</a> |
        <a href="{{ route('admin.about') }}">About</a>
    </nav>

    <h1>MiniShop Admin — Dashboard</h1>

    <ul>
        <li data-testid="stat-categories">Categories: {{ $stats['categories'] }}</li>
        <li data-testid="stat-products">Products: {{ $stats['products'] }}</li>
        <li data-testid="stat-inventory">Inventory value: {{ number_format($stats['inventory_value'], 0, ',', '.') }} VND</li>
    </ul>
</body>
</html>