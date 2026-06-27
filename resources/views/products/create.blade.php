<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add Products</h2>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        Name:
        <input type="text" name="name"><br><br>
        Price:
        <input type="number" name="price" id=""><br><br>
        Category:
        <select name="category_id">
            @foreach($categories as $category)
            <option value="{{$category->id}}">
                {{$category->name}}
            </option>
            @endforeach
        </select>
        <button type="submit">Save</button>
    </form>
</body>
</html>