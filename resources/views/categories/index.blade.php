@extends('layout')

@section('title', 'Категории')

@section('body')
    <a href="../index.php">Admin</a>
    <a href="form.php">Add</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <th scope="row">{{ $category->id }}</th>
            <td>{{ $category->title }}</td>
            <td>{{ $category->slug }}</td>
            <td>{{ $category->created_at }}</td>
            <td>{{ $category->updated_at }}</td>
            <td>
                <a href="form.php?id={{ $category->id }}">Edit</a> |
                <a href="delete.php?id={{ $category->id }}">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection