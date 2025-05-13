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
            <tr><th>id</th>
            <th>name</th>
            <th>code</th>
            <th>price</th>
            <th>edit</th>
            <th>delete</th>
            <th>logout</th>
</thead>
<tbody>
    @foreach($status as $statu)
    <tr>
    <td>{{$statu->id}}</td>
    <td>{{$statu->name}}</td>
    <td>{{$statu->code}}</td>
    <td>{{$statu->price}}</td>
    <td><a href="{{route('edit',$statu->id)}}">edit product info</a></td>
    <td>
        <form action="{{route('delete',$statu->id)}}"method="post">
            @csrf
        @method('delete')
            <input type="submit"value="delete">
        

</form>
    
</td>
<td><a href="{{route('logout')}}">logout</td>
</tr>
    @endforeach

</tbody>
</body>
</html>