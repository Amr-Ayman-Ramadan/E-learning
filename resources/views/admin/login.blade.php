<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('admin/css')}}/bootstrap.min.css">    
</head>
<div class="container p-5 m-5">
    <form action="{{route("admin.auth.do_login")}}" method="post">
        @csrf
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        
        <button type="submit" name="login" class="btn btn-primary">Submit</button>
    </form>
    
</div>




<!-- popper js -->
<script src="{{asset('admin/js')}}/popper.min.js"></script>
<!-- bootstrap js -->
<script src="{{asset('admin/js')}}/bootstrap.min.js"></script></body>

</html>