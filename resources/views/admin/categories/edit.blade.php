@extends("admin.layout")
@section("content")
<form action="{{route("admin.categories.update",$categories->id)}}" method="post">
    @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category Name</label>
    <input type="text" name="name" value="{{$categories->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    
    <button type="submit" name="update" class="btn btn-primary">update</button>
</form>
@endsection