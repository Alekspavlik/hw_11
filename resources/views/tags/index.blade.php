@extends('layout')

@section('title', 'Теги')

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
        @foreach($tags as $tag)
            <tr>
                <th scope="row">{{ $tag->id }}</th>
                <td>{{ $tag->title }}</td>
                <td>{{ $tag->slug }}</td>
                <td>{{ $tag->created_at }}</td>
                <td>{{ $tag->updated_at }}</td>
                <td>
                    <a href="form.php?id={{ $tag->id }}">Edit</a> |
                    <a href="delete.php?id={{ $tag->id }}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection