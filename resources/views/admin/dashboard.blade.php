<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>

<h1>MiniShop Admin — Dashboard</h1>

<hr>

<a href="{{ route('admin.dashboard') }}">Dashboard</a> |
<a href="{{ route('admin.categories.index') }}">Categories</a> |
<a href="{{ route('admin.products.index') }}">Products</a> |
<a href="{{ route('admin.about') }}">About</a>

<hr>

<h2>CORE Stats</h2>

<p data-testid="categories">
    Categories: {{ $stats['categories'] }}
</p>

<p data-testid="products">
    Products: {{ $stats['products'] }}
</p>

<p data-testid="inventory">
    Inventory Value: {{ number_format($stats['inventory_value']) }}
</p>

</body>
</html>