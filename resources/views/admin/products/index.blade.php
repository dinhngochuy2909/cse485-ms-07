@extends('layouts.admin')

@section('title', 'Products')

@section('page_heading')
Products
@endsection

@section('content')

<a href="{{ route('admin.products.create') }}" class="btn">
    Thêm mới
</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>Keychron K2</td>
            <td>Keyboard</td>
            <td>1.890.000</td>
            <td>Edit | Delete</td>
        </tr>

        <tr>
            <td>2</td>
            <td>Logitech M331</td>
            <td>Mouse</td>
            <td>290.000</td>
            <td>Edit | Delete</td>
        </tr>

        <tr>
            <td>3</td>
            <td>Dell 24 inch</td>
            <td>Monitor</td>
            <td>3.200.000</td>
            <td>Edit | Delete</td>
        </tr>
    </tbody>
</table>

<!-- fake data P07; thay Eloquent P09–11 -->

@endsection