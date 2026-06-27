<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit Product</h2>

    <form action="{{route('products.update',$product->id)}}" method="POST">
        @csrf
        @method('PUT')

        Name:
        <input type="text" name="name" value="{{$product->name}}" ><br><br>

        Price:
        <input type="number" name="price" value="{{$product->price}}"><br><br>

        Category:
        <select name="category_id">
            @foreach($categories as $category)
            <option value="{{$category->id}}"
                {{$product->category_id == $category->id ? 'selected' : ''}}>
                {{$category->name}}
            </option>
            @endforeach
        </select>

        <button type="submit">Update</button>
    </form>
</body>
</html>