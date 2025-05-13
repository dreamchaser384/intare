<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">

<thead>
    <td>name</td>
    <td>email</td>
    <td>address</td>
    <td>gender</td>
    <td>age</td>
</tr>
</thead>
<tbody>
    <form >
    @foreach($products as $product)
    <td><input type="text"placeholder="name"name="name"value="{{$product->name}}"></td>
    <td><input type="text"placeholder="name"name="name"value="{{$product->email}}"></td>
    <td><input type="text"placeholder="name"name="name"value="{{$product->address}}"></td>
    <td><input type="text"placeholder="name"name="name"value="{{$product->gender}}"></td>
    <td><input type="text"placeholder="name"name="name"value="{{$product->age}}"></td>
    
</tr>

    @endforeach
</form>
</tbody>
</table>
</body>
</html>