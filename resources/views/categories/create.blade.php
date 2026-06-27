<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add Category</h2>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Category Name">
    <button type="submit">Save</button>
</form>
</body>
</html>