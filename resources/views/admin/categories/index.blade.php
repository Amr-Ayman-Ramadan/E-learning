@extends("admin.layout")
@section("content")

<div class="container d-flex justify-content-between">

    <h3>Categories</h3>
    <a class="btn btn-primary" href="{{route("admin.categories.create")}}" role="button">Add New Category</a>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($categories as  $Category)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$Category->name}}</td>
            <td>
                <a class="btn btn-primary" href="{{route("admin.categories.edit",$Category->id)}}" role="button">Edit</a>
                <a class="btn btn-danger" href="{{route("admin.categories.delete",$Category->id)}}" role="button">Delete</a>

            </td>
            
        </tr>
        @endforeach
    
    </tbody>
</table>

@endsection