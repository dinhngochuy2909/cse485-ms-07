# CSE485 - MiniShop - Phiếu 07

## Thông tin

- Môn học: Phát triển ứng dụng Web
- Framework: Laravel 12
- Bài: Phiếu 07 - Blade Layout Admin MiniShop

## Chức năng đã hoàn thành

- [x] Blade Layout (`layouts/admin.blade.php`)
- [x] Dashboard
- [x] Categories
- [x] Products
- [x] About
- [x] Active Menu
- [x] Flash Message Demo
- [x] Create Placeholder (Categories, Products)

## Cấu trúc View

```text
resources/views/
├── layouts/
│   └── admin.blade.php
├── partials/
│   └── flash.blade.php
└── admin/
    ├── dashboard.blade.php
    ├── about.blade.php
    ├── categories/
    │   ├── index.blade.php
    │   └── create.blade.php
    └── products/
        ├── index.blade.php
        └── create.blade.php
```

## Cách chạy

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

## Các trang

- /admin/dashboard
- /admin/categories
- /admin/products
- /admin/about
- /admin/categories/create
- /admin/products/create
- /admin/flash-demo

## Tiến độ

- [x] Blade Layout