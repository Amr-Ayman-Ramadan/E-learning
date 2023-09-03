@extends("admin.layout")
@section("content")
<form action="{{route("admin.categories.store")}}" method="post">
    @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    
    <button type="submit" name="add" class="btn btn-primary">Add</button>
</form>
@endsection