<!DOCTYPE html>
<html>
<head>

<title>Laravel Blog</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-dark bg-dark">
<div class="container">

<a href="/" class="navbar-brand">
Laravel Blog
</a>

<form action="/search" method="GET" class="d-flex">
<input type="text" name="search" class="form-control me-2" placeholder="Search">
<button class="btn btn-light">Search</button>
</form>

</div>
</nav>

<div class="container mt-4">

@yield('content')

</div>

</body>
</html>