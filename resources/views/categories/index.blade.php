<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Categories</h2>
    <a href="{{route('categories.create')}}">Add Category</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Total Products</th>
            <th>Actions</th>
        </tr>
        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->products_count}}</td>
            <td>
                <a href="{{route('categories.edit',$category->id)}}">Edit</a>
                <form action="{{route('categories.destroy',$category->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>