<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h1>Edit Category</h1>

<form action="/categories/{{ $category->id }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Category</label>
        <input type="text" name="name" value="{{ $category->name }}" class="form-control">
    </div>

    <button class="btn btn-primary">Update</button>
</form>

</body>
</html>