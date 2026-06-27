<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit Category</h2>
    <form action="{{route('categories.update',$category->id)}}" method="POST">
        @csrf
        @method('PUT')
        Name: 
        <input type="text" name="name" value="{{$category->name}}">
        <button type="submit">Update</button>
    </form>
</body>
</html>