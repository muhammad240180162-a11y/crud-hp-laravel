<!DOCTYPE html>
<html>
<head>
    <title>Tambah Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h1>Tambah Category</h1>

<form action="/categories" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama Category</label>
        <input type="text" name="name" class="form-control">
    </div>

    <button class="btn btn-success">Simpan</button>
</form>

</body>
</html>