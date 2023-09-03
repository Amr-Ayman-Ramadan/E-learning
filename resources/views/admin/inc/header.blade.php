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

<body>
    <!--::header part start::-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="{{route("admin.home")}}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route("admin.home")}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route("admin.categories.index")}}">categories</a>
            </li>
            </ul>
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route("admin.auth.logout")}}">logout</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- Header part end-->
