<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - MiniShop</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial,sans-serif;
        }

        body{
            display:flex;
            min-height:100vh;
            background:#f4f4f4;
        }

        .sidebar{
            width:220px;
            background:#2c3e50;
            color:#fff;
            padding:20px;
        }

        .sidebar h2{
            text-align:center;
            margin-bottom:20px;
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            padding:10px;
            border-radius:5px;
            margin-bottom:8px;
        }

        .sidebar a:hover,
        .sidebar a.active{
            background:#3498db;
        }

        .content{
            flex:1;
            padding:25px;
        }

        h1{
            margin-bottom:20px;
        }

        .flash{
            background:#d4edda;
            color:#155724;
            padding:12px;
            border-radius:5px;
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
        }

        table th,
        table td{
            border:1px solid #ccc;
            padding:10px;
        }

        table th{
            background:#eee;
        }

        .btn{
            display:inline-block;
            background:#0d6efd;
            color:white;
            text-decoration:none;
            padding:8px 12px;
            border-radius:5px;
            margin-bottom:15px;
        }
    </style>
</head>
<body>

<div class="sidebar">

    <h2>MiniShop</h2>

    <a href="{{ route('admin.dashboard') }}"
       class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        Dashboard
    </a>

    <a href="{{ route('admin.categories.index') }}"
       class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
        Categories
    </a>

    <a href="{{ route('admin.products.index') }}"
       class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
        Products
    </a>

    <a href="{{ route('admin.about') }}"
       class="{{ request()->routeIs('admin.about') ? 'active' : '' }}">
        About
    </a>

</div>

<div class="content">

    <h1>@yield('page_heading')</h1>

    @include('partials.flash')

    @yield('content')

</div>

</body>
</html>