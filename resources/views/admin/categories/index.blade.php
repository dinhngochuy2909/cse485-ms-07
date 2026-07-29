@extends('layouts.admin')

@section('title', 'Categories')

@section('page_heading')
Categories
@endsection

@section('content')

<a href="{{ route('admin.categories.create') }}" class="btn">
    Thêm mới
</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>Keyboard</td>
            <td>Mechanical Keyboard</td>
            <td>Edit | Delete</td>
        </tr>

        <tr>
            <td>2</td>
            <td>Mouse</td>
            <td>Wireless Mouse</td>
            <td>Edit | Delete</td>
        </tr>

        <tr>
            <td>3</td>
            <td>Monitor</td>
            <td>27 inch</td>
            <td>Edit | Delete</td>
        </tr>
    </tbody>
</table>

<!-- fake data P07; thay Eloquent P09–11 -->

@endsection